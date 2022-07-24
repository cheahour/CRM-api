<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Str;

class ExistingProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('existing_providers')->insert([
            [
                'id' => Str::uuid(),
                'name' => 'SingMeng/Digi',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Cellcard',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Chuan Wei',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Opennet',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'CityLink',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Metfone',
            ], [
                'id' => Str::uuid(),
                'name' => 'Cootel Cambodia',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'EZECOM',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Flash Tech',
            ], [
                'id' => Str::uuid(),
                'name' => 'MaxBIT',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'MekongNet ISP',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'NeocomISP Limited/NTC',
            ], [
                'id' => Str::uuid(),
                'name' => 'NTT',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'ONLINE/Internet Home',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Seatel/Tom Net',
            ], [
                'id' => Str::uuid(),
                'name' => 'SINET',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Smart Axiata',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Today Communication',
            ], [
                'id' => Str::uuid(),
                'name' => 'ATA',
            ], [
                'id' => Str::uuid(),
                'name' => 'TURBOTECH',
            ], [
                'id' => Str::uuid(),
                'name' => 'Mega TrueNet',
            ], [
                'id' => Str::uuid(),
                'name' => 'KingTel',
            ], [
                'id' => Str::uuid(),
                'name' => 'WiCAM Corporation',
            ], [
                'id' => Str::uuid(),
                'name' => 'Y5Net',
            ],
        ]);
    }
}
