<?php

namespace App\Http\Controllers;

use App\Company;
use App\RegistrationField;
use App\RegistredCompany;
use App\SubStandard;
use App\MainStandard;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRegistredFields;
use Illuminate\Support\Facades\Auth;

class ReadyModelControlller extends Controller
{
    use AuthenticatesUsers;


    public function index()
    {
        $user = Auth::user();

        // $company = $user->company;
        //if !$user->company; // throw error

        $readyModelFields =  MainStandard::all()->load('subStandard');

        //get replies fields
        ///

        // dd($readyModelFields);

        // $readyModels = SubStandard::all()->groupBy('main_standard_id');
        return view('company.readyModelReponse.index', ['readyModels' => $readyModelFields]);

    }

    public function storeRegistredFields(StoreRegistredFields  $request)
    {
        //git all fields and all files
        // dd($request->rules(), $request->all());
        // dd($request->all(),$request->allFiles());
        // $rules = [
        //     'questions' => 'array',
        //     'questions.*.text' => 'required_with:questions|string',
        //     'questions.*.score' => 'required_with:questions|integer|min:1|max:10'
        // ];

        // if the request is valide
        if($request->validated())
        {
            dd($request->storeRepliesWithFields());
        }
        else {
            redirect()->withErrors($request->getValidatorInstance(), 'company.ready.model.reply');
        }
        
    }


}
