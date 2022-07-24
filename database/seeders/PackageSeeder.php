<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packages')->insert([
            [
                'id' => Str::uuid(),
                'name' => 'Today Fiber',
            ], [
                'id' => Str::uuid(),
                'name' => 'Today Fiber Plus',
            ], [
                'id' => Str::uuid(),
                'name' => 'TODAY Fiber home',
            ], [
                'id' => Str::uuid(),
                'name' => 'TODAY SimplyFast',
            ], [
                'id' => Str::uuid(),
                'name' => 'BBI',
            ], [
                'id' => Str::uuid(),
                'name' => 'L2 VPN',
            ], [
                'id' => Str::uuid(),
                'name' => 'DBI',
            ], [
                'id' => Str::uuid(),
                'name' => 'DBI+',
            ], [
                'id' => Str::uuid(),
                'name' => 'TODAY Dark Fiber',
            ], [
                'id' => Str::uuid(),
                'name' => 'Network Solution',
            ], [
                'id' => Str::uuid(),
                'name' => 'Equipment',
            ]
        ]);
    }
}
