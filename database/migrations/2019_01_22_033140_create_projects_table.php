<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->integer('cost');
            $table->date('start_plan_date');
            $table->date('end_plan_date');
            $table->longText('document');
            $table->unsignedInteger('program_id');
            $table->unsignedInteger('activity_source_id');
            $table->unsignedInteger('team_id');
            $table->timestamps();

            $table->foreign('program_id')->references('id')->on('programs');
            $table->foreign('activity_source_id')->references('id')->on('program_activity_logs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
