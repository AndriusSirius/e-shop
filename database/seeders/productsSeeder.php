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
            'model' => 'RF31SM-S0002F0',
            'price' => '93',
            'quantity' => 4,
            'content' => 'FAST FREEZE
            During fast freezing, the temperature in the FAST FREEZE compartment -18 °C and lower. At this temperature, the freezing process is fast and ice crystals do not form in the food product cells. In addition, this function does not allow the temperature of the frozen Products to rise, so their nutrients, taste, color and nutritional value are optimally preserved.

            Crisper drawers These deep, spacious and sturdy crisper drawers can even fit a head of cabbage if you want to keep it in the refrigerator.

            Door shelves The convenient door shelves can accommodate a lot of different sized and shaped Products. The height of the shelves can be easily adjusted or removed altogether. Our designers paid a lot of attention to the shape of the shelves and adapted them to best suit modern-day packaging.

            Efficient LED lighting The LED lighting installed in the fridge-freezer provides excellent illumination – the light reaches all of the compartments. Compared to conventional lights, these are stronger and resistant to vibration and temperature changes. LEDs use up to 80% less electricity, do not emit UV and infrared rays, and do not contain mercury.

            Reliable bottle shelf The bottle shelf can accommodate different sized bottles at the same time. The bottle holder will secure them and prevent them from tipping over.

            Safety glass shelves with metallised frame Tempered glass shelves can hold more than 25 kg, are hard to break, do not scratch, and are very easy to clean. The metallised frames attached to the front and back of the shelf will keep spilled liquid from dripping onto the shelves below. The position of the shelves can be easily adjusted – changing the height or removing them altogether

            Section for small food Products The freezer compartment has an incredibly convenient compartment for freezing small or bulk foods, such as berries, dumplings and other small Products. You can also use it to quickly make ice cubes for your cocktail party.

            Shelf with lid The covered shelf will keep product odours from spreading throughout the refrigerator The covered shelf is a convenient place to store flavoured foods, such as cheese and pâtés. The lid will keep their odour from spreading throughout the refrigerator.',
            'product_sign' => 'Snaigė',
            'type' => 'Šaldytuvas',
            'color' => 'Rožinė',
            'energy' => '2kw',
            'warranty' => '3 metai'
        ]);

        DB::table('products')->insert([
            'title' => 'Šaldytuvas Samsung RB34T675ES9/EF',
            'summary'=> 'lorem ipsum lorem lorem lorem lorem lorem',
            'model' => ' RB34T675ES9/EF',
            'price' => '507',
            'quantity' => 5,
            'content' => 'FAST FREEZE
            During fast freezing, the temperature in the FAST FREEZE compartment -18 °C and lower. At this temperature, the freezing process is fast and ice crystals do not form in the food product cells. In addition, this function does not allow the temperature of the frozen Products to rise, so their nutrients, taste, color and nutritional value are optimally preserved.

            Crisper drawers These deep, spacious and sturdy crisper drawers can even fit a head of cabbage if you want to keep it in the refrigerator.

            Door shelves The convenient door shelves can accommodate a lot of different sized and shaped Products. The height of the shelves can be easily adjusted or removed altogether. Our designers paid a lot of attention to the shape of the shelves and adapted them to best suit modern-day packaging.

            Efficient LED lighting The LED lighting installed in the fridge-freezer provides excellent illumination – the light reaches all of the compartments. Compared to conventional lights, these are stronger and resistant to vibration and temperature changes. LEDs use up to 80% less electricity, do not emit UV and infrared rays, and do not contain mercury.

            Reliable bottle shelf The bottle shelf can accommodate different sized bottles at the same time. The bottle holder will secure them and prevent them from tipping over.

            Safety glass shelves with metallised frame Tempered glass shelves can hold more than 25 kg, are hard to break, do not scratch, and are very easy to clean. The metallised frames attached to the front and back of the shelf will keep spilled liquid from dripping onto the shelves below. The position of the shelves can be easily adjusted – changing the height or removing them altogether

            Section for small food Products The freezer compartment has an incredibly convenient compartment for freezing small or bulk foods, such as berries, dumplings and other small Products. You can also use it to quickly make ice cubes for your cocktail party.

            Shelf with lid The covered shelf will keep product odours from spreading throughout the refrigerator The covered shelf is a convenient place to store flavoured foods, such as cheese and pâtés. The lid will keep their odour from spreading throughout the refrigerator.',
            'product_sign' => 'Samsung',
            'type' => 'Šaldytuvas',
            'color' => 'Melyna',
            'energy' => '2kw',
            'warranty' => '3 metai'
        ]);
        DB::table('products')->insert([
            'title' => 'Šaldytuvas Samsung RB31HSR2DSA/EF',
            'summary'=> 'lorem ipsum lorem lorem lorem lorem lorem',
            'model' => ' RB31HSR2DSA/EF',
            'price' => '360',
            'quantity' => 10,
            'content' => 'saldytuvas Samsung tiesios Zuuper!!!',
            'product_sign' => 'Samsung',
            'type' => 'Šaldytuvas',
            'color' => 'Rožinė',
            'energy' => '2kw',
            'warranty' => '3 metai'
        ]);
        DB::table('products')->insert([
            'title' => 'Skalbimo mašina Electrolux EW7W447W',
            'summary'=> 'lorem ipsum lorem lorem lorem lorem lorem',
            'model' => ' EW7W447W',
            'price' => '455',
            'quantity' => 110,
            'content' => 'Skalbimo mašina tiesios Zuuper!!!',
            'product_sign' => 'Snaigė',
            'type' => 'Šaldytuvas',
            'color' => 'Rožinė',
            'energy' => '2kw',
            'warranty' => '3 metai'
        ]);
        DB::table('products')->insert([
            'title' => 'Skalbimo mašina AEG L6SE47SE',
            'summary'=> 'lorem ipsum lorem lorem lorem lorem lorem',
            'model' => 'AEG L6SE47SE',
            'price' => '405',
            'quantity' => 11,
            'content' => 'Skalbimo mašina AEG tiesios Zuuper!!!',
            'product_sign' => 'Snaigė',
            'type' => 'Šaldytuvas',
            'color' => 'Rožinė',
            'energy' => '2kw',
            'warranty' => '3 metai'
        ]);
        DB::table('products')->insert([
            'title' => 'Skalbimo mašina Beko WUE 8633 XST',
            'summary'=> 'lorem ipsum lorem lorem lorem lorem lorem',
            'model' => 'Beko WUE 8633 XST',
            'price' => '265',
            'quantity' => 21,
            'content' => 'Skalbimo mašina AEG tiesios Zuuper!!!',
            'product_sign' => 'Snaigė',
            'type' => 'Šaldytuvas',
            'color' => 'Rožinė',
            'energy' => '2kw',
            'warranty' => '3 metai'
        ]);
        DB::table('products')->insert([
            'title' => 'Skalbimo mašina Electrolux EW7W447W',
            'summary'=> 'lorem ipsum lorem lorem lorem lorem lorem',
            'model' => ' EW7W447W',
            'price' => '455',
            'quantity' => 110,
            'content' => 'Skalbimo mašina tiesios Zuuper!!!',
            'product_sign' => 'Snaigė',
            'type' => 'Šaldytuvas',
            'color' => 'Rožinė',
            'energy' => '2kw',
            'warranty' => '3 metai'
        ]);
        DB::table('products')->insert([
            'title' => 'Skalbimo mašina AEG L6SE47SE',
            'summary'=> 'lorem ipsum lorem lorem lorem lorem lorem',
            'model' => 'AEG L6SE47SE',
            'price' => '405',
            'quantity' => 11,
            'content' => 'Skalbimo mašina AEG tiesios Zuuper!!!',
            'product_sign' => 'Snaigė',
            'type' => 'Šaldytuvas',
            'color' => 'Rožinė',
            'energy' => '2kw',
            'warranty' => '3 metai'
        ]);
        DB::table('products')->insert([
            'title' => 'Skalbimo mašina Beko WUE 8633 XST',
            'summary'=> 'lorem ipsum lorem lorem lorem lorem lorem',
            'model' => 'Beko WUE 8633 XST',
            'price' => '265',
            'quantity' => 21,
            'content' => 'Skalbimo mašina AEG tiesios Zuuper!!!',
            'product_sign' => 'Snaigė',
            'type' => 'Šaldytuvas',
            'color' => 'Rožinė',
            'energy' => '2kw',
            'warranty' => '3 metai'
        ]);
        DB::table('products')->insert([
            'title' => 'Kavos virimo aparatas PHILIPS LatteGo EP5334/10',
            'summary'=> 'lorem ipsum lorem lorem lorem lorem lorem',
            'model' => 'EP5334/10',
            'price' => '265',
            'quantity' => 21,
            'content' => 'PHILIPS LatteGo  tiesiog Zuuper!!!',
            'product_sign' => 'Snaigė',
            'type' => 'Šaldytuvas',
            'color' => 'Rožinė',
            'energy' => '2kw',
            'warranty' => '3 metai'
        ]);
    }
}
