<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info',function (Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->string('content');
            $table->string('date')->nullable();
            $table->string('author')->nullable();
            $table->string('img_url')->nullable();
            $table->string('source')->nullable();
            $table->string('content_link')->nullable();
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
