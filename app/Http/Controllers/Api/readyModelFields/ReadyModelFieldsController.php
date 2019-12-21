<?php

namespace App\Http\Controllers\api\readyModelFields;

use App\Company;
use App\MainStandard;
use App\SubStandard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ReadyModelFieldsController extends Controller
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
        return MainStandard::all();
    }

    public function show(MainSector $mainSector)
    {
        return $mainSector;
    }

    public function store(Request $request)
    {
        $mainStandard = (object)$request->mainstandard;
        $substandards = $request->substandards;

        if($mainStandard)
        {
            $newMainStandard = new MainStandard();
            $newMainStandard->arabic_name   = isset($mainStandard->arabic_name) ? $mainStandard->arabic_name : "";
            $newMainStandard->english_name  = isset($mainStandard->english_name) ? $mainStandard->english_name : "";
            $newMainStandard->weight        = isset($mainStandard->weight) ? $mainStandard->weight : 0;
            $newMainStandard->save();

            if($newMainStandard->id)
            {
                foreach ($substandards as $key => $value)
                {
                    $item = (object)$value;

                    $subStandard = new SubStandard();
                    $subStandard->arabic_name       = isset($item->arabic_name) ? $item->arabic_name : "";
                    $subStandard->english_name      = isset($item->english_name) ? $item->english_name : "";
                    $subStandard->weight            = isset($item->weight) ? $item->weight : 0;
                    $subStandard->main_standard_id  = $newMainStandard->id;
                    $subStandard->save();
                }

                return response()->json(["status" => "good"]);
            }
        }



        /*$mainStandard = new MainStandard();
        $mainStandard->arabic_name = $request->mainStandardArabicName;
        $mainStandard->english_name = $request->mainStandardArabicName;
        $mainStandard->weight = $request->weightMainStandard;
        $mainStandard->save();

        $subStandard = new SubStandard();
        $subStandard->arabic_name = $request->subStandardArabicName1;
        $subStandard->english_name = $request->subStandardArabicName1;
        $subStandard->weight = $request->weightOne;
        $subStandard->main_standard_id = $mainStandard->id;
        $subStandard->save();

        $subStandard1 = new SubStandard();
        $subStandard1->arabic_name = $request->subStandardArabicName2;
        $subStandard1->english_name = $request->subStandardArabicName2;
        $subStandard1->weight = $request->weightTwo;
        $subStandard1->main_standard_id = $mainStandard->id;
        $subStandard1->save();

        $subStandard2 = new SubStandard();
        $subStandard2->arabic_name = $request->subStandardArabicName3;
        $subStandard2->english_name = $request->subStandardArabicName3;
        $subStandard2->weight = $request->weightTree;
        $subStandard2->main_standard_id = $mainStandard->id;
        $subStandard2->save();*/

//        return response()->json($mainSectors, 201);
    }

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
