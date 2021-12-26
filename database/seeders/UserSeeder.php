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
        $head_sale = Role::whereName("Head-sale")->firstOrFail();
        $dsm = Role::whereName("DSM")->firstOrFail();
        $manager = User::create([
          'name' => 'Manager',
          'email' => 'super@manager.com',
          'password' => Hash::make('12345')
        ]);
        $anonymous_dsm = User::create([
            "name" => "Anonymous",
            "email" => "anonymous@dsm.com",
            "password" => Hash::make("12345")
        ]);

        $manager->role()->associate($head_sale);
        $anonymous_dsm->role()->associate($dsm);

        $manager->save();
        $anonymous_dsm->save();
    }
}
