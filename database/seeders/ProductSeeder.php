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
        // Office and Stationery
        Product::insert([
            [
                "product_image" => "business_file.jpeg",
                "product_name" => "A4 Business file",
                "product_description" => "A single business file of size A4 that comes in red, green, yellow or blue",
                "product_price" => 5000,
                "category_id" => 7
            ],
            [
                "product_image" => "pencil_2b.webp",
                "product_name" => "2B pencil pack",
                "product_description" => "A pack of 12 2b pencils",
                "product_price" => 45000,
                "category_id" => 7
            ],
            [
                "product_image" => "cutter.jpg",
                "product_name" => "Cutter",
                "product_description" => "A cheap yet effective cutter",
                "product_price" => 9000,
                "category_id" => 7
            ],
            [
                "product_image" => "gel_pen.jpeg",
                "product_name" => "Gel pen",
                "product_description" => "A single kenko gel pen",
                "product_price" => 2000,
                "category_id" => 7
            ],
            [
                "product_image" => "glue_stick.webp",
                "product_name" => "Glue stick",
                "product_description" => "A single stick of glue",
                "product_price" => 12000,
                "category_id" => 7
            ],
            [
                "product_image" => "highlighter_marker.webp",
                "product_name" => "Highlighter marker",
                "product_description" => "A pack of 10 highlighter markers",
                "product_price" => 220000,
                "category_id" => 7
            ],
            [
                "product_image" => "correction_tape.webp",
                "product_name" => "Correction tape",
                "product_description" => "Correction tape for all pen mistakes",
                "product_price" => 48000,
                "category_id" => 7
            ],
            [
                "product_image" => "marker.jpeg",
                "product_name" => "Marker",
                "product_description" => "A single sharpie black marker",
                "product_price" => 12000,
                "category_id" => 7
            ],
            [
                "product_image" => "duct_tape.webp",
                "product_name" => "Duct tape",
                "product_description" => "A roll of duct tape",
                "product_price" => 15000,
                "category_id" => 7
            ],
            [
                "product_image" => "clipboard.webp",
                "product_name" => "Clipboard",
                "product_description" => "A plastic clipboard",
                "product_price" => 14000,
                "category_id" => 7
            ],
            [
                "product_image" => "notebook.jpg",
                "product_name" => "Notebook",
                "product_description" => "A single yellow spiral notebook",
                "product_price" => 16000,
                "category_id" => 7
            ],
            [
                "product_image" => "stapler.webp",
                "product_name" => "Stapler",
                "product_description" => "Stapler that comes with 1000 staples",
                "product_price" => 22000,
                "category_id" => 7
            ],
        ]);


        // Books
        Product::create([
            "product_image" => "count_of_monte_christo.jpg",
            "product_name" => "The Count of Monte Christo",
            "product_description" => "A literary classic by Alexandre Dumas",
            "product_price" => 150000,
            "category_id" => 2
        ]);

        // Fashion
        Product::create([
            "product_image" => "fedora.jpg",
            "product_name" => "Men's fedora",
            "product_description" => "A pack of three fashionable straw hat fedora",
            "product_price" => 360000,
            "category_id" => 4
        ]);

        // Electronics
        Product::create([
            "product_image" => "iphone14_pro_max.jpg",
            "product_name" => "IPhone 14 Pro Max",
            "product_description" => "The newest model in the iphone line of smartphones, coming with brand new long-awaited features",
            "product_price" => 13000000,
            "category_id" => 3
        ]);

        // Sport
        Product::create([
            "product_image" => "junior_racket.jpg",
            "product_name" => "Junior racket",
            "product_description" => "A smaller tennis racket for ages 9 to 10",
            "product_price" => 115000,
            "category_id" => 8
        ]);

        // Beauty
        Product::create([
            "product_image" => "lipstick.jpeg",
            "product_name" => "Matte lipstick",
            "product_description" => "A creamy rich Lipstick formula with high colour payoff in a no-shine matte finish.",
            "product_price" => 200000,
            "category_id" => 1
        ]);

        // Home Appliances
        Product::create([
            "product_image" => "microwave.jpg",
            "product_name" => "Neochef microwave",
            "product_description" => "Reliable microwave for all your microwaving needs",
            "product_price" => 900000,
            "category_id" => 6
        ]);

        // Health
        Product::create([
            "product_image" => "vitamin_c.jpeg",
            "product_name" => "Vitamin C supplements",
            "product_description" => "Vitamin C supplements by Ipi to bolster your immune system",
            "product_price" => 6500,
            "category_id" => 5
        ]);

    }
}
