<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Cherry Pipe',
            'price' => 1999,
            'image'=>'weed1.jpg',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        Product::create([
            'name' => 'Cherry Cola',
            'price' => 4999,
            'image'=>'weed2.jpg',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        Product::create([
            'name' => 'Bob',
            'price' => 15000,
            'image'=>'weed3.jpg',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        Product::create([
            'name' => 'Cherry Purple',
            'price' => 20000,
            'image'=>'weed4.jpg',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
