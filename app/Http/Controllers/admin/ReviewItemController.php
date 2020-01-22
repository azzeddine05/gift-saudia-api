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
        $reviewitem =  ReviewItem::orderBy('updated_at', 'desc')->get();;
        $dropdownstandar= DB::table('sub_standards')->select('sub_standards.id','sub_standards.arabic_name')->get();
        return view('admin.reviewItems.index', ['reviewItems' => $reviewitem,'subStandards'=>$dropdownstandar]);
    }

    public function show($id)
    {
        $step=ReviewItem::find($id);
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
            DB::insert("INSERT INTO `review_items`( `arabic_name`, `english_name`) VALUES ('$request->arabic_name','$request->arabic_name')");
            $id_array=explode(',',$request->sub_standards_id);
            $id_review=DB::selectOne('SELECT LAST_INSERT_ID() as "id";');
            $id_review= (array)$id_review;
            for ($i=0;$i<count($id_array);$i++){
                 DB::insert("INSERT INTO `association`(`id_review`, `id_sub_standar`) VALUES ('".$id_review['id']."','$id_array[$i]')");
            }
            $reviewitem=DB::select("SELECT * FROM `review_items` ORDER BY `updated_at` DESC");
            return response()->json($reviewitem, 201);
        } else{
            return response()->json(['error'=>$validator->errors()->all()]);
        }
    }

    public function update(Request $request)
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
            $reviewitem->updated_at=date('Y-m-d H:i:s');
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
        DB::table('association')->where('id_review', $id)->delete();
        return response()->json(null, 204);
    }
}
