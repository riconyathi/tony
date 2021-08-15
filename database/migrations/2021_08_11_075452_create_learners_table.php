<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLearnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learners', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->enum('race',['white','black','coloured','indian','other']);
            $table->string('citizenship')->nullable();
            $table->enum('marital_status',['single','married','window','windower','other']);
            $table->string('residential_address');
            $table->string('work_address')->nullable();
            $table->string('last_school_attended');
            $table->string('highest_grade');
            $table->string('subjects_passed');
            $table->date('date_of_birth');
            $table->string('document');
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
        Schema::dropIfExists('learners');
    }
}
