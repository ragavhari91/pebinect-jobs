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
        
        $this->call('StatusTableSeeder');
        $this->call('StatusGroupTableSeeder');
        $this->call('StatusMappingTableSeeder');
        $this->call('RoleTableSeeder');
        $this->call('RoleGroupTableSeeder');
        $this->call('RoleMappingTableSeeder');
        $this->call('GenderTableSeeder');
        $this->call('CountryTableSeeder');
        $this->call('UserTableSeeder');
    }
}


class StatusTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('status')->delete();
                
                DB::table('status')->insert(array(
                    array('id'=>'1000','name'=>'Active','description'=>'','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
                    array('id'=>'1001','name'=>'In Active','description'=>'','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
                ));
	}
}

class StatusGroupTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('status_group')->delete();
                
                DB::table('status_group')->insert(array(
                    array('id'=>'1000','name'=>'General','description'=>'','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now())
                ));
	}
}

class StatusMappingTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('status_mapping')->delete();
                
                DB::table('status_mapping')->insert(array(
                    array('id'=>'1000','status_id'=>'1000','status_group_id'=>'1000','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
                    array('id'=>'1001','status_id'=>'1001','status_group_id'=>'1000','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now())
                ));
	}
}

class RoleTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('role')->delete();
                
                DB::table('role')->insert(array(
                    array('id'=>'1000','name'=>'Active','description'=>'','status_code'=>'1000','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
                    array('id'=>'1001','name'=>'In Active','description'=>'','status_code'=>'1000','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
                ));
	}
}

class RoleGroupTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('role_group')->delete();
                
                DB::table('role_group')->insert(array(
                    array('id'=>'1000','name'=>'General','description'=>'','status_code'=>'1000','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now())
                ));
	}
}

class RoleMappingTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('role_mapping')->delete();
                
                DB::table('role_mapping')->insert(array(
                    array('id'=>'1000','role_id'=>'1000','role_group_id'=>'1000','status_code'=>'1000','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
                    array('id'=>'1001','role_id'=>'1001','role_group_id'=>'1000','status_code'=>'1000','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now())
                ));
	}
}

class GenderTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('gender')->delete();
                
                DB::table('gender')->insert(array(
                    array('id'=>'1000','name'=>'Male','status_id'=>'1000','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
                    array('id'=>'1001','name'=>'Female','status_id'=>'1000','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
                    array('id'=>'1002','name'=>'Others','status_id'=>'1000','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now())
                ));
	}
}

class CountryTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('country')->delete();
                
                DB::table('country')->insert(array(
                    array('id'=>'1000','name'=>'Afganistan','country_code'=>'93','iso_code'=>'AF/AFG','status_id'=>'1000','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
                ));
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
                    array('id'=>'1000','user_first_name'=>'Ragav','user_last_name'=>'Hari','user_age'=>'25','user_gender'=>'1000','user_email'=>'ragavhari91@gmail.com','user_password'=>'Ragav','user_mobile'=>'8056598186','user_role'=>'1000','user_status'=>'1000','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
                    array('id'=>'1001','user_first_name'=>'Uva','user_last_name'=>'Prakash','user_age'=>'24','user_gender'=>'1000','user_email'=>'uva@gmail.com','user_password'=>'uva','user_mobile'=>'7897897897','user_role'=>'1000','user_status'=>'1000','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()),
                    array('id'=>'1002','user_first_name'=>'Vigneshmuthu','user_last_name'=>'smvm','user_age'=>'25','user_gender'=>'1000','user_email'=>'vigneshmuthu.s.m@gmail.com','user_password'=>'vignesh','user_mobile'=>'8978978978','user_role'=>'1000','user_status'=>'1000','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()),
                    array('id'=>'1003','user_first_name'=>'Harish','user_last_name'=>'Balaji','user_age'=>'25','user_gender'=>'1000','user_email'=>'harish@gmail.com','user_password'=>'harish','user_mobile'=>'9876543210','user_role'=>'1000','user_status'=>'1000','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now())
                ));
	}
}