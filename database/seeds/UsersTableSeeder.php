<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
        DB::table('users')->delete();

        $users = array(
        	array(
        		'name' => 'Luis',
        		'email' => 'montox360@gmail.com',
        		'password' => bcrypt('1234'),
        		)
        	);

        DB::table('users')->insert($users);
        // $this->call(UsersTableSeeder::class);
    }
}


