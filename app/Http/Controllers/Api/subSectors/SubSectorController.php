<?php

namespace App\Http\Controllers\api\subSectors;

use App\MainSector;
use App\Http\Controllers\Controller;
use App\SecondarySector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SubSectorController extends Controller
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
        return SecondarySector::all();
    }

    public function show(SecondarySector $secondarySector)
    {
        return $secondarySector;
    }

    public function store(Request $request)
    {
        $secondarySectors = SecondarySector::create($request->all());
        return response()->json($secondarySectors, 201);
    }

    public function update(Request $request, SecondarySector $secondarySectors)
    {
        $secondarySectors->update($request->all());

        return response()->json($secondarySectors, 200);
    }

    public function delete(SecondarySector $secondarySectors)
    {
        $secondarySectors->delete();

        return response()->json(null, 204);
    }

}
