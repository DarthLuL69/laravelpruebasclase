<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Shop;

class ShopSeeder extends Seeder
{
    public function run()
    {
        Shop::create([
            'name' => 'Test Shop',
            'description' => 'This is a test shop',
            'address' => '123 Test Street',
            'phone' => '123-456-7890',
            'email' => 'testshop@example.com'
        ]);

        Shop::create([
            'name' => 'Another Shop',
            'description' => 'This is another shop',
            'address' => '789 Another Street',
            'phone' => '321-654-0987',
            'email' => 'anothershop@example.com'
        ]);
    }
}
