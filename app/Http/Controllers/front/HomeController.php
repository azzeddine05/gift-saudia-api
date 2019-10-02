<?php

namespace App\Http\Controllers\front;

use App\Company;
use App\Events\CompanyHasRegistredEvent;
use App\GiftStep;
use App\MainSector;
use App\Notifications\NewCompanyRegistred;
use App\Repositories\CompanyRepositoy;
use App\Repositories\UserRepository;
use App\SecondarySector;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{

    private $companyRepositoy;
    private $userRepository;

    public function __construct()
    {

    }
    public function index()
    {
        return view('front.index');

    }

    public function registerConstructor()
    {
        $mainSectors = MainSector::all();
        return view('front.constructor.register.index', ['mainSectors' => $mainSectors]);

    }

    public function getSubSectorByMainSector(Request $request)
    {
        $mainSectorId = $request->get('mainSector');
        //dump($request->get('mainSector'));
        $subSectors = SecondarySector::where('main_sector_id', $mainSectorId)->get();
        return view('admin.secendarySectors.list', ['subSectors' => $subSectors]);

    }
    public function registerCompany(Request $request)
    {
        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
        ]);
        Company::create([
            'name' => $request->get('name'),
            'phone' => $request->get('phone'),
            'headquarters' => $request->get('headquarters'),
            'sub_sector_id' => $request->get('sub_sector_id'),
            'user_id' => $user->id,
        ]);
        //Send notification to admin
        $user_admin = User::find(1);
        $user_admin->notify(new NewCompanyRegistred($user));
         //Send Email Confirmation
        event(new CompanyHasRegistredEvent($user));
        return redirect()->back()->with('message', 'Registred binajahh intadir ta2kiid');


    }
}
