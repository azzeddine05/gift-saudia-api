<?php

namespace App\Http\Controllers\Api\giftSteps;

use App\GiftStep;
use App\Http\Controllers\Controller;
use Validator;
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

        $validator = Validator::make($request->all(), [
                'arabic_name' => 'required',
                'english_name' => 'required',
                'period_type' => 'required',
                'start_date'=>'after_or_equal:today|required',
                'end_date'=>"after:start_date|required",
            ]
        );
        if($validator->passes()) {
            $giftStep = GiftStep::create($request->all());
            return response()->json($giftStep, 201);
        }else {
            return response()->json(['error' => $validator->errors()->all()]);
        }
    }

    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
                'arabic_name' => 'required',
                'english_name' => 'required',
                'period_type' => 'required',
                'start_date'=>'after_or_equal:today|required',
                'end_date'=>"after:start_date|required",
        ]
        );
        if($validator->passes()) {
            $giftStep = GiftStep::find($id);
            $giftStep->arabic_name = $request->get('arabic_name');
            $giftStep->english_name = $request->get('arabic_name');
            $giftStep->period_type= $request->get('arabic_name');
            $giftStep->start_date= $request->get('start_date');
            $giftStep->end_date= $request->get('end_date');
            $giftStep->save();
            return response()->json($giftStep, 200);
        }else {
            return response()->json(['error' => $validator->errors()->all()]);
        }

    }

    public function delete($id)
    {
        $giftStep = GiftStep::find($id);
        $giftStep->delete();
        return response()->json(null, 204);
    }

}
