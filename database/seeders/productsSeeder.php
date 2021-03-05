<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title' => 'Šaldytuvas Snaigė RF31SM-S0002F0',
            'summary'=> 'lorem ipsum lorem lorem lorem lorem lorem',
            'type' => 'RF31SM-S0002F0',
            'price' => '93',
            'quantity' => 4,
            'content' => 'saldytuvas snaige tiesios Zuuper!!!'
        ]);

        DB::table('products')->insert([
            'title' => 'Šaldytuvas Samsung RB34T675ES9/EF',
            'summary'=> 'lorem ipsum lorem lorem lorem lorem lorem',
            'type' => ' RB34T675ES9/EF',
            'price' => '507',
            'quantity' => 5,
            'content' => 'saldytuvas Samsung tiesios Zuuper!!!'
        ]);
        DB::table('products')->insert([
            'title' => 'Šaldytuvas Samsung RB31HSR2DSA/EF',
            'summary'=> 'lorem ipsum lorem lorem lorem lorem lorem',
            'type' => ' RB31HSR2DSA/EF',
            'price' => '360',
            'quantity' => 10,
            'content' => 'saldytuvas Samsung tiesios Zuuper!!!'
        ]);
    }
}
