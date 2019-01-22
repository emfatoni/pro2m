<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 130);
            $table->longText('description');
            $table->integer('priority');
            $table->integer('cost');
            $table->date('commitment_date');
            $table->date('payment_date');
            $table->string('time_plan', 20);

            $table->unsignedInteger('sp_id');
            $table->unsignedInteger('pic_id');
            $table->timestamps();

            $table->foreign('sp_id')->references('id')->on('strategic_programs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programs');
    }
}
