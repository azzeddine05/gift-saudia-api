<?php

namespace App\Http\Controllers\api\mainSectors;

use App\MainSector;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
        $mainSectors = MainSector::create($request->all());
        return response()->json($mainSectors, 201);
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
