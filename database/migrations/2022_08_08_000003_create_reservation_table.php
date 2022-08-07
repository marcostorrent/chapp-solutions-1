<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->id();
            $table->date('date_in');
            $table->date('date_out');
            $table->unsignedBigInteger('room_id'); 
            $table->integer('guest_num');
            $table->string('name', 100);
            $table->string('email', 100);
            $table->string('phone', 20);
            $table->decimal('total_price', 10, 2);
            $table->string('uuid', 36)->unique(true);
            $table->timestamps();
          
            $table->foreign('room_id')->references('id')->on('room');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation');
    }
};
