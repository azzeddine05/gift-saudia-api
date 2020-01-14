<?php

namespace App\Http\Controllers;

use App\Company;
use App\RegistrationField;
use App\RegistredCompany;
use App\SubStandard;
use App\MainStandard;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
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

        // dd($readyModelFields);

        // $readyModels = SubStandard::all()->groupBy('main_standard_id');
        return view('company.readyModelReponse.index', ['readyModels' => $readyModelFields]);

    }

//    public function storeRegistredFields(Request $request)
//    {
//        $user_id = Auth::id();
//        $datas = $request->all();
//        foreach ($datas as $data) {
//            $registredCompany = new RegistredCompany();
//            $registredCompany->company_id = $user_id;
//            $registredCompany->registred_field_id = $data['field_id'];;
//            $registredCompany->value = $data['field_value'];
//            $registredCompany->type = $data['type'];
//            $registredCompany->save();
//            $this->companyChangeStatusRegistred();
//
//        }
//
//        return response()->json("success", 201);
//    }


}
