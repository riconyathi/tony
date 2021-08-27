<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLearnerEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learner_evaluations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('us_id');
            $table->enum('q1',['agree','disagree']);
            $table->enum('q2',['agree','disagree']);
            $table->enum('q3',['agree','disagree']);
            $table->enum('q4',['agree','disagree']);
            $table->enum('q5',['agree','disagree']);
            $table->enum('q6',['agree','disagree']);
            $table->enum('q7',['agree','disagree']);
            $table->enum('q8',['agree','disagree']);
            $table->enum('q9',['agree','disagree']);
            $table->enum('q10',['agree','disagree']);
            $table->enum('q11',['agree','disagree']);
            $table->string('q1_comment')->nullable();
            $table->string('q2_comment')->nullable();
            $table->string('q3_comment')->nullable();
            $table->string('q4_comment')->nullable();
            $table->string('q5_comment')->nullable();
            $table->string('q6_comment')->nullable();
            $table->string('q7_comment')->nullable();
            $table->string('q8_comment')->nullable();
            $table->string('q9_comment')->nullable();
            $table->string('q10_comment')->nullable();
            $table->string('q11_comment')->nullable();
            $table->string('learner_signature');
            $table->date('learner_date');
            $table->string('assessor_signature')->nullable();
            $table->date('assessor_date')->nullable();
            $table->string('moderator_signature')->nullable();
            $table->date('moderator_date')->nullable();
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
        Schema::dropIfExists('learner_evaluations');
    }
}
