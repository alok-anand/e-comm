<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('products')->insert([
        //     'name'=>fake()->word,
        //     'price'=>fake()->numberBetween($min = 1000, $max = 9000),
        //     'discription'=>fake()->paragraph,
        //     'category' =>fake()->word,
        //     'gallery' =>'dummy.jpg'
        //     ],
        //     [
        //         'name'=>fake()->word,
        //         'price'=>fake()->numberBetween($min = 1000, $max = 9000),
        //         'discription'=>fake()->paragraph,
        //         'category' =>fake()->word,
        //         'gallery' =>'dummy.jpg'
        //         ]
        
        
        // );
         Product::truncate();
         Product::factory()->count(5)->create();
        
    }
}
