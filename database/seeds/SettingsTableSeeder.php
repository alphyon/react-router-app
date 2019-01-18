<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'order_mode',
                'description' => 'Order has been mode',
                'type' => 'notification_seller',
                'order' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'order_shipped_seller',
                'description' => 'Order has been shipped',
                'type' => 'notification_seller',
                'order' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 'order_played',
                'description' => 'Order by buyer',
                'type' => 'notification_buyer',
                'order' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'code' => 'save_favorite',
                'description' => 'Save favorite',
                'type' => 'notification_buyer',
                'order' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'code' => 'product_favorite',
                'description' => 'Product favorite',
                'type' => 'notification_buyer',
                'order' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}