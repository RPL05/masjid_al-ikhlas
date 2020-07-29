<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaporanjumatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporanjumat', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('kasmasjid');
            $table->unsignedInteger('masjid_id');
            $table->string('tanggal');
            $table->string('imam');
            $table->string('khatib');
            $table->string('muazin');
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
        Schema::dropIfExists('laporanjumat');
    }
}
