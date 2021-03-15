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
            'content' => 'saldytuvas snaige tiesios Zuuper!!!',
            'tech_content' =>'Ryja mažai elektros. Patikimas ilgaamžis šaldytuvas. Lalalalalalalalala.
            bumčik bumčik. bum bum tralialia. lorem lorem. Kebabas skanu. Mėsa: kiauliena, vištiena, jautiena.
            trobelė skraido. Balionai irgi. LALALALALLL'
        ]);

        DB::table('products')->insert([
            'title' => 'Šaldytuvas Samsung RB34T675ES9/EF',
            'summary'=> 'lorem ipsum lorem lorem lorem lorem lorem',
            'type' => ' RB34T675ES9/EF',
            'price' => '507',
            'quantity' => 5,
            'content' => 'saldytuvas Samsung tiesios Zuuper!!!',
            'tech_content' =>'Ryja mažai elektros. Patikimas ilgaamžis šaldytuvas. Lalalalalalalalala.
            bumčik bumčik. bum bum tralialia. lorem lorem. Kebabas skanu. Mėsa: kiauliena, vištiena, jautiena.
            trobelė skraido. Balionai irgi. LALALALAL'
        ]);
        DB::table('products')->insert([
            'title' => 'Šaldytuvas Samsung RB31HSR2DSA/EF',
            'summary'=> 'lorem ipsum lorem lorem lorem lorem lorem',
            'type' => ' RB31HSR2DSA/EF',
            'price' => '360',
            'quantity' => 10,
            'content' => 'saldytuvas Samsung tiesios Zuuper!!!',
            'tech_content' =>'Ryja mažai elektros. Patikimas ilgaamžis šaldytuvas. Lalalalalalalalala.
            bumčik bumčik. bum bum tralialia. lorem lorem. Kebabas skanu. Mėsa: kiauliena, vištiena, jautiena.
            trobelė skraido. Balionai irgi. LALALALALLLLL'
        ]);
        DB::table('products')->insert([
            'title' => 'Skalbimo mašina Electrolux EW7W447W',
            'summary'=> 'lorem ipsum lorem lorem lorem lorem lorem',
            'type' => ' EW7W447W',
            'price' => '455',
            'quantity' => 110,
            'content' => 'Skalbimo mašina tiesios Zuuper!!!',
            'tech_content' =>'Ryja mažai elektros. Patikimas ilgaamžis šaldytuvas. Lalalalalalalalala.
            bumčik bumčik. bum bum tralialia. lorem lorem. Kebabas skanu. Mėsa: kiauliena, vištiena, jautiena.
            trobelė skraido. Balionai irgi. LALALALALL'
        ]);
        DB::table('products')->insert([
            'title' => 'Skalbimo mašina AEG L6SE47SE',
            'summary'=> 'lorem ipsum lorem lorem lorem lorem lorem',
            'type' => 'AEG L6SE47SE',
            'price' => '405',
            'quantity' => 11,
            'content' => 'Skalbimo mašina AEG tiesios Zuuper!!!',
            'tech_content' =>'Ryja mažai elektros. Patikimas ilgaamžis šaldytuvas. Lalalalalalalalala.
            bumčik bumčik. bum bum tralialia. lorem lorem. Kebabas skanu. Mėsa: kiauliena, vištiena, jautiena.
            trobelė skraido. Balionai irgi. LALALALALL'
        ]);
        DB::table('products')->insert([
            'title' => 'Skalbimo mašina Beko WUE 8633 XST',
            'summary'=> 'lorem ipsum lorem lorem lorem lorem lorem',
            'type' => 'Beko WUE 8633 XST',
            'price' => '265',
            'quantity' => 21,
            'content' => 'Skalbimo mašina AEG tiesios Zuuper!!!',
            'tech_content' =>'Ryja mažai elektros. Patikimas ilgaamžis šaldytuvas. Lalalalalalalalala.
            bumčik bumčik. bum bum tralialia. lorem lorem. Kebabas skanu. Mėsa: kiauliena, vištiena, jautiena.
            trobelė skraido. Balionai irgi. LALALALALLL'
        ]);
        DB::table('products')->insert([
            'title' => 'Skalbimo mašina Electrolux EW7W447W',
            'summary'=> 'lorem ipsum lorem lorem lorem lorem lorem',
            'type' => ' EW7W447W',
            'price' => '455',
            'quantity' => 110,
            'content' => 'Skalbimo mašina tiesios Zuuper!!!',
            'tech_content' =>'Ryja mažai elektros. Patikimas ilgaamžis šaldytuvas. Lalalalalalalalala.
            bumčik bumčik. bum bum tralialia. lorem lorem. Kebabas skanu. Mėsa: kiauliena, vištiena, jautiena.
            trobelė skraido. Balionai irgi. LALALALALLLLLLLL'
        ]);
        DB::table('products')->insert([
            'title' => 'Skalbimo mašina AEG L6SE47SE',
            'summary'=> 'lorem ipsum lorem lorem lorem lorem lorem',
            'type' => 'AEG L6SE47SE',
            'price' => '405',
            'quantity' => 11,
            'content' => 'Skalbimo mašina AEG tiesios Zuuper!!!',
            'tech_content' =>'Ryja mažai elektros. Patikimas ilgaamžis šaldytuvas. Lalalalalalalalala.
            bumčik bumčik. bum bum tralialia. lorem lorem. Kebabas skanu. Mėsa: kiauliena, vištiena, jautiena.
            trobelė skraido. Balionai irgi. LALALALALLLL'
        ]);
        DB::table('products')->insert([
            'title' => 'Skalbimo mašina Beko WUE 8633 XST',
            'summary'=> 'lorem ipsum lorem lorem lorem lorem lorem',
            'type' => 'Beko WUE 8633 XST',
            'price' => '265',
            'quantity' => 21,
            'content' => 'Skalbimo mašina AEG tiesios Zuuper!!!',
            'tech_content' =>'Ryja mažai elektros. Patikimas ilgaamžis šaldytuvas. Lalalalalalalalala.
            bumčik bumčik. bum bum tralialia. lorem lorem. Kebabas skanu. Mėsa: kiauliena, vištiena, jautiena.
            trobelė skraido. Balionai irgi. LALALALALLL'
        ]);
        DB::table('products')->insert([
            'title' => 'Kavos virimo aparatas PHILIPS LatteGo EP5334/10',
            'summary'=> 'lorem ipsum lorem lorem lorem lorem lorem',
            'type' => 'EP5334/10',
            'price' => '265',
            'quantity' => 21,
            'content' => 'PHILIPS LatteGo  tiesiog Zuuper!!!',
            'tech_content' =>'Ryja mažai elektros. Patikimas ilgaamžis šaldytuvas. Lalalalalalalalala.
            bumčik bumčik. bum bum tralialia. lorem lorem. Kebabas skanu. Mėsa: kiauliena, vištiena, jautiena.
            trobelė skraido. Balionai irgi. LALALALALLL'
        ]);
    }
}
