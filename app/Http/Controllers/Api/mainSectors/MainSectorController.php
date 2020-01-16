<?php

namespace App\Http\Controllers\api\mainSectors;

use App\MainSector;
use App\MainStandard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;



class MainSectorController extends Controller
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
        return MainSector::all();
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
        } else{
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
        $mainSector = MainStandard::find($id);
        $mainSector->delete();
        return response()->json(null, 204);
    }

}
