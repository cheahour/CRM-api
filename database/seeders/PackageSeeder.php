<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
                'name' => 'Fiber',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'BBI',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'DBI',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'xFast',
            ],
        ]);
    }
}
