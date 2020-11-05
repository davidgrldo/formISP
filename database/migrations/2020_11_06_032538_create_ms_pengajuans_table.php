<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMsPengajuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ms_pengajuans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_pendaftaran');
            $table->string('name');
            $table->string('no_ktp');
            $table->string('image_ktp');
            $table->string('no_npwp');
            $table->string('image_npwp');
            $table->string('address');
            $table->string('brand_name');
            $table->enum('status', ['Pending', 'Disetujui', 'Tidak Disetujui']);
            $table->string('token');
            $table->string('type');

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
        Schema::dropIfExists('ms_pengajuans');
    }
}