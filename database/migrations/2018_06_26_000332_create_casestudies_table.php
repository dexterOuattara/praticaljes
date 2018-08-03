<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasestudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casestudies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('challenge')->nullable();
            $table->string('solution')->nullable();
            $table->integer('numberOfApplicants')->nullable();
            $table->integer('numberOfMeeting')->nullable();
            $table->integer('numberOfDaysSaves')->nullable();
            $table->integer('numberOfHiring')->nullable();
            $table->string('emberVideo')->nullable();
            $table->string('imageCase')->nullable();
            $table->string('linkResources')->nullable();
            $table->integer('author')->nullable();

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
        Schema::dropIfExists('casestudies');
    }
}
