<?php

namespace App\Http\Controllers\admin;


use App\Association;
use App\ReviewItem;
use App\SubStandard;
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
        $reviewitem =  ReviewItem::orderBy('updated_at', 'desc')->get();
        $dropdownstandar=SubStandard::all(['sub_standards.id','sub_standards.arabic_name']);
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
            $review=new ReviewItem();
            $review->arabic_name=$request->arabic_name;
            $review->english_name=$request->arabic_name;
            $review->save();
           // DB::insert("INSERT INTO `review_items`( `arabic_name`, `english_name`) VALUES ('$request->arabic_name','$request->arabic_name')");
            $id_array=explode(',',$request->sub_standards_id);
            $id_review=$review->id;
            for ($i=0;$i<count($id_array);$i++){
                // DB::insert("INSERT INTO `association`(`id_review`, `id_sub_standar`) VALUES ('".$id_review."','$id_array[$i]')");
                $association=new Association();
                $association->id_review=$id_review;
                $association->id_sub_standar=$id_array[$i];
                $association->save();
                $association=null;
            }
            $reviewitem=ReviewItem::orderBy('updated_at', 'desc')->get();//DB::select("SELECT * FROM `review_items` ORDER BY `updated_at` DESC");
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
        Association::where('id_review',$id)->delete();
       // DB::table('association')->where('id_review', $id)->delete();
        return response()->json(null, 204);
    }
}
