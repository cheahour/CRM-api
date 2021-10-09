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
      $managerRole = Role::whereName("Manager")->firstOrFail();
      $saleManagerRole = Role::whereName("Sale-manager")->firstOrFail();
      $saleRole = Role::whereName("Sale")->firstOrFail();

        /**
         * Seed manager role
         */
        $manager = User::create([
          'name' => 'Manager',
          'email' => 'super@manager.com',
          'password' => Hash::make('12345')
        ]);
        $manager->role()->associate($managerRole);
        $manager->save();

        /**
         * Seed sale manager role
         */
        $saleManager = User::create([
          'name' => 'Manager',
          'email' => 'super@manager.com',
          'password' => Hash::make('12345')
        ]);
        $saleManager->role()->associate($saleManagerRole);
        $saleManager->save();

        /**
         * Seed sale role
         */
         $sale = User::create([
           'name' => 'Sale 1',
           'email' => 'sale@test.com',
           'password' => Hash::make('12345'),
         ]);
         $sale->role()->associate($saleRole);
         $sale->save();
    }
}
