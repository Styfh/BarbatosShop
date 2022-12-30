<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            ['category_name' => 'Beauty'],
            ['category_name' => 'Books'],
            ['category_name' => 'Electronics'],
            ['category_name' => 'Fashion'],
            ['category_name' => 'Health'],
            ['category_name' => 'Home Appliances'],
            ['category_name' => 'Office and Stationery'],
            ['category_name' => 'Sport']
        ]);
    }
}
