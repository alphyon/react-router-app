<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Tecnology',
                'description' => 'Tecnology Description',
                'image' => 'none',
                'background_image' => 'none',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Classic',
                'description' => 'Classic Description',
                'image' => 'none',
                'background_image' => 'none',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Modern',
                'description' => 'Modern Description',
                'image' => 'none',
                'background_image' => 'none',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Rock',
                'description' => 'Rock Description',
                'image' => 'none',
                'background_image' => 'none',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}