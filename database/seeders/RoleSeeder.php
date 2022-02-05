<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('roles')->insert([
        [
            'id' => Str::uuid(),
            'name' => __("user_role.head_sale")
        ],
        [
            "id" => Str::uuid(),
            "name" => __("user_role.sale_admin"),
        ],
        [
            'id' => Str::uuid(),
            'name' => __("user_role.dsm"),
        ],
        [
            'id' => Str::uuid(),
            'name' => __("user_role.sale"),
        ],
      ]);
    }
}
