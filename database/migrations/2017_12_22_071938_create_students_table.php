<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students',function (Blueprint $table){
           $table->integer('id')->unique()->unsigned();
           $table->string('name');//名字
           $table->string('password');//密码
            $table->string('phone')->defalut('');//默认为空
            $table->string('sex')->defalut('');//性别
            $table->string('email')->default('');
            $table->string('pro_clasee')->default('');
            $table->boolean('is_admin')->default('0');
            $table->rememberToken();
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
        Schema::drop('students');
    }
}
