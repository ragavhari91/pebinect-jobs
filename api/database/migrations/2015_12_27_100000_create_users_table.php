<!-- 
 Description: Migration for creating database schema for User related tables
 Created on: Dec 27, 2015 
 Modified on: Jan 01, 2016
 Modified by:  Uva
 Version: 1.0
 Changes made since last version:
-->

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
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
                $table->integer('user_gender');
                $table->string('user_email')->unique();
                $table->string('user_password');
                $table->string('user_mobile')->unique();
                $table->unsignedInteger('user_role');
                $table->unsignedInteger('user_status');
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
        Schema::drop('user');
    }
}
