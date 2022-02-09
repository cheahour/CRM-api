<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterCustomersTableAddTerritoryColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->uuid("territory_id")->nullable();
            $table->uuid("industry_id")->nullable();
            $table->uuid("kpi_activity_id")->nullable();
            $table->uuid("user_id")->nullable();
            $table->foreign("territory_id")->references("id")->on("territories")->onDelete("cascade");
            $table->foreign("industry_id")->references("id")->on("industries")->onDelete("cascade");
            $table->foreign("kpi_activity_id")->references("id")->on("industries")->onDelete("cascade");
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
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
            $table->dropColumn("territory_id");
            $table->dropColumn("industry_id");
            $table->dropColumn("kpi_activity_id");
            $table->dropColumn("user_id");
        });
    }
}
