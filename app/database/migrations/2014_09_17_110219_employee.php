<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Employee extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                Schema::create('employee',function($table){
                    $table->increments('empid');
                    $table->string('empname',15);
                    $table->mediumInteger('empcode');
                    $table->string('wemail')->unique();
                    $table->string('pemail')->unique();
                    $table->string('paddress',100);
                    $table->string('resaddress',100);
                    $table->integer('phone');
                    $table->integer('mobile');
                    $table->integer('dob');
                    $table->enum('gender',array('male','female'));
                    $table->enum('mstatus',array('married','unmarried','divorced'));
                    $table->string('skill',150);
                    $table->mediumInteger('exp');
                    $table->date('hiredate');
                    $table->date('exitdate');
                    $table->string('designation',15);
                    $table->enum('status',array('Active','NotActive'));
                });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('employee');
	}

}
