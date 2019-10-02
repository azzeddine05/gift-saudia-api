<?php

namespace App\Http\Controllers\api\registerFields;

use App\Http\Controllers\Controller;
use App\RegistrationField;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FieldController extends Controller
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
        return RegistrationField::all();
    }

    public function show(RegistrationField $registrationField)
    {
        return $registrationField;
    }

    public function store(Request $request)
    {
        $registrationField = RegistrationField::create($request->all());
        return response()->json($registrationField, 201);
    }

    public function update(Request $request, RegistrationField $registrationField)
    {
        $registrationField->update($request->all());

        return response()->json($registrationField, 200);
    }

    public function delete(RegistrationField $registrationField)
    {
        $registrationField->delete();

        return response()->json(null, 204);
    }

}
