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
use App\ReadyModelReply;
use App\ReadyModelReplyFile;

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
        $replies_company = ReadyModelReply::where('company_id',$user->company->id)->get();
        if($replies_company)
            $replies_company->load('file');
        ///

        // dd($readyModelFields);

        // $readyModels = SubStandard::all()->groupBy('main_standard_id');
        return view('company.readyModelReponse.index', ['readyModels' => $readyModelFields, 'readyModelReplies'=>$replies_company]);

    }

    public function storeRegistredFields(StoreRegistredFields  $request)
    {
        // if the request is valide
        if($request->validated())
        {
            $request->storeRepliesWithFields();
            return redirect()->route('company.ready.model.redirect');
        }
        else {
            redirect()->withErrors($request->getValidatorInstance(), 'company.ready.model.reply');
        }

    }


}
