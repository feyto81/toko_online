<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Permission;
use App\Models\Role;

class ContohSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ask for db migration refresh, default is no
        if ($this->command->confirm('Do you wish to refresh migration before seeding, it will clear all old data ?')) {
            $this->command->call('migrate:refresh');
            $this->command->warn("Data cleared, starting from blank database.");
        }

        // Seed the default permissions
        $permissions = Permission::defaultPermissions();
        foreach ($permissions as $perms) {
            Permission::firstOrCreate(['name' => $perms]);
        }
        $this->command->info('Default Permissions added.');

        // Confirm roles needed
        if ($this->command->confirm('Create Roles for user, default is admin and user? [y|N]', true)) {
            // Ask for roles from input
            $input_roles = $this->command->ask('Enter roles in comma separate format.', 'Admin,User');
            // Expolode roles
            $roles_array = explode(',', $input_roles);

            // add roles
            foreach ($roles_array as $role) {
                $role = Role::firstOrCreate(['name' => trim($role)]);
                if ($role->name == 'Admin') {
                    // asign all permissions
                    $role->syncPermissions(Permission::all());
                    $this->command->info('Admin granted all the permissions');
                } else {
                    // for others by default only read access
                    $role->syncPermissions(Permission::where('name', 'LIKE', 'view_%')->get());
                }

                // create one user for each role
                $this->createUser($role);
            }
            $this->command->info('Roles' . $input_roles . 'added successfully');
        } else {
            Role::firstOrCreate(['name' => 'User']);
            $this->command->info('Added only default user role.');
        }
    }

    //
    // create a user with given role

    private function createUser($role)
    {
        $user = factory(User::class)->create();
        $user->assignRole($role->name);

        if ($role->name == 'Admin') {
            $this->command->info('Here is your admin details to login.');
            $this->command->warn($user->email);
            $this->command->warn('Password is "password"');
        }
    }
}
