<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterCustomersTableAddSomeSeveralField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
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
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->dropColumn("bandwidth");
            $table->dropColumn("deposit");
            $table->dropColumn("installation");
            $table->dropColumn("payment_term");
            $table->dropColumn("estimated_cash_collect");
            $table->dropColumn("monthly_fee");
            $table->dropColumn("include_vat");
            $table->dropColumn("expected_closed_date");
            $table->dropColumn("billing_date");
            $table->dropColumn("next_follow_up_date");
            $table->dropColumn("remark");
        });
    }
}
