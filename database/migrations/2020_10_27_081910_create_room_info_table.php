<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room', function (Blueprint $table) {
            $table->increments('room_id');
            $table->integer('owner_id');
            $table->string('name', 16);
            $table->tinyInteger('type');
            $table->tinyInteger('min_people');
            $table->tinyInteger('max_people');
            $table->tinyInteger('current_people');
            $table->string('content', 32);
            $table->tinyInteger('status');
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
        Schema::dropIfExists('room');
    }
}
