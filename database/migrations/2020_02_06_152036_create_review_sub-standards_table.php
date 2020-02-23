<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewSubStandardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_sub-standards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',255);
            $table->string('power');
            $table->string('improve')->default(' ');
            $table->unsignedInteger('company_id');
            //$table->foreign('company_id')->references('id')->on('users');
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
        Schema::dropIfExists('review_sub-standards');
    }
}
