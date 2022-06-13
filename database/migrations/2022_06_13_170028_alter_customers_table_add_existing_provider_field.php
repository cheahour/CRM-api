<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("customers", function (Blueprint $table) {
            $table->uuid("existing_provider_id")->nullable();
            $table->foreign("existing_provider_id")->references("id")->on("existing_providers")->onDelete("cascade");
            $table->string("existing_bandwidth")->nullable();
            $table->double("existing_price")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
