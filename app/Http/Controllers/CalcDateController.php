<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\GiftStep;
use Illuminate\Support\Facades\DB;

class CalcDateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        function calc_date($dt,$step){
            $dateNow=strtotime(date("Y-m-d h:i:s"));
            $dt1=date_create($dt);
            $end_date=strtotime(date_format($dt1,"Y-m-d H:i:s"));
            $check= $end_date-$dateNow-46828;
            if ($check>0){
                return view('front.index',['date_diff'=>$dt,'step'=>$step,'state'=>'play']);
            }else{
                return view('front.index',['date_diff'=>$dt,'step'=>$step,'state'=>'stop']);
            }
        }
        $date_register=DB::table('gift_steps')->select(db::raw('end_date'))->where('period_type','=','registredPeriod')->value('end_date');
        $date_review=DB::table('gift_steps')->select(db::raw('end_date'))->where('period_type','=','reviewsPeriod')->value('end_date');
        $date_result=DB::table('gift_steps')->select(db::raw('end_date'))->where('period_type','=','resultPeriod')->value('end_date');
        if (!is_null($date_register)){
            return calc_date($date_register,'registredPeriod');
        }elseif (!is_null($date_review)){
            return calc_date($date_review,'reviewsPeriod');
        }elseif (!is_null($date_result)){
            return calc_date($date_result,'resultPeriod');
        }else{
            return view('front.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
