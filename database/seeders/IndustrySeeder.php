<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('industries')->insert([
            [
                'id' => Str::uuid(),
                'name' => 'Apartment/Condo',
            ], [
                'id' => Str::uuid(),
                'name' => 'Bank',
            ], [
                'id' => Str::uuid(),
                'name' => 'MFI',
            ], [
                'id' => Str::uuid(),
                'name' => 'Service/Consultant',
            ], [
                'id' => Str::uuid(),
                'name' => 'Borey',
            ], [
                'id' => Str::uuid(),
                'name' => 'Casino',
            ], [
                'id' => Str::uuid(),
                'name' => 'Hotel',
            ], [
                'id' => Str::uuid(),
                'name' => 'Company',
            ], [
                'id' => Str::uuid(),
                'name' => 'Education',
            ], [
                'id' => Str::uuid(),
                'name' => 'Embassy',
            ], [
                'id' => Str::uuid(),
                'name' => 'Factory',
            ], [
                'id' => Str::uuid(),
                'name' => 'Game',
            ], [
                'id' => Str::uuid(),
                'name' => 'Gvt',
            ], [
                'id' => Str::uuid(),
                'name' => 'Coffee Shop',
            ], [
                'id' => Str::uuid(),
                'name' => 'Mall',
            ], [
                'id' => Str::uuid(),
                'name' => 'Mini Mart',
            ], [
                'id' => Str::uuid(),
                'name' => 'Healthcare',
            ], [
                'id' => Str::uuid(),
                'name' => 'Shop',
            ], [
                'id' => Str::uuid(),
                'name' => 'Hospitality',
            ], [
                'id' => Str::uuid(),
                'name' => 'Insurance',
            ], [
                'id' => Str::uuid(),
                'name' => 'MNCs',
            ], [
                'id' => Str::uuid(),
                'name' => 'NGOs',
            ], [
                'id' => Str::uuid(),
                'name' => 'TODAY Staff',
            ], [
                'id' => Str::uuid(),
                'name' => 'Sunrise Student',
            ], [
                'id' => Str::uuid(),
                'name' => 'Residential',
            ], [
                'id' => Str::uuid(),
                'name' => 'Restaurant',
            ], [
                'id' => Str::uuid(),
                'name' => 'Stock Exchange',
            ], [
                'id' => Str::uuid(),
                'name' => 'Telco',
            ],
        ]);
    }
}
