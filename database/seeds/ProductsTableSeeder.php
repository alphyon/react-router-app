<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 4,
                'name' => 'TV',
                'description' => 'Tv Digital',
                'price' => 499.0,
                'tags' => '',
                'shipping' => '',
                'quantity' => 20,
                'category_id' => 1,
                'seller_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 6,
                'name' => 'Teclado',
                'description' => 'Tipo Mecanico',
                'price' => 50.0,
                'tags' => '',
                'shipping' => '',
                'quantity' => 2,
                'category_id' => 1,
                'seller_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 8,
                'name' => 'Audifonos',
                'description' => 'Audifonos inalambricos',
                'price' => 35.9,
                'tags' => '',
                'shipping' => '',
                'quantity' => 100,
                'category_id' => 1,
                'seller_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}