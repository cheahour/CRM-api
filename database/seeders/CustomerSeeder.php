<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Industry;
use App\Models\KpiActivity;
use App\Models\Package;
use App\Models\Pipeline;
use App\Models\Territory;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers = [];

        for ($i=0; $i < 500; $i++) {
            $faker = Factory::create();
            $customers[] = [
                "id" => Str::uuid(),
                'name' => $faker->name,
                'email' => $faker->email,
                "phone_number" => "+855876662712",
                "installation" => $faker->randomFloat(2),
                "payment_term" => $faker->randomDigitNot(0),
                "billing_date" => $faker->dateTimeThisYear('+2 months'),
                "include_vat" => 1,
                "billing_date" => $faker->dateTimeThisYear('+2 months'),
                "remark" => $faker->text(100),
                "user_id" => User::sales()->random()->id,
            ];
        }

        foreach ($customers as $customer) {
            $create_customer = Customer::create($customer);
            $territory = Territory::all()->random();
            $industry = Industry::all()->random();
            $kpi_activity = KpiActivity::all()->random();
            $pipeline = Pipeline::whereName(__("pipeline.customer"))->first();
            $package = Package::all()->random();
            if ($territory) {
                $create_customer->territory()->associate($territory)->save();
            }
            if ($industry) {
                $create_customer->industry()->associate($industry)->save();
            }
            if ($kpi_activity) {
                $create_customer->kpi_activity()->associate($kpi_activity)->save();
            }
            if ($pipeline) {
                $create_customer->pipeline()->associate($pipeline)->save();
            }
            if ($package) {
                $create_customer->package()->associate($package)->save();
            }
        }
    }
}
