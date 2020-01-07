<?php

namespace App\Http\Controllers\admin;

use App\ReviewField;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class ReviewsController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $reviewsFields =  ReviewField::all();
        return view('admin.reviewsFields.index', ['reviewsFields' => $reviewsFields]);
    }

    public function show($id)
    {
        $step = ReviewField::find($id);
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
                //'type.required' => ' مطلوب إسم القطاع بالإنجليزية !',
            ]

        );
        if ($validator->passes()) {
            $reviewsFields = ReviewField::create($request->all());
            return response()->json($reviewsFields, 201);

        } else{
            return response()->json(['error'=>$validator->errors()->all()]);
        }
    }

    public function update(Request $request, ReviewField $reviewsFields)
    {

        $id = $request->get('id');
        $validator = Validator::make($request->all(), [
            'arabic_name' => 'required',
            'english_name' => 'required',
        ],
            [
                'arabic_name.required' => 'مطلوب إسم الحقل  بالعربية !',
                'english_name.required' => ' مطلوب إسم الحقل  بالإنجليزية !',
                //'type.required' => ' مطلوب إسم القطاع بالإنجليزية !',
            ]
        );
        if($validator->passes()) {
            $reviewsFields = ReviewField::find($id);
            $reviewsFields->arabic_name = $request->get('arabic_name');
            $reviewsFields->english_name = $request->get('english_name');
            $reviewsFields->type = $request->get('type');
            $reviewsFields->save();
            return response()->json($reviewsFields, 200);
        }else {
            return response()->json(['error' => $validator->errors()->all()]);
        }
    }

    public function delete($id)
    {
        $reviewsFields = ReviewField::find($id);
        $reviewsFields->delete();
        return response()->json(null, 204);

    }
}
