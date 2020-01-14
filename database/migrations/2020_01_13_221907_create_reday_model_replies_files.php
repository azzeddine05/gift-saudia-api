<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRedayModelRepliesFiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reday_model_replies_files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->text('type');
            $table->text('size');
            $table->text('replay_id');///reday_model_replies table

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
        Schema::dropIfExists('reday_model_replies_files');
    }
}
