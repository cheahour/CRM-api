<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => Str::uuid(),
                'name' => 'Manager',
                'email' => 'super@manager.com',
                'password' => Hash::make('12345'),
                'is_admin' => true,
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Sale manager 1',
                'email' => 'sale@manger1.com',
                'password' => Hash::make('12345'),
                'is_admin' => true,
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Sale manager 2',
                'email' => 'sale@manger2.com',
                'password' => Hash::make('12345'),
                'is_admin' => true,
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Sale 1',
                'email' => 'sale1@test.com',
                'password' => Hash::make('12345'),
                'is_admin' => true,
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Sale 2',
                'email' => 'sale2@test.com',
                'password' => Hash::make('12345'),
                'is_admin' => true,
            ]
        ]);
    }
}
