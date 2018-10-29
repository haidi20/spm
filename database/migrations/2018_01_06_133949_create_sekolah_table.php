<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSekolahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sekolah', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pendidikan_id')->unsigned();
            $table->integer('kecamatan_id')->unsigned();
            $table->string('kelurahan')->nullable();
            $table->integer('user_id')->unsigned();
            $table->integer('kunci')->default(0);
            $table->integer('hp')->unsigned()->nullable();
            $table->string('operator')->nullable();
            $table->string('alamat')->nullable();
            $table->string('nama')->nullable();
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
        Schema::dropIfExists('sekolah');
    }
}
