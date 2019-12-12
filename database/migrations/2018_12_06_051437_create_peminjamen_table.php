<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeminjamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjamen', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pemesan')->unsigned();
            $table->string('no_hp');
            $table->integer('id_ruangan')->unsigned();
            $table->date('tanggal');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->string('tujuan');
            $table->string('organisasi_terkait');
            $table->string('status')->nullable();
            $table->timestamps();

            $table->foreign('id_pemesan')->references('id')->on('users');
            $table->foreign('id_ruangan')->references('id')->on('ruangans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjamen');
    }
}
