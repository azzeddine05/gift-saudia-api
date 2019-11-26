<?php

namespace App\Http\Controllers\Api\giftSteps;

use App\GiftStep;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class GiftStepsController extends Controller
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
        return GiftStep::all();
    }

    public function show($id)
    {
        $step = GiftStep::find($id);
        return response()->json($step, 200);

    }

    public function store(Request $request)
    {

        //dd("welcome aissam", $request->all());
//        $this->validate($request,[
//            'title' => 'required',
//            'details' => 'required'
//        ]);
        $giftStep = GiftStep::create($request->all());
        return response()->json($giftStep, 201);
    }

    public function update(Request $request, $id)
    {
        dump('here now');
        dd($request->all());
        $step = GiftStep::find($id);
        $step->update($request->all());

        return response()->json($step, 200);
    }

    public function delete(GiftStep $giftStep)
    {
        $giftStep->delete();

        return response()->json(null, 204);
    }

}
