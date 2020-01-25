<?php

namespace App\Http\Controllers\admin;

use App\Association;
use App\ReviewItem;
use App\SubStandard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AssociationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $sub_standars= DB::table('sub_standards')
            ->select('sub_standards.id', 'sub_standards.arabic_name', 'sub_standards.english_name')
            ->join('association', 'sub_standards.id', '=', 'association.id_sub_standar')
            ->join('review_items', 'review_items.id', '=', 'association.id_review')
            ->where('review_items.id','=',$id)->orderBy('association.updated_at','DESC')
            ->get();
       // $sub_standars= DB::select('SELECT sub_standards.id,sub_standards.arabic_name,sub_standards.english_name FROM `sub_standards` JOIN association on sub_standards.id=association.id_sub_standar JOIN review_items on review_items.id=association.id_review  WHERE review_items.id='.$id);
       // $sub_standars_disponible=DB::select('SELECT * FROM `sub_standards` WHERE sub_standards.arabic_name NOT IN(SELECT sub_standards.arabic_name FROM `sub_standards` RIGHT JOIN association ON association.id_sub_standar=sub_standards.id WHERE association.id_review='.$id.')');
        $sub_standar=[];
        foreach ($sub_standars as $sub){
            array_push($sub_standar,$sub->arabic_name);
        }
        $sub_standars_disponible= SubStandard::all()->whereNotIn('arabic_name',$sub_standar);
        return view('admin.association.index', ['sub_standars' => $sub_standars,'dispo_sub_standars'=>$sub_standars_disponible,'id'=>$id]);
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
            $id_array=explode(',',$request->sub_standards_id);
            for ($i=0;$i<count($id_array);$i++){
                $association=new Association();
                $association->id_review=$request->id_review;
                $association->id_sub_standar=$id_array[$i];
                $association->updated_at=date('Y-m-d H:i:s');
                $association->created_at=date('Y-m-d H:i:s');
                $association->save();
                $association=null;
            }
            $reviewitem=ReviewItem::orderBy('updated_at','DESC');
            return response()->json($reviewitem, 201);
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
     * @param int $id
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function delete($id,$id_review)
    {
        Association::where('id_review','=',$id_review)->where('id_sub_standar','=',$id)->delete();
        return response()->json(null, 204);
    }
}
