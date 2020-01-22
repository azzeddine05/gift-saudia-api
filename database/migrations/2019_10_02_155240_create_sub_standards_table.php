<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubStandardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_standards', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('arabic_name');
            $table->string('english_name');
            $table->float('weight');
            $table->unsignedBigInteger('main_standard_id');
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
        Schema::dropIfExists('sub_standards');
    }
}
