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
                'name' => 'School',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Hospital',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Restaurant',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Residential',
            ],
        ]);
    }
}
