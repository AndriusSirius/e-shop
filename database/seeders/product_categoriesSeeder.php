<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class product_categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_category')->insert([
            'products_id'=> '1',
            'categories_id' => '2'
        ]);
        DB::table('product_category')->insert([
            'products_id'=> '1',
            'categories_id' => '4'
        ]);
        DB::table('product_category')->insert([
            'products_id'=> '2',
            'categories_id' => '2'
        ]);
        DB::table('product_category')->insert([
            'products_id'=> '2',
            'categories_id' => '4'
        ]);
        DB::table('product_category')->insert([
            'products_id'=> '3',
            'categories_id' => '2'
        ]);
        DB::table('product_category')->insert([
            'products_id'=> '3',
            'categories_id' => '4'
        ]);
        DB::table('product_category')->insert([
            'products_id'=> '4',
            'categories_id' => '2'
        ]);
        DB::table('product_category')->insert([
            'products_id'=> '4',
            'categories_id' => '5'
        ]);
        DB::table('product_category')->insert([
            'products_id'=> '5',
            'categories_id' => '2'
        ]);
        DB::table('product_category')->insert([
            'products_id'=> '5',
            'categories_id' => '5'
        ]);
        DB::table('product_category')->insert([
            'products_id'=> '6',
            'categories_id' => '2'
        ]);
        DB::table('product_category')->insert([
            'products_id'=> '6',
            'categories_id' => '5'
        ]);
        DB::table('product_category')->insert([
            'products_id'=> '7',
            'categories_id' => '2'
        ]);
        DB::table('product_category')->insert([
            'products_id'=> '7',
            'categories_id' => '5'
        ]);
        DB::table('product_category')->insert([
            'products_id'=> '8',
            'categories_id' => '2'
        ]);
        DB::table('product_category')->insert([
            'products_id'=> '8',
            'categories_id' => '5'
        ]);
        DB::table('product_category')->insert([
            'products_id'=> '9',
            'categories_id' => '2'
        ]);
        DB::table('product_category')->insert([
            'products_id'=> '9',
            'categories_id' => '5'
        ]);
        DB::table('product_category')->insert([
            'products_id'=> '10',
            'categories_id' => '1'
        ]);
        DB::table('product_category')->insert([
            'products_id'=> '10',
            'categories_id' => '8'
        ]);
    }
}
