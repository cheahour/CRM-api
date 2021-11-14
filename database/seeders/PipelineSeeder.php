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
            ],
            [
                'id' => Str::uuid(),
                'name' => 'New lead',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Prospect'
            ],
        ]);
    }
}
