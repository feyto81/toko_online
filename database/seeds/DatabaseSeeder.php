<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('role_has_permissions')->insert([
        //     'permission_id' => '5',
        //     'role_id' => '2',
        //     '11' => '2',
        //     '13' => '2',
        //     '17' => '2',
        //     '21' => '2',
        // ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '9',
            'role_id' => '2',
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '11',
            'role_id' => '2',
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '13',
            'role_id' => '2',
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '17',
            'role_id' => '2',
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '21',
            'role_id' => '2',
        ]);
    }
}
