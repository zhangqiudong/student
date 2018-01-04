<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNews2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news',function (Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->string('date')->nullable();
            $table->string('link')->nullable();
            $table->string('author')->nullable();
            $table->string('content');
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
