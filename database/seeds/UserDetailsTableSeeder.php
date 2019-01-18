<?php

use Illuminate\Database\Seeder;

class UserDetailsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_details')->delete();
        
        \DB::table('user_details')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 2,
                'youtube_url' => NULL,
                'spotify_url' => NULL,
                'podcast_url' => NULL,
                'itunes_url' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
