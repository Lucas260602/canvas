<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Image;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory(200)->create()->each(function(Product $product){
            Image::factory(4)->create([
                'imageable_id' => $product->id,
                'imageable_type' => Product::class
            ]);
        });
    }
}
