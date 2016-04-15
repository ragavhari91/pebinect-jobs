<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Lookup extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                Schema::create('status',function(Blueprint $table){
                    $table->increments('id');
                    $table->string('name')->unique();
                    $table->text('description');
                    $table->timestamps();
                });
                
                Schema::create('status_group',function(Blueprint $table){
                    $table->increments('id');
                    $table->string('name')->unique();
                    $table->text('description');
                    $table->timestamps();
                });
                
                Schema::create('status_mapping',function(Blueprint $table){
                    $table->increments('id');
                    $table->unsignedInteger('status_id');
                    $table->unsignedInteger('status_group_id');
                    $table->timestamps();
                });
                
                Schema::table('status_mapping',function(Blueprint $table){
                    $table->foreign('status_id')->references('id')->on('status');
                    $table->foreign('status_group_id')->references('id')->on('status_group');
                });
                
                Schema::create('gender',function(Blueprint $table){
                    $table->increments('id');
                    $table->string('name');
                    $table->unsignedInteger('status_id');
                    $table->timestamps();
                });
                
                Schema::table('gender',function(Blueprint $table){
                    $table->foreign('status_id')->references('id')->on('status');
                });
                
                Schema::create('country',function(Blueprint $table){
                    $table->increments('id');
                    $table->string('name');
                    $table->string('country_code');
                    $table->string('iso_code');
                    $table->unsignedInteger('status_id');
                    $table->timestamps();
                });
                
                Schema::table('country',function(Blueprint $table){
                    $table->foreign('status_id')->references('id')->on('country');
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
