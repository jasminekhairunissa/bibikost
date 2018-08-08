<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderan', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_pemilik');
            $table->unsignedInteger('id_pencari');
            $table->unsignedInteger('id_properti');
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
        Schema::dropIfExists('orderan');
    }
}
