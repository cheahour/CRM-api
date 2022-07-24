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
                'name' => 'PP-Chamkamorn',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'PP-Beong Keng Kang',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'PP-Daun Penh',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'PP-Chrouy Changvar',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'PP-Chbar Ampov',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'PP-7Makara',
            ], [
                'id' => Str::uuid(),
                'name' => 'PP-Toul Kok',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'PP-Dangkao',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'PP-Porsen Chey',
            ], [
                'id' => Str::uuid(),
                'name' => 'PP-Meanchey',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'PP-Prek Pnov',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'PP-Sen Sok',
            ], [
                'id' => Str::uuid(),
                'name' => 'PP-Russeykeo',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Siem Reap',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Poipet',
            ], [
                'id' => Str::uuid(),
                'name' => 'Krong Soung',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Battambang',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Bavet',
            ],
        ]);
    }
}
