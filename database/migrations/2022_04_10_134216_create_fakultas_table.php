<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFakultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fakultas', function (Blueprint $table) {
            $table->id(); //PK, auto increment
            //nama, kode, email, tanggal berdiri, alamt
            $table->string('nama', 25);
            $table->string('kode', 4);
            $table->string('email', 255)->nullable();
            $table->date('tanggal_berdiri');
            $table->text('alamat')->nullable();
            $table->timestamps(); //tanggal buat(created_at) dan tgl update(updated)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fakultas');
    }
}
