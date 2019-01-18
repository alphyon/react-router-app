<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'email' => 'buyer@test.com',
                'type_user' => '2',
                'password' => Hash::make('test123456'),
                'remember_token' => NULL,
                'first_name' => NULL,
                'last_name' => NULL,
                'api_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'email' => 'seller@test.com',
                'type_user' => '1',
                'password' => Hash::make('test123456'),
                'remember_token' => NULL,
                'first_name' => NULL,
                'last_name' => NULL,
                'api_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
