<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course',function (Blueprint $table){
            $table->increments('id');
            $table->string('school');
            $table->string('grade');
            $table->string('class');
            $table->string('first_course')->nullable();
            $table->string('second_course')->nullable();
            $table->string('third_course')->nullable();
            $table->string('fourth_course')->nullable();
            $table->string('fifth_course')->nullable();
            $table->string('sixth_course')->nullable();
            $table->string('seventh_course')->nullable();
            $table->string('eight_course')->nullable();
            $table->string('ninth_course')->nullable();
            $table->string('tenth_course')->nullable();
            $table->string('eleventh_course')->nullable();
            $table->string('twelfth_course')->nullable();
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
