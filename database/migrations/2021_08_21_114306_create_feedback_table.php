<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('us_id');
            $table->enum('attempt',['1st','2nd','3rd']);
            $table->enum('knowledge_questionare',['Competent','Not Yet Competent']);
            $table->enum('practical_questionare',['Competent','Not Yet Competent']);
            $table->enum('overall',['Competent','Not Yet Competent']);
            $table->string('comments')->nullable();
            $table->string('action_plan')->nullable();
            $table->string('learner_signature')->nullable();
            $table->date('learner_date')->nullable();
            $table->string('assessor_signature');
            $table->date('assessor_date');
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
        Schema::dropIfExists('feedback');
    }
}
