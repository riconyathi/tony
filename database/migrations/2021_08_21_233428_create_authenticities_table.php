<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthenticitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authenticities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('learner_name');
            $table->string('learner_signature');
            $table->string('learner_date');
            $table->string('assessor_name');
            $table->string('assessor_registration_number');
            $table->string('assessor_signature');
            $table->date('assessor_date');
            $table->string('moderator_name');
            $table->string('moderator_registration_number');
            $table->string('moderator_signature');
            $table->date('moderator_date');
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
        Schema::dropIfExists('authenticities');
    }
}
