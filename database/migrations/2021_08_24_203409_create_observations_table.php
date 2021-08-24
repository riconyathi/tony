<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('observations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('assessment_criteria');
            $table->string('model_evidence');
            $table->string('evidence_observed');
            $table->string('action_required');
            $table->string('requirents_met');
            $table->string('learner_comments');
            $table->string('assessor_feedback');
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
        Schema::dropIfExists('observations');
    }
}
