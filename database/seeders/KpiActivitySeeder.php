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
        $hot_prospect = Pipeline::whereName(__("pipeline.hot_prospect"))->firstOrFail();
        $new_lead = Pipeline::whereName(__("pipeline.new_lead"))->firstOrFail();
        $prospect = Pipeline::whereName(__("pipeline.prospect"))->firstOrFail();
        $customer = Pipeline::whereName(__("pipeline.customer"))->firstOrFail();
        DB::table('kpi_activities')->insert([
            [
                'id' => Str::uuid(),
                'name' => 'Quoted',
                'score' => 2,
                "pipeline_id" => $hot_prospect->id,
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Follow up',
                'score' => 5,
                "pipeline_id" => $new_lead->id,
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Cold call',
                'score' => 10,
                "pipeline_id" => $prospect->id,
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Meeting',
                'score' => 20,
                "pipeline_id" => $customer->id,
            ],
        ]);
    }
}
