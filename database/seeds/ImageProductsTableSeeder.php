<?php

use Illuminate\Database\Seeder;

class ImageProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('image_products')->delete();
        
        \DB::table('image_products')->insert(array (
            0 => 
            array (
                'id' => 6,
                'product_id' => 4,
                'image' => 'https://firebasestorage.googleapis.com/v0/b/relentless-a3ad3.appspot.com/o/2011-03-13T00%3A17%3A25Z%2FIMG_0001.JPG?alt=media&token=1114a0f0-e169-4b6d-8bde-bfed61f9508d',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 8,
                'product_id' => 4,
                'image' => 'https://firebasestorage.googleapis.com/v0/b/relentless-a3ad3.appspot.com/o/2011-03-13T00%3A17%3A25Z%2FIMG_0001.JPG?alt=media&token=1114a0f0-e169-4b6d-8bde-bfed61f9508d',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}