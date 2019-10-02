<?php

namespace App\Http\Controllers\admin;

use App\GiftStep;
use App\MainSector;
use App\RegistrationField;
use App\SecondarySector;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return view('admin.dashboard.index');

    }
    public function giftSteps()
    {
        $giftSteps =  GiftStep::all();
        return view('admin.gift.steps.index', ['giftSteps' => $giftSteps]);

    }
    public function mainSectors()
    {
        $mainSectors =  MainSector::all();
        return view('admin.mainSector.index', ['mainSectors' => $mainSectors]);

    }
    public function subSectors()
    {
        $subSectors =  SecondarySector::all();
        return view('admin.secendarySectors.index', ['subSectors' => $subSectors]);

    }
    public function registrationFields()
    {
        $registrationFields =  RegistrationField::all();
        return view('admin.registrationFields.index', ['registrationFields' => $registrationFields]);
    }


}
