<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompositionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compositions',function (Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->string('content');
            $table->string('date')->nullable();
            $table->string('authorID')->nullable();
            $table->string('authorName');
            $table->string('img_url')->nullable();
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
        //
    }
}
