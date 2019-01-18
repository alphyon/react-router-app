<?php

use Illuminate\Database\Seeder;

class ShippingDetailsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('shipping_details')->delete();
        
        \DB::table('shipping_details')->insert(array (
            0 => 
            array (
                'id' => 1,
                'buyer_id' => 1,
                'shipping_address' => '60872 Stanton Stream
Maverickshire, OK 74662-4091',
                'shipping_city' => 'Laceytown',
                'shipping_state' => 1,
                'shipping_zipcode' => '00293',
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}