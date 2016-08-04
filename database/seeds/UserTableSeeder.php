<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model; 

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'first_name' => 'Miguel',
        	'last_name'  => 'lozano',
        	'birthday'   => '1986-09-10',
        	'gender'	 => 'm',
        	'role'		 => 'administrator',
        	'email'      => 'admin@example.com',
        	'password'   => bcrypt('1234567'),
        ]);
    }
}
