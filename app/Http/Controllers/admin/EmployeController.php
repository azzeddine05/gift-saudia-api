<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Validator;
use DateTime;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class EmployeController extends Controller
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
        //$employes = User::all();
        $employes = User::role('employe')->get();
        return view('admin.employes.index', ['employes' => $employes]);
    }

    public function employePermissions($employeID)
    {
        $employe = User::find($employeID);
        $employePermissions = $employe->getAllPermissions();
        $permissions = Permission::all();
        //Laravel Not In
        return view('admin.employes.pemissions', ['employePermissions' => $employePermissions,
            'employe' => $employe, 'permissions' => $permissions]);

    }
    public function removePermissionOfEmploye($employeId, $permissionId)
    {
        $employe = User::find($employeId);

        $permission = Permission::findById($permissionId);
        $employe->revokePermissionTo($permission);
        return back()->with('success-deleted','تم حدف الصلاحية للموضف بنجاح ');

    }

    public function show(MainSector $mainSector)
    {
        return $mainSector;
    }

    public function store(Request $request)
    {
        $employeId = $request->get('employe');
        $employe = User::find($employeId);

        $permissionsSelected = $request->get('permissions');
        foreach ($permissionsSelected as $permissionSelected) {
            $permission = Permission::findById($permissionSelected);
            $employe->givePermissionTo($permission->name);
        }
    }

    public function update(Request $request, MainSector $mainSector)
    {
        $mainSector->update($request->all());

        return response()->json($mainSector, 200);
    }

    public function delete($id)
    {
        $mainSector = MainSector::find($id);
        $mainSector->delete();
        return response()->json(null, 204);
    }
}
