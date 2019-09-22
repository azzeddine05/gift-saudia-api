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

    public function show(GiftStep $giftStep)
    {
        return $giftStep;
    }

    public function store(Request $request)
    {
        //dd("welcome aissam", $request->all());
//        $this->validate($request,[
//            'title' => 'required',
//            'details' => 'required'
//        ]);
        $giftStep = GiftStep::create($request->all());
        //Session::flash('message', 'My message');

        return response()->json($giftStep, 201);
    }

    public function update(Request $request, GiftStep $giftStep)
    {
        $giftStep->update($request->all());

        return response()->json($giftStep, 200);
    }

    public function delete(GiftStep $giftStep)
    {
        $giftStep->delete();

        return response()->json(null, 204);
    }

}
