<?php

namespace App\Http\Controllers;

use App\MainStandard;
use App\TotalMark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class reviewModelReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalWeightMainStandard = MainStandard::sum('weight');
        $readyModelFields =  MainStandard::all();
        $totalMarks = TotalMark::first();
        $total=0;
        $compaby_id=1;
        if (isset($totalMarks->total))
            $total=$totalMarks->total;
        $restOftotal = $total/*fhad total fin kayn error*/ - $totalWeightMainStandard;
        //get sub standars
        $reviews= DB::table('sub_standards')
            ->select('review_items.arabic_name','review_items.id', 'sub_standards.arabic_name as standard_title', 'ready_model_replies.value','ready_model_replies.company_id')
            ->join('association', 'sub_standards.id', '=', 'association.id_sub_standar')
            ->join('ready_model_replies', 'ready_model_replies.sub_standard_id', '=', 'association.id_sub_standar')
            ->join('review_items', 'review_items.id', '=', 'association.id_review')->where('ready_model_replies.company_id','=',$compaby_id)->orderBy('sub_standards.arabic_name')->get();
        echo "<script>console.log(".json_encode( $reviews).");</script>";
        return view('reviews.readyModelReply', ['readyModelFields' => $readyModelFields, 'totalMarks' => $totalMarks,
            'totalWeightMainStandard' => $totalWeightMainStandard, 'restOftotal' => $restOftotal,'reviews'=>$reviews
        ]);
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
