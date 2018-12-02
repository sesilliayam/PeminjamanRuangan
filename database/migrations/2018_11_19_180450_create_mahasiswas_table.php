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
            $table->string('himpunan');
            $table->integer('laboratorium_id')->unsigned();
            $table->timestamps();

            //buat foreign key
            $table->foreign('user_id')->references('id')->on('penggunas');
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
