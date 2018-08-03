<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_stores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('store_id')->nullable();
//            $table->string('user_id')->nullable();
//            $table->string('assessment_id')->nullable();
            $table->string('candidate_id')->nullable();
            $table->string('proglanguage')->nullable();
            $table->string('framelanguage')->nullable();
            $table->string('name')->nullable();
            $table->string('framecss')->nullable();
            $table->string('framehtml')->nullable();
            $table->date('dateassessment')->nullable();
            $table->date('endassessment')->nullable();
            $table->integer('timeassessment')->nullable();
            $table->date('mytimeassessment')->nullable();
            $table->string( 'typeassessment')->nullable();
            $table->string('level')->nullable();
            $table->string('validate')->nullable();
            $table->text('requirement1')->nullable();
            $table->string('image1')->nullable();
            $table->text('description')->nullable();

            $table->string('loginftp')->nullable();
            $table->string('passftp')->nullable();
            $table->string('hostftp')->nullable();
            $table->string('portftp')->nullable();
            $table->string('logineclipse')->nullable();
            $table->string('passeclipse')->nullable();
            $table->string('linkeclipse')->nullable();
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
        Schema::dropIfExists('candidate_stores');
    }
}
