<?php

namespace App\Http\Controllers\api\companyRegistred;

use App\MainSector;
use App\Http\Controllers\Controller;
use App\RegistredCompany;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class CompanyRegistredController extends Controller
{
    use AuthenticatesUsers;

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
        return MainSector::all();
    }

    public function show(MainSector $mainSector)
    {
        return $mainSector;
    }

//    public function store(Request $request)
//    {
//        //dd("welcome here bro", $request->all());
//        // Get the currently authenticated user's ID...
//        $id = Auth::id();
//       dump( $id);die;
//        $datas = $request->all();
//        foreach ($datas as $data) {
//            $registredCompany = new RegistredCompany();
//            $registredCompany->company_id = $request->subStandardArabicName3;
//            $registredCompany->registred_field_id = $data['field_id'];;
//            $registredCompany->value = $data['field_value'];
//            $registredCompany->type = $data['type'];
//            $registredCompany->save();
//
//        }
//        return response()->json("success", 201);
//    }

    public function update(Request $request, MainSector $mainSector)
    {
        $mainSector->update($request->all());

        return response()->json($mainSector, 200);
    }

    public function delete(MainSector $mainSector)
    {
        $mainSector->delete();

        return response()->json(null, 204);
    }

}
