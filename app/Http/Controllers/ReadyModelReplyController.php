<?php

namespace App\Http\Controllers;

use App\Company;
use App\Notifications\NewCompanyRegistred;
use App\Notifications\NewCompanyReplyForReadyModel;
use App\ReadyModelReply;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReadyModelReplyController extends Controller
{
    public function index()
    {

    }

    public function getAllEmptyReadyModels()
    {
//        $readyModelsReplys =  ReadyModelReply::all();
//        $readyModelsReplysConfirmed =  ReadyModelReply::all();
//        $readyModelsReplysRefused =  ReadyModelReply::all();
//        return view('admin.readyModelFields.add', ['$readyModelsReplys' => $readyModelsReplys]);
    }

    public function getAllReplyReadyModelsReplyNotDelivred()
    {
//        $readyModelsReplys =  ReadyModelReply::where('delivred', false)
//                                             ->where('refuse', false)
//                                             ->groupBy('company_id')
//                                             ->get();
       $readyModelsReplys =  ReadyModelReply::all()->groupBy('company_id');
       foreach ($readyModelsReplys as $readyModelsReply) {
           foreach ($readyModelsReply as $readyModel) {
               dump($readyModel->company->name);

           }
       }die;
        return view('admin.readyModelReplyNotConfirmed.index', ['readyModelsReplys' => $readyModelsReplys]);
    }

    public function getAllReplyReadyModelsReplyDelivred()
    {
        //$readyModelsReplys =  ReadyModelReply::all();
//        $readyModelsReplysConfirmed =  ReadyModelReply::all();
//        $readyModelsReplysRefused =  ReadyModelReply::all();
        //return view('admin.readyModelFields.add', ['$readyModelsReplys' => $readyModelsReplys]);
    }

    public function store(Request $request)
    {
        $company_id = Auth::user()->company->id;
        $datas = $request->all();
        //$company = Company::find($company_id)->user;

        foreach ($datas as $data) {
            $readyModelReply = new ReadyModelReply();
            $readyModelReply->company_id = $company_id;
            $readyModelReply->sub_standard_id = $data['sub_standard_id'];;
            $readyModelReply->value = $data['value'];
            $readyModelReply->save();

            //Notify Admin
//            $user_admin = User::find(1);
//            $company = Company::find($company_id);
//            $user_admin->notify(new NewCompanyReplyForReadyModel($company->user));
        }

        return response()->json("success", 201);
    }

}
