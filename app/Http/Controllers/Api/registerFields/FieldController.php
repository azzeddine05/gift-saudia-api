<?php

namespace App\Http\Controllers\api\registerFields;

use App\Http\Controllers\Controller;
use App\RegistrationField;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;



class FieldController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function index()
    {
        return RegistrationField::all();
    }

    public function show($id)
    {
        $step = RegistrationField::find($id);
        return response()->json($step, 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'arabic_name' => 'required',
            'english_name' => 'required',
        ],
            [
                'arabic_name.required' => 'مطلوب إسم الحقل  بالعربية !',
                'english_name.required' => ' مطلوب إسم الحقل  بالإنجليزية !',
                //'type.required' => ' مطلوب إسم القطاع بالإنجليزية !',
            ]

        );
        if ($validator->passes()) {
            $registrationField = RegistrationField::create($request->all());
            return response()->json($registrationField, 201);
        } else{
            return response()->json(['error'=>$validator->errors()->all()]);
        }

    }

    public function update(Request $request, RegistrationField $registrationField)
    {
        $id = $request->get('id');

        $validator = Validator::make($request->all(), [
                'arabic_name' => 'required',
                'english_name' => 'required',
            ],
            [
                'arabic_name.required' => 'مطلوب إسم الحقل  بالعربية !',
                'english_name.required' => ' مطلوب إسم الحقل  بالإنجليزية !',
                //'type.required' => ' مطلوب إسم القطاع بالإنجليزية !',
            ]
        );
        if($validator->passes()){
            $registrationField = RegistrationField::find($id);
            $registrationField->arabic_name = $request->get('arabic_name');
            $registrationField->english_name = $request->get('english_name');
            $registrationField->type = $request->get('type');
            $registrationField->save();
            return response()->json($registrationField, 200);
        }else{
            return response()->json(['error'=>$validator->errors()->all()]);
        }




    }

    public function delete($id)
    {
        $registrationField = RegistrationField::find($id);
        $registrationField->delete();
        return response()->json(null, 204);

    }

}
