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
                
                Schema::create('profile_picture',function(Blueprint $table)
                {
                   $table->increments('id');
                   $table->string('url');
                   $table->unsignedInteger('user_id');
                   $table->unsignedInteger('picture_status');
                });
                
                Schema::table('profile_picture',function(Blueprint $table){
                    $table->foreign('picture_status')->references('id')->on('status');
                    $table->foreign('user_id')->references('id')->on('user');
                });
                
                Schema::create('login_session',function(Blueprint $table){
                        $table->increments('id');
                        $table->unsignedInteger('user_id')->unsigned();
                        $table->string('session_id');
                        $table->dateTime('datetime');
                        $table->string('ip_address');
                        $table->unsignedInteger('country_id');
                        $table->unsignedInteger('session_status');
                });
                
                Schema::table('login_session',function(Blueprint $table){
                   $table->foreign('user_id')->references('id')->on('user');
                   $table->foreign('country_id')->references('id')->on('country');
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
