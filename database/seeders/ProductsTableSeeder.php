<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'T-shirt',
            'slug' => 'BeWare-Tshirt',
            'details' => 'Cotton',
            'price' => 12,
            'shipping_cost' => 2.99,
            'description' => 'Super Soft Tee',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'spaceShirt.jpg'
        ]);
            //2
        Product::create([
            'name' => 'Women T-shirt',
            'slug' => 'BeWare-Tshirt',
            'details' => 'Cotton',
            'price' => 12,
            'shipping_cost' => 2.99,
            'description' => 'Super Soft Tee',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'shirt.jpg'
        ]);
            //3
        Product::create([
            'name' => 'Men Pullover',
            'slug' => 'BeWare-Pullover',
            'details' => 'Cotton',
            'price' => 15.99,
            'shipping_cost' => 2.99,
            'description' => 'Super Soft Pullover',
            'category_id' => 1,
            'brand_id' => 2,
            'image_path' => 'menPullover.png'
        ]);
            //4
        Product::create([
            'name' => 'Men Sweatpants',
            'slug' => 'BeWare-Sweatpants',
            'details' => 'Cotton',
            'price' => 17.99,
            'shipping_cost' => 2.99,
            'description' => 'Super Soft Sweatpants',
            'category_id' =>2,
            'brand_id' => 1,
            'image_path' => 'menSweatpants.png'
        ]);
            //5
        Product::create([
            'name' => 'Women Sweatpants',
            'slug' => 'BeWare-Sweatpants',
            'details' => 'Cotton',
            'price' => 17.99,
            'shipping_cost' => 2.99,
            'description' => 'Super Soft Sweatpants',
            'category_id' => 3,
            'brand_id' => 3,
            'image_path' => 'sweatpants.png'
        ]);
            //6
        Product::create([
            'name' => 'Women Boyfriend Jeans',
            'slug' => 'BeWare-Jeans',
            'details' => 'Cotton',
            'price' => 59.99,
            'shipping_cost' => 2.99,
            'description' => 'comfortable Jeans',
            'category_id' => 4,
            'brand_id' => 4,
            'image_path' => 'womenJeans.png'
        ]);
            //7
        Product::create([
            'name' => 'Women Pullover',
            'slug' => 'BeWare-Pullover',
            'details' => 'Cotton',
            'price' => 15.99,
            'shipping_cost' => 2.99,
            'description' => 'Super Soft pullover',
            'category_id' => 5,
            'brand_id' => 4,
            'image_path' => 'womenPullover.png'
        ]);

        Product::create([
            'name' => 'Men Jeans',
            'slug' => 'BeWare-Jeans',
            'details' => 'Cotton',
            'price' => 59.99,
            'shipping_cost' => 2.99,
            'description' => 'comfortable Jeans',
            'category_id' => 2,
            'brand_id' => 5,
            'image_path' => 'menJeans.png'
        ]);
    }
}
