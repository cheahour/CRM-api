<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PipelineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pipelines')->insert([
            [
                'id' => Str::uuid(),
                'name' => 'Hot prospect',
                'score' => 10
            ],
            [
                'id' => Str::uuid(),
                'name' => 'New lead',
                'score' => 5
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Prospect',
                'score' => 7
            ],
        ]);
    }
}
