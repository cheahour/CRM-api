<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerPackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_package', function (Blueprint $table) {
            $table->string("customer_id")->nullable();
            $table->string("package_id")->nullable();
            $table->foreign("customer_id")->references("id")->on("customers")->onDelete('cascade');
            $table->foreign("package_id")->references("id")->on("packages")->onDelete('cascade');
            $table->string("bandwidth");
            $table->double("deposit")->nullable();
            $table->double("installation")->nullable();
            $table->integer("payment_term")->nullable();
            $table->date("estimated_cash_collect")->nullable();
            $table->double("monthly_fee")->nullable();
            $table->boolean("include_vat")->default(true);
            $table->date("expected_closed_date")->nullable();
            $table->date("billing_date")->nullable();
            $table->date("next_follow_up_date")->nullable();
            $table->string("remark")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_package');
    }
}
