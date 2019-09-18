<?php

namespace App\Http\Controllers\api\steps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;

class GiftStepsController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function index()
    {

    }

    public function create(Request $request)
    {
        $users = User::all();
        $users = $users->toJson();
        return $users;
//        return response()->json([
//            'message' => 'welcome azzeddne',
//            'status' => 'status here ya'
//        ]);
//        return view('admin.login');
    }

}
