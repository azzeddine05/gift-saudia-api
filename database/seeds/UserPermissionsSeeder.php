<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'accept orders']);
        Permission::create(['name' => 'refuse orders']);
        Permission::create(['name' => 'accept reports']);
        Permission::create(['name' => 'refuse reports']);
        Permission::create(['name' => 'edit reports']);
    }
}
