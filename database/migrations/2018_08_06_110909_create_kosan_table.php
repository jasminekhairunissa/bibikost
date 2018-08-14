<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKosanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kosan', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_properti');
            $table->integer('hargatahunan');
            $table->integer('hargabulanan');
            $table->integer('hargaharian');
            $table->string('dayatampung');
            $table->string('ukurankamar');
            $table->string('fasilitas');
            $table->string('deskripsi');
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
        Schema::dropIfExists('kosan');
    }
}
