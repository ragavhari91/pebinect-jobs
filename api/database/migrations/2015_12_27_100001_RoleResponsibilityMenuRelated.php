<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RoleResponsibilityMenuRelated extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                Schema::create('role',function(Blueprint $table){
                    $table->increments('id');
                    $table->string('name')->unique();
                    $table->text('description');
                    $table->unsignedInteger('status_code');
                    $table->timestamps();
                });
                
                Schema::table('role',function(Blueprint $table){
                   $table->foreign('status_code')->references('id')->on('status');
                });
                
                Schema::create('role_group',  function(Blueprint $table){
                    $table->increments('id');
                    $table->string('name')->unique();
                    $table->text('description');
                    $table->unsignedInteger('status_code');
                    $table->timestamps();
                });
                
                Schema::table('role_group',function(Blueprint $table){
                   $table->foreign('status_code')->references('id')->on('status');
                });
                
                Schema::create('role_mapping',  function(Blueprint $table){
                    $table->increments('id');
                    $table->unsignedInteger('role_id');
                    $table->unsignedInteger('role_group_id');
                    $table->unsignedInteger('status_code');
                    $table->timestamps();
                });
                
                Schema::table('role_mapping',function(Blueprint $table){
                   $table->foreign('role_id')->references('id')->on('role');
                   $table->foreign('role_group_id')->references('id')->on('role_group');
                   $table->foreign('status_code')->references('id')->on('status');
                });
                
                Schema::create('responsibility',  function(Blueprint $table){
                    $table->increments('id');
                    $table->string('name')->unique();
                    $table->text('description');
                    $table->timestamps();
                });
                
                Schema::create('role_responsibility',  function(Blueprint $table){
                    $table->increments('id');
                    $table->unsignedInteger('role_id');
                    $table->unsignedInteger('responsibility_id');
                    $table->timestamps();
                });
                
                Schema::table('role_responsibility',function(Blueprint $table){
                   $table->foreign('role_id')->references('id')->on('role');
                   $table->foreign('responsibility_id')->references('id')->on('responsibility');
                });     
                
                Schema::create('menu',  function(Blueprint $table){
                    $table->increments('id');
                    $table->string('name');
                    $table->string('url');
                    $table->string('icon');
                    $table->timestamps();
                });
                
                Schema::create('menu_responsibility',  function(Blueprint $table){
                    $table->increments('id');
                    $table->unsignedInteger('menu_id');
                    $table->unsignedInteger('responsibility_id');
                    $table->timestamps();
                });
                
                Schema::table('menu_responsibility',function(Blueprint $table){
                   $table->foreign('menu_id')->references('id')->on('menu');
                   $table->foreign('responsibility_id')->references('id')->on('responsibility');
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
