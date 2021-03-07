<?php

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_has_permissions')->insert([
            '5' => '2',
            '9' => '2',
            '11' => '2',
            '13' => '2',
            '17' => '2',
            '21' => '2',
        ]);
    }
}
