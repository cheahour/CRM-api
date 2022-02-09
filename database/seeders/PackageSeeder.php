<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packages')->insert([
            [
                'id' => Str::uuid(),
                'name' => 'Today Fiber',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Today Fiber plus',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Today Simply fast',
            ],
        ]);
    }
}
