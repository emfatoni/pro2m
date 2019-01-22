<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramActivityLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_activity_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->longText('document');
            $table->unsignedInteger('program_id');
            $table->unsignedInteger('activity_id');
            $table->timestamps();

            $table->foreign('program_id')->references('id')->on('programs');
            $table->foreign('activity_id')->references('id')->on('program_activities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('program_activity_logs');
    }
}
