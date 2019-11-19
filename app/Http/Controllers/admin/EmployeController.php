<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class EmployeController extends Controller
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
        $employes = User::all();
        return view('admin.employes.index', ['employes' => $employes]);
    }

    public function show(MainSector $mainSector)
    {
        return $mainSector;
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'arabic_name' => 'required',
            'english_name' => 'required',
        ],
            [
                'arabic_name.required' => 'مطلوب إسم القطاع بالعربية !',
                'english_name.required' => ' مطلوب إسم القطاع بالإنجليزية !',
            ]

        );

        if ($validator->passes()) {
            $mainSectors = MainSector::create($request->all());
            //return response()->json($mainSectors, 201);
            return response()->json(['success'=>'Added new records.']);
        }else{
            return response()->json(['error'=>$validator->errors()->all()]);
        }
    }

    public function update(Request $request, MainSector $mainSector)
    {
        $mainSector->update($request->all());

        return response()->json($mainSector, 200);
    }

    public function delete($id)
    {
        $mainSector = MainSector::find($id);
        $mainSector->delete();
        return response()->json(null, 204);
    }
}
