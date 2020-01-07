<?php

namespace App\Http\Controllers\admin;

use App\ReviewItem;
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
        $reviewitem =  ReviewItem::all();
        return view('admin.reviewItems.index', ['reviewItems' => $reviewitem]);
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
            $reviewitem = ReviewItem::create($request->all());
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
