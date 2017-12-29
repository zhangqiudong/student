<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades',function (Blueprint $table){
           $table->increments('id');
           $table->integer('user_id')->unsigned()->unique()->index();
           $table->foreign('user_id')->reference('id')->on('students')->onDelete('cascade');
           $table->integer('math')->nullable();
           $table->integer('english')->nullable();
           $table->integer('c')->nullable();
           $table->integer('think')->nullable();
           $table->integer('sport')->nullable();
           $table->integer('soft')->nullable();
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
        Schema::drop('grades');
    }
}
