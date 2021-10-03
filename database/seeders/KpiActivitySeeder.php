<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class KpiActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kpi_activities')->insert([
            [
                'id' => Str::uuid(),
                'name' => 'Quoted',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Follow up',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Cold call',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Meeting',
            ],
        ]);
    }
}
