<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCustomerId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ms_pengajuans', function (Blueprint $table) {
            $table->unsignedInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('ms_customers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ms_pengajuans', function (Blueprint $table) {
            $table->dropColumn('customer_id');
            $table->dropForeign('customer_id');
        });
    }
}
