<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserRelated extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                Schema::create('user', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->string('user_first_name');
                        $table->string('user_last_name');
                        $table->integer('user_age')->unsigned();
                        $table->unsignedInteger('user_gender');
                        $table->string('user_email')->unique();
                        $table->string('user_password');
                        $table->string('user_mobile')->unique();
                        $table->unsignedInteger('user_role');
                        $table->unsignedInteger('user_status');
			$table->timestamps();
		});
                
                Schema::table('user',function(Blueprint $table){
                   $table->foreign('user_gender')->references('id')->on('gender'); 
                   $table->foreign('user_role')->references('id')->on('role');
                   $table->foreign('user_status')->references('id')->on('status');
                });
                
                Schema::create('login_session',function(Blueprint $table){
                        $table->increments('id');
                        $table->integer('user_id')->unsigned();
                        $table->integer('session_id')->unsigned();
                        $table->dateTime('datetime');
                        $table->unsignedInteger('session_status');
                });
                
                Schema::table('login_session',function(Blueprint $table){
                   $table->foreign('user_id')->references('id')->on('user');
                   $table->foreign('session_status')->references('id')->on('status');
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
