<!-- 
 Description: Seed values for all tables
 Created on: Dec 27, 2015 
 Modified on: Jan 01, 2016
 Modified by: Uva
 Version: 1.0
 Changes made since last version:
-->


<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        Model::unguard();
        
        $this->call('UserTableSeeder');
    }
}

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('user')->delete();
                
                DB::table('user')->insert(array(
                    array('id'=>'1000','user_first_name'=>'Ragav','user_last_name'=>'Hari','user_age'=>'25','user_gender'=>'1','user_email'=>'ragavhari91@gmail.com','user_password'=>'Ragav','user_mobile'=>'8056598186','user_role'=>'1000','user_status'=>'1000', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
                    array('id'=>'1001','user_first_name'=>'Uva','user_last_name'=>'Prakash','user_age'=>'24','user_gender'=>'1','user_email'=>'uva@gmail.com','user_password'=>'uva','user_mobile'=>'7897897897','user_role'=>'1000','user_status'=>'1000', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
                    array('id'=>'1002','user_first_name'=>'Vigneshmuthu','user_last_name'=>'smvm','user_age'=>'25','user_gender'=>'1','user_email'=>'vigneshmuthu.s.m@gmail.com','user_password'=>'vignesh','user_mobile'=>'8978978978','user_role'=>'1000','user_status'=>'1000', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
                    array('id'=>'1003','user_first_name'=>'Harish','user_last_name'=>'Balaji','user_age'=>'25','user_gender'=>'1','user_email'=>'harish@gmail.com','user_password'=>'harish','user_mobile'=>'9876543210','user_role'=>'1000','user_status'=>'1000', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now())
                ));
	}
}