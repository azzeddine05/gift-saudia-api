<?php

namespace App\Http\Controllers\admin;

use App\ReviewItem;
use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ReviewItemController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $reviewitem =  DB::table('review_items')->select('review_items.*','sub_standards.arabic_name as standar_name')->Join('sub_standards','review_items.sub_standards_id','=','sub_standards.id')->get()->sortByDesc('updated_at');
        $dropdownstandar= DB::table('sub_standards')->select('sub_standards.id','sub_standards.arabic_name')->get();
        return view('admin.reviewItems.index', ['reviewItems' => $reviewitem,'subStandards'=>$dropdownstandar]);
    }

    public function show($id)
    {
        $step = ReviewItem::find($id);
        return response()->json($step, 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'arabic_name' => 'required',
            'english_name' => 'required',
        ],
            [
                'arabic_name.required' => 'مطلوب إسم الحقل  بالعربية !',
                'english_name.required' => ' مطلوب إسم الحقل  بالإنجليزية !',
            ]
        );

        if ($validator->passes()) {
            $id_array=explode(',',$request->sub_standards_id);
            for ($i=0;$i<count($id_array);$i++){
                 DB::insert("INSERT INTO `review_items`( `arabic_name`, `english_name`, `sub_standards_id`) VALUES ('$request->arabic_name','$request->arabic_name',$id_array[$i])");
            }
            $reviewitem=DB::select("SELECT * FROM `review_items` ORDER BY `updated_at` DESC");
            return response()->json($reviewitem, 201);
        } else{
            return response()->json(['error'=>$validator->errors()->all()]);
        }
    }

    public function update(Request $request, ReviewItem $reviewsFields)
    {
        $id = $request->get('id');
        $validator = Validator::make($request->all(), [
            'arabic_name' => 'required',
            'english_name' => 'required',
        ],
            [
                'arabic_name.required' => 'مطلوب إسم الحقل  بالعربية !',
                'english_name.required' => ' مطلوب إسم الحقل  بالإنجليزية !',
            ]
        );
        if($validator->passes()) {
            $reviewitem = ReviewItem::find($id);
            $reviewitem->arabic_name = $request->get('arabic_name');
            $reviewitem->english_name = $request->get('english_name');
            $reviewitem->sub_standards_id = $request->get('sub_standards_id');
            $reviewitem->save();
            return response()->json($reviewitem, 200);
        }else {
            return response()->json(['error'=>$validator->errors()->all()]);
        }
    }

    public function delete($id)
    {
        $reviewitem = ReviewItem::find($id);
        $reviewitem->delete();
        return response()->json(null, 204);
    }
}
