<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\SubStandard;
use App\MainStandard;
use App\Company;
use App\ReadyModelReply;
use App\ReadyModelReplyFile;


class StoreRegistredFields extends FormRequest
{

    use AuthenticatesUsers;


    private $readyModelFields =  null;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::guard('web')? true : false;
        // return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        
        if(!$this->readyModelFields)
            $this->readyModelFields = MainStandard::all()->load('subStandard');

        foreach ($this->readyModelFields as $key => $mainStandard) {
            
            foreach ($mainStandard->subStandard as $key => $subStandard) {
                $validators[$mainStandard->english_name."_".$subStandard->english_name."_".$subStandard->id]  = 'nullable|max:255';
                $validators[$mainStandard->english_name."_".$subStandard->english_name."_".$subStandard->id."_file"]  = 'nullable|file';//5 Mb |size:5120
            }
        }
        return $validators;
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            
        ];
    }

    /**
     * Order all replies with files in collection of objects
     * 
     * @return array
     */
    public function storeRepliesWithFields() {
        
        if(!$this->readyModelFields)
            $this->readyModelFields = MainStandard::all()->load('subStandard');
        
        foreach ($this->readyModelFields as $key => $mainStandard) {
            $user = Auth::User();
            $company = Company::where('user_id', $user->id)->firstOrFail();

            $replies = array();

            foreach ($mainStandard->subStandard as $key => $subStandard) {
                $field_name = $mainStandard->english_name."_".$subStandard->english_name."_".$subStandard->id;
                $file_name = $mainStandard->english_name."_".$subStandard->english_name."_".$subStandard->id."_file";
                $field_reply_name = $mainStandard->english_name."_".$subStandard->english_name."_".$subStandard->id."_reply_id";
                $field_reply_file_name = $mainStandard->english_name."_".$subStandard->english_name."_".$subStandard->id."_reply_file";
                
                if(!$this->has($field_name) || empty($this->input($field_name))){
                    continue;
                }

                //create reply item 

                if($this->has($field_reply_name)) {
                    $reply = ReadyModelReply::find($this->input($field_reply_name));
                    
                    // dd($this->input($field_name));
                    $reply->update([
                        'value' => $this->input($field_name)
                    ]);
                }
                else {
                    $reply = ReadyModelReply::create([
                        'company_id' => $company->id,
                        'sub_standard_id' => $subStandard->id,
                        'value' => $this->input($field_name)
                    ]);
                }
                //test if the reply file is set then create an item in db
                if($this->has($field_reply_file_name)) {
                    if($this->hasFile($file_name) && $reply)
                    {
                        $image_name = uniqid() . time() . '.' . $this->file($file_name)->getClientOriginalExtension();
                        $image_path = $this->file($file_name)->storeAs('uploads', $image_name);

                        $file = ReadyModelReplyFile::find($this->input($field_reply_file_name));
                        $file->update([
                            'name' => uniqid() . time() . '.' . $this->file($file_name)->getClientOriginalExtension(),
                            'type' => $this->file($file_name)->getClientOriginalExtension(), 
                            'size' => $this->file($file_name)->getSize(), 
                        ]);
                    }
                }
                else {
                    if($this->hasFile($file_name) && $reply)
                    {
                        $image_name = uniqid() . time() . '.' . $this->file($file_name)->getClientOriginalExtension();
                        $image_path = $this->file($file_name)->storeAs('uploads', $image_name);

                        $file = ReadyModelReplyFile::create([
                            'name' => uniqid() . time() . '.' . $this->file($file_name)->getClientOriginalExtension(),
                            'type' => $this->file($file_name)->getClientOriginalExtension(), 
                            'size' => $this->file($file_name)->getSize(), 
                            'ready_model_reply_id' => $reply->id,
                        ]);
                    }
                }

                $replies[] = array(
                    'reply' => $reply,
                    'file'  => isset($file)? $file : null,
                );

            }
        }

        return $replies;
    }

}
