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

        // $validators = [
        //     'title' => 'required|unique:posts|max:255',
        //     'body'  => 'required',

        //     'nameStandard_subStandard_id'
        // ];

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

        $values = $this->all();

        foreach ($values as $key => $value) {
            
        }

        foreach ($this->readyModelFields as $key => $mainStandard) {
            $user = Auth::User();
            $company = Company::where('user_id', $user->id)->firstOrFail();

            $replies = array();

            foreach ($mainStandard->subStandard as $key => $subStandard) {
                $field_name = $mainStandard->english_name."_".$subStandard->english_name."_".$subStandard->id;
                $file_name = $mainStandard->english_name."_".$subStandard->english_name."_".$subStandard->id."_file";
                
                //create reply item 
                $reply = ReadyModelReply::create([
                    'company_id' => $company->id,
                    'sub_standard_id' => $subStandard->id,
                    'value' => $this->input($field_name)
                ]);
                //test if the reply file is set then create an item in db
                if($this->hasFile($file_name) && $reply)
                {
                    $image_name = uniqid() . time() . '.' . $this->file($file_name)->getClientOriginalExtension();
		            $image_path = $this->file($file_name)->storeAs('uploads', $image_name);

                    $file = ReadyModelReplyFile::create([
                        'name' => uniqid() . time() . '.' . $this->file($file_name)->getClientOriginalExtension(),
                        'type' => $this->file($file_name)->getClientOriginalExtension(), 
                        'size' => $this->file($file_name)->getSize(), 
                        'replay_id' => $reply->id,
                    ]);
                }

                $replies[] = array(
                    'reply' => $reply,
                    'file'  => isset($file)? $file : null,
                );

            }
            return $replies;
        }
    }

}
