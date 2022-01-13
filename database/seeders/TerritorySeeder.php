<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TerritorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('territories')->insert([
            [
                'id' => Str::uuid(),
                'name' => 'PP-Chrouy Changvar',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'PP-Toul Kok',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'PP-Meanchey',
            ],
        ]);
    }
}
