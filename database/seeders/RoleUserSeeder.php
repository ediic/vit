<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminUser = User::where('name', 'admin')->first();
        $authorUser = User::where('name', 'author')->first();
        $userUser = User::where('name', 'user')->first();

        $adminRole = Role::where('name', 'admin')->first();
        $authorRole = Role::where('name', 'author')->first();
        $userRole = Role::where('name', 'user')->first();

        $adminUser->roles()->attach($adminRole);
        $authorUser->roles()->attach($authorRole);
        $userUser->roles()->attach($userRole);
    }
}
