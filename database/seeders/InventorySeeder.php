<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Inventory;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Inventory::insert([
            [
                'name' => 'Wireless Mouse',
                'description' => 'Ergonomic wireless mouse with adjustable DPI settings.',
                'quantity' => 150,
                'price' => 29.99,
                'category_id' => 1, // Ensure a category with this ID exists in the categories table
            ],
            [
                'name' => 'USB-C Hub',
                'description' => '7-in-1 USB-C hub with HDMI, USB 3.0, and card reader.',
                'quantity' => 75,
                'price' => 45.50,
                'category_id' => 2,
            ],
            [
                'name' => 'Mechanical Keyboard',
                'description' => 'RGB backlit mechanical keyboard with customizable keys.',
                'quantity' => 50,
                'price' => 89.99,
                'category_id' => 1,
            ],
            [
                'name' => 'Portable SSD 1TB',
                'description' => 'High-speed portable SSD with USB 3.2 Gen 2 support.',
                'quantity' => 120,
                'price' => 125.00,
                'category_id' => 3,
            ],
            [
                'name' => 'Noise Cancelling Headphones',
                'description' => 'Wireless noise-cancelling headphones with long battery life.',
                'quantity' => 80,
                'price' => 199.99,
                'category_id' => 2,
            ],
        ]);
    }
}
