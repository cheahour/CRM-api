<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::whereName("Head-sale")->firstOrFail();
        $manager = User::create([
          'name' => 'Manager',
          'email' => 'super@manager.com',
          'password' => Hash::make('12345')
        ]);
        $manager->role()->associate($role);
        $manager->save();
    }
}
