<?php

namespace App\Http\Controllers;

use App\Company;
use App\RegistrationField;
use App\RegistredCompany;
use App\TotalMark;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


class CompanyController extends Controller
{
    use AuthenticatesUsers;


    public function index()
    {
        //
        $readOnly = "";
        $registred = false;
        $payed = false;
        $delivred = false;
        $RegistrationFields =  RegistrationField::all();
        $user = Auth::User();
        
        if($user->hasRole('admin')) {
            $readOnly = "readOnly";
            $company = Company::where('user_id', 4)->firstOrFail();
            return view('company.dashboard', ['RegistrationFields' => $RegistrationFields, 'registred'
                => $registred, 'payed' => $payed, 'delivred' => $delivred, 'readOnly' => $readOnly
                ]
            );die;
        }

        $company = Company::where('user_id', $user->id)->firstOrFail();
        // dd($user->hasRole('company'));

        // dd($company);
        // dd($company->isAllStepsCompleted());
        
        if($company->isAllStepsCompleted()) {
            //if all steps are completed redirect to fill the ready-model-form
            return redirect()->route('company.ready.model.reply');            
        }
        
        $userId = Auth::id();
        $registred = false;
        $payed = false;
        $delivred = false;
        $company = Company::where('user_id', $userId)->firstOrFail();

        if($company->confirmed_registre) {
            $registred = true;
        }
        if($company->payment) {
            $payed = true;
        }
        if($company->order_delivery) {
            $delivred = true;
        }
        if ($registred && $payed && $delivred) {
            redirect('company/ready-model-registred');
        }

        $reponseRegistrationFields =  RegistredCompany::all();
//        $reponse = false;
//        if($reponseRegistrationFields->count() > 0) {
//            $reponse = true;
//        }else {
//            $reponse = false;
//        }
        //$RegistrationFields =  RegistrationField::all();
        return view('company.dashboard', ['RegistrationFields' => $RegistrationFields, 'registred'
            => $registred, 'payed' => $payed, 'delivred' => $delivred, 'readOnly' => $readOnly
            ]
        );

    }

    public function storeRegistredFields(Request $request)
    {
        $user_id = Auth::id();
        $datas = $request->all();
        foreach ($datas as $data) {
            $registredCompany = new RegistredCompany();
            $registredCompany->company_id = $user_id;
            $registredCompany->registred_field_id = $data['field_id'];;
            $registredCompany->value = $data['field_value'];
            $registredCompany->type = $data['type'];
            $registredCompany->save();
            $this->companyChangeStatusRegistred();

        }

        return response()->json("success", 201);
    }

    private function companyChangeStatusRegistred()
    {
        $userId = Auth::id();
        $affectedRows = Company::where('user_id', $userId)->update(['confirmed_registre' => true]);

    }

    public function getAllCompanies()
    {
        $companies =  Company::all();
        return view('admin.company.index', ['companies' => $companies]);

    }

    public function displayReadyModelRepliesForm(Request $request) {

    }

}
