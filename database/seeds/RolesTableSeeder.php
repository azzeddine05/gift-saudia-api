<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'admin',
            'guard_name' => 'web',
        ]);
        DB::table('roles')->insert([
            'name' => 'company',
            'guard_name' => 'web',
        ]);
        DB::table('roles')->insert([
            'name' => 'reviewer',
            'guard_name' => 'web',
        ]);
        DB::table('roles')->insert([
            'name' => 'employe',
            'guard_name' => 'web',
        ]);
    }
}
