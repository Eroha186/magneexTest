<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealtyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realty', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('numbers_room');
            $table->tinyInteger('material_wall_id');
            $table->integer('street_id');
            $table->tinyInteger('type_realty_id');
            $table->integer('price');
            $table->integer('area');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('realty');
    }
}
