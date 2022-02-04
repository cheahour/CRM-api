<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $head_sale = Role::whereName(__("user_role.head_sale"))->firstOrFail();
        $dsm = Role::whereName(__("user_role.dsm"))->firstOrFail();
        $sale = Role::whereName(__("user_role.sale"))->firstOrFail();
        $manager = User::create([
            "id" => Str::uuid(),
            'name' => __("user_account.default_head_sale_name"),
            'email' => __("user_account.default_head_sale_email"),
            'password' => Hash::make(__("user_account.default_password")),
            "is_default" => true,
        ]);
        $anonymous_dsm = User::create([
            "id" => Str::uuid(),
            "name" => __("user_account.anonymous_name"),
            "email" => __("user_account.anonymous_email"),
            "password" => Hash::make(__("user_account.default_password")),
            "is_default" => true,
        ]);
        $default_sale = User::create([
            "id" => Str::uuid(),
            "name" => __("user_account.mock_sale_name"),
            "email" => __("user_account.mock_sale_email"),
            "password" => Hash::make(__("user_account.default_password")),
            "user_id" => $anonymous_dsm->id,
        ]);

        $manager->role()->associate($head_sale);
        $anonymous_dsm->role()->associate($dsm);
        $default_sale->role()->associate($sale);

        $manager->save();
        $anonymous_dsm->save();
        $default_sale->save();
    }
}
