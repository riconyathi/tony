<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTertiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tertiaries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('institution')->nullable();
            $table->string('course')->nullable();
            $table->string('duration')->nullable();
            $table->string('modules')->nullable();
            $table->string('year_obtained')->nullable();
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
        Schema::dropIfExists('tertiaries');
    }
}
