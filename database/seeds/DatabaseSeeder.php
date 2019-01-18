<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call(UsersTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(ImageProductsTableSeeder::class);
        $this->call(ShopsTableSeeder::class);
        $this->call(UserDetailsTableSeeder::class);
        $this->call(ShippingDetailsTableSeeder::class);
    }
}
