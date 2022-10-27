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
        Category::create(['category_name' => 'Beauty']);
        Category::create(['category_name' => 'Books']);
        Category::create(['category_name' => 'Electronics']);
        Category::create(['category_name' => 'Fashion']);
        Category::create(['category_name' => 'Health']);
        Category::create(['category_name' => 'Home Appliances']);
        Category::create(['category_name' => 'Office and Stationery']);
        Category::create(['category_name' => 'Sport']);
    }
}
