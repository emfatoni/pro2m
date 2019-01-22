<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wbs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30);
            $table->date('start_plan');
            $table->date('end_plan');
            $table->date('start_actual');
            $table->date('end_actual');
            $table->string('status', 10);
            $table->longText('document');
            $table->unsignedInteger('deliverable_id');
            $table->timestamps();

            $table->foreign('deliverable_id')->references('id')->on('deliverables');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wbs');
    }
}
