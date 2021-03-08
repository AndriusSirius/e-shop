<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class discountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('discounts')->insert([
            'products_id' => rand(1,3),
            'percentage'=> 24,
            'from' => '2021-03-05',
            'to' => '2021-03-07'
        ]);
        DB::table('discounts')->insert([
            'products_id' => rand(1,3),
            'percentage'=> 4,
            'from' =>  '2021-03-07',
            'to' =>  '2021-03-08'
        ]);
    }
}