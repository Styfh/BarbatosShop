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
            "product_image" => "business_file.jpeg",
            "product_name" => "A4 Business file",
            "product_description" => "A single business file of size A4 that comes in red, green, yellow or blue",
            "product_price" => 5000,
            "category_id" => 7
        ]);

        Product::create([
            "product_image" => "count_of_monte_christo.jpg",
            "product_name" => "The Count of Monte Christo",
            "product_description" => "A literary classic by Alexandre Dumas",
            "product_price" => 150000,
            "category_id" => 2
        ]);

        Product::create([
            "product_image" => "fedora.jpg",
            "product_name" => "Men's fedora",
            "product_description" => "A pack of three fashionable straw hat fedora",
            "product_price" => 360000,
            "category_id" => 4
        ]);

        Product::create([
            "product_image" => "iphone14_pro_max.jpg",
            "product_name" => "IPhone 14 Pro Max",
            "product_description" => "The newest model in the iphone line of smartphones, coming with brand new long-awaited features",
            "product_price" => 13000000,
            "category_id" => 3
        ]);

        Product::create([
            "product_image" => "junior_racket.jpg",
            "product_name" => "Junior racket",
            "product_description" => "A smaller tennis racket for ages 9 to 10",
            "product_price" => 115000,
            "category_id" => 8
        ]);

        Product::create([
            "product_image" => "lipstick.jpeg",
            "product_name" => "Matte lipstick",
            "product_description" => "A creamy rich Lipstick formula with high colour payoff in a no-shine matte finish.",
            "product_price" => 200000,
            "category_id" => 1
        ]);

        Product::create([
            "product_image" => "microwave.jpg",
            "product_name" => "Neochef microwave",
            "product_description" => "Reliable microwave for all your microwaving needs",
            "product_price" => 900000,
            "category_id" => 6
        ]);

        Product::create([
            "product_image" => "vitamin_c.jpeg",
            "product_name" => "Vitamin C supplements",
            "product_description" => "Vitamin C supplements by Ipi to bolster your immune system",
            "product_price" => 6500,
            "category_id" => 5
        ]);

    }
}
