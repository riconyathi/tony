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
            $table->foreignId('user_id')->unique();
            $table->enum('race',['white','black','coloured','indian','other'])->nullable();
            $table->string('citizenship')->nullable();
            $table->enum('marital_status',['single','married','window','windower','other'])->nullable();
            $table->string('residential_address')->nullable();
            $table->string('work_address')->nullable();
            $table->string('last_school_attended')->nullable();
            $table->string('highest_grade')->nullable();
            $table->string('subjects_passed')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('document')->nullable();
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
