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
            $table->enum('knowledge_questionare',['Compentent','Not Yet Compentent']);
            $table->enum('practical_questionare',['Compentent','Not Yet Compentent']);
            $table->enum('overall',['Compentent','Not Yet Compentent']);
            $table->string('comments');
            $table->string('action_plan');
            $table->string('learner_signature');
            $table->date('learner_date');
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
