<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nim');
            $table->string('nama');
            $table->integer('user_id')->unsigned();
            $table->string('jurusan');
            $table->integer('kelas_id')->unsigned();
            $table->integer('himpunan_id')->unsigned();
            $table->integer('laboratorium_id')->unsigned();
            $table->timestamps();

            //buat foreign key
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('kelas_id')->references('id')->on('kelas');
            $table->foreign('himpunan_id')->references('id')->on('himpunans');
            $table->foreign('laboratorium_id')->references('id')->on('laboratoria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswas');
    }
}
