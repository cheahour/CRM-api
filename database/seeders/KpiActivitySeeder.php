<?php

namespace Database\Seeders;

use App\Models\Pipeline;
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
                'name' => 'Cold Call',
                'score' => 1,
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Meeting',
                'score' => 1,
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Quoted',
                'score' => 1,
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Follow up',
                'score' => 1,
            ],
        ]);
    }
}
