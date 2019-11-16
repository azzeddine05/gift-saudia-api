<?php

namespace App\Http\Controllers\admin;

use App\GiftStep;
use App\MainSector;
use App\MainStandard;
use App\RegistrationField;
use App\SecondarySector;
use App\SubStandard;
use App\TotalMark;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use function Psy\debug;


class DashboardController extends Controller
{
    use AuthenticatesUsers;

    public function index()
    {
        $user = Auth::User();
        if($user->hasRole('admin')) {
            return view('admin.dashboard.index');
        } elseif($user->hasRole('company')) {
            return redirect('company/dashboard');
        }

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
    public function subSectors($mainSectorId)
    {
        $subSectors =  SecondarySector::where('main_sector_id', $mainSectorId)->get();
        foreach ($subSectors as $sector) {
            $mainSector = $sector->mainSectors;
            break;
        }
        return view('admin.secendarySectors.index', ['subSectors' => $subSectors,
                    'mainSector' => $mainSector
            ]);

    }
    public function registrationFields()
    {
        $registrationFields =  RegistrationField::all();
        return view('admin.registrationFields.index', ['registrationFields' => $registrationFields]);
    }

    public function ReadyModelFields()
    {
        $mainModelFields =  MainStandard::all();
        return view('admin.readyModelFields.index', ['mainModelFields' => $mainModelFields]);
    }

    public function addReadyModelFields()
    {
        $readyModelFields =  MainStandard::all();
        $totalMarks = TotalMark::first();
        //$raedOnly = $totalMarks > 0 ? "readOnly" : "";
        return view('admin.readyModelFields.add', ['readyModelFields' => $readyModelFields, 'totalMarks' => $totalMarks]);
    }

    public function addTotalMarks(Request $request)
    {
        $totalMark = TotalMark::create($request->all());
        if ($totalMark) {
            return response()->json("true");
        }else{
            return response()->json("false");
        }

    }

}
