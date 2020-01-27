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
        $mainSectors =  MainSector::orderBy('updated_at','DESC')->get();
        return view('admin.mainSector.index', ['mainSectors' => $mainSectors]);

    }
    public function subSectors($mainSectorId)
    {
        $subSectors =  SecondarySector::where('main_sector_id', $mainSectorId)->get();
        if (sizeof($subSectors) > 0) {
            foreach ($subSectors as $sector) {
                $mainSector = $sector->mainSectors;
                break;
            }
        }else {
            return back()->with('msg', 'هدا القطاع الرئيسي لا يتوفر على قطاعات فرعية ');
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
        $totalWeightMainStandard = MainStandard::sum('weight');
        $readyModelFields =  MainStandard::all();
        $totalMarks = TotalMark::first();
        $total=0;
        if (isset($totalMarks->total))
            $total=$totalMarks->total;
        $restOftotal = $total/*fhad total fin kayn erro*/ - $totalWeightMainStandard;
        //$raedOnly = $totalMarks > 0 ? "readOnly" : "";
        return view('admin.readyModelFields.add', ['readyModelFields' => $readyModelFields, 'totalMarks' => $totalMarks,
                        'totalWeightMainStandard' => $totalWeightMainStandard, 'restOftotal' => $restOftotal
            ]);
    }

    public function getReadyModelFieldsSubStandard($mainId)
    {
        $subStandards =  SubStandard::where('main_standard_id', $mainId)->get();
        return view('admin.readyModelFields.subStandard', ['subStandards' => $subStandards]);
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

    public function registredFees()
    {
        return view('admin.feesRegistred.index');

    }

    public function subscribedFees()
    {
        return view('admin.feesSubscribed.index');

    }

}
