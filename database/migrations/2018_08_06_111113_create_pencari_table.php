<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePencariTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pencari', function (Blueprint $table) {
            $table->unsignedInteger('id_pencari');
            $table->rememberToken();
            $table->string('univ');
            $table->string('jurusan');
            $table->integer('angkatan');
            $table->timestamps();
            $table->foreign('id_pencari')->references('id')->on('users')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pencari');
    }
}
