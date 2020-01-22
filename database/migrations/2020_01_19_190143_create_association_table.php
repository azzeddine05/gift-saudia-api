<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssociationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('association', function (Blueprint $table) {
            $table->integer('id_review')->unsigned();
            $table->integer('id_sub_standar')->unsigned();
            $table->primary(['id_review', 'id_sub_standar']);
        //    $table->foreign('id_review')->references('id')->on('review_items');
         //   $table->foreign('id_sub_standar')->references('id')->on('sub_standards');
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
        Schema::dropIfExists('association');
    }
}
