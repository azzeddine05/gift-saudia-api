<?php

namespace App\Http\Controllers;

use App\MainStandard;
use App\TotalMark;
use Illuminate\Http\Request;

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
        if (isset($totalMarks->total))
            $total=$totalMarks->total;
        $restOftotal = $total/*fhad total fin kayn erro*/ - $totalWeightMainStandard;
        return view('reviews.readyModelReply', ['readyModelFields' => $readyModelFields, 'totalMarks' => $totalMarks,
            'totalWeightMainStandard' => $totalWeightMainStandard, 'restOftotal' => $restOftotal
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
