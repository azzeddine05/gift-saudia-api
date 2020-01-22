<?php

namespace App\Http\Controllers\admin;

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
        $sub_standars= DB::select('SELECT sub_standards.id,sub_standards.arabic_name,sub_standards.english_name FROM `sub_standards` JOIN association on sub_standards.id=association.id_sub_standar JOIN review_items on review_items.id=association.id_review  WHERE review_items.id='.$id);
        $sub_standars_disponible=DB::select('SELECT sub_standards.id,sub_standards.arabic_name,sub_standards.english_name FROM `sub_standards` LEFT JOIN `association` ON sub_standards.id=association.id_sub_standar JOIN review_items on review_items.id='.$id.' WHERE association.id_review IS NULL');
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
                DB::insert("INSERT INTO `association`(`id_review`, `id_sub_standar`) VALUES ('".$request->id_review."','$id_array[$i]')");
            }
            $reviewitem=DB::select("SELECT * FROM `review_items` ORDER BY `updated_at` DESC");
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
        DB::delete("DELETE FROM `association` WHERE `id_review`=$id_review AND `id_sub_standar`=$id");
        return response()->json(null, 204);
    }
}
