<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKegiatanmasjidTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatanmasjid', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('masjid_id');
            $table->string('namakegiatan');
            $table->string('deskripsi');
            $table->string('tanggal');
            $table->string('waktu');
            $table->string('status');
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
        Schema::dropIfExists('kegiatanmasjid');
    }
}
