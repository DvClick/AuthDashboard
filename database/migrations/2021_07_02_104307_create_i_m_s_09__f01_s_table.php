<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIMS09F01STable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i_m_s_09__f01_s', function (Blueprint $table) {
            $table->id();
            $table->string('city');
            $table->dateTime('date');
            $table->string('location');
            $table->string('department');
            $table->string('amountmain');
            $table->string('code')->default('IMS-09-F01');
            $table->json('table');
            $table->json('approval');
            $table->unsignedBigInteger('sent_from');
            $table->foreign('sent_from')->references('id')->on('admins');
            $table->unsignedBigInteger('next_position');
            $table->foreign('next_position')->references('id')->on('positions');

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
        Schema::dropIfExists('i_m_s_09__f01_s');
    }
}
