<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('us_id');
            $table->enum('q1',['yes','no']);
            $table->enum('q2',['yes','no']);
            $table->enum('q3',['yes','no']);
            $table->enum('q4',['yes','no']);
            $table->enum('q5',['yes','no']);
            $table->enum('q6',['yes','no']);
            $table->enum('q7',['yes','no']);
            $table->enum('q8',['yes','no']);
            $table->enum('q9',['yes','no']);
            $table->enum('q10',['yes','no']);
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
        Schema::dropIfExists('reviews');
    }
}
