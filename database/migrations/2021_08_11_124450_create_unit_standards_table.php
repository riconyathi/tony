<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitStandardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_standards', function (Blueprint $table) {
            $table->id();
            $table->string('us_name');
            $table->string('us_title');
            $table->string('us_level');
            $table->string('us_credit');
            $table->string('us_copies');
            $table->string('us_alignment');
            $table->string('formative');
            $table->string('summative');
            $table->string('learner_guide');
            $table->string('other');
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
        Schema::dropIfExists('unit_standards');
    }
}
