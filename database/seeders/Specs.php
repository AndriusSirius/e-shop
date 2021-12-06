<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Specs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // **************************Šaldytuvai*****************************
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Ilgis',
            'value' => '652 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Plotis',
            'value' => '5421 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Aukštis',
            'value' => '542 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Gylis',
            'value' => '42 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Lentynų skaičius',
            'value' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Energijos klasė',
            'value' => 'A',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Energijos sąnaudos',
            'value' => '248 kWh',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Talpa',
            'value' => '350 L',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Šaldiklio talpa',
            'value' => '90 L',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Temperatūra Šaldiklyje',
            'value' => '-15/-23 C',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Atšaldymas',
            'value' => 'No Frost',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Šaldiklio efektyvumas be elektros srovės',
            'value' => '15 val.',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Užšaldymo galia ',
            'value' => '- kg/24h',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Maksimalus triukšmo lygis ',
            'value' => '42 debilai',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Montavimo tipas ',
            'value' => 'Laisvai statomi',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Atostogų rėžimas',
            'value' => 'Yra',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Valdymas',
            'value' => 'Pultelinis',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Lentynėlė buteliams',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Lentynėlė kiaušams',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Šalto vandens tiekimo sistema',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Atvertų durų garsinis signalas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Antibakterinė danga',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Šaldiklio valdymas',
            'value' => 'Sensorinis',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Greitas užšaldymas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Ledo gaminimo įranga',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Padėklas ledukams',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Ledo gaminimo įranga',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Keičiama durų kryptis',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Lentynų skačius',
            'value' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Žemos temperatūros kamera',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Palaikomos technologijos',
            'value' => 'Šaldytuvo antibakterinis filtras, Fast Freeze, No Frost',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Išmanus įrenginys',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Ilgis',
            'value' => '542 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Plotis',
            'value' => '5421 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Aukštis',
            'value' => '542 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Gylis',
            'value' => '42 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Lentynų skaičius',
            'value' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Energijos klasė',
            'value' => 'A',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Energijos sąnaudos',
            'value' => '248 kWh',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Talpa',
            'value' => '350 L',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Šaldiklio talpa',
            'value' => '90 L',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Temperatūra Šaldiklyje',
            'value' => '-15/-23 C',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Atšaldymas',
            'value' => 'No Frost',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Šaldiklio efektyvumas be elektros srovės',
            'value' => '15 val.',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Užšaldymo galia ',
            'value' => '- kg/24h',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Maksimalus triukšmo lygis ',
            'value' => '42 debilai',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Montavimo tipas ',
            'value' => 'Laisvai statomi',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Atostogų rėžimas',
            'value' => 'Yra',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Valdymas',
            'value' => 'Pultelinis',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Lentynėlė buteliams',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Lentynėlė kiaušams',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Šalto vandens tiekimo sistema',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Atvertų durų garsinis signalas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Antibakterinė danga',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Šaldiklio valdymas',
            'value' => 'Sensorinis',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Greitas užšaldymas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Ledo gaminimo įranga',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Padėklas ledukams',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Ledo gaminimo įranga',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Keičiama durų kryptis',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Lentynų skačius',
            'value' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Žemos temperatūros kamera',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Palaikomos technologijos',
            'value' => 'Šaldytuvo antibakterinis filtras, Fast Freeze, No Frost',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Išmanus įrenginys',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Ilgis',
            'value' => '543 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Plotis',
            'value' => '5431 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Aukštis',
            'value' => '543 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Gylis',
            'value' => '43 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Lentynų skaičius',
            'value' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Energijos klasė',
            'value' => 'A',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Energijos sąnaudos',
            'value' => '348 kWh',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Talpa',
            'value' => '350 L',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Šaldiklio talpa',
            'value' => '90 L',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Temperatūra Šaldiklyje',
            'value' => '-15/-33 C',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Atšaldymas',
            'value' => 'No Frost',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Šaldiklio efektyvumas be elektros srovės',
            'value' => '15 val.',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Užšaldymo galia ',
            'value' => '- kg/34h',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Maksimalus triukšmo lygis ',
            'value' => '43 dB.',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Montavimo tipas ',
            'value' => 'Laisvai statomi',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Atostogų rėžimas',
            'value' => 'Yra',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Valdymas',
            'value' => 'Pultelinis',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Lentynėlė buteliams',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Lentynėlė kiaušams',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Šalto vandens tiekimo sistema',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Atvertų durų garsinis signalas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Antibakterinė danga',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Šaldiklio valdymas',
            'value' => 'Sensorinis',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Greitas užšaldymas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Ledo gaminimo įranga',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Padėklas ledukams',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Ledo gaminimo įranga',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Keičiama durų kryptis',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Lentynų skačius',
            'value' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Žemos temperatūros kamera',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Palaikomos technologijos',
            'value' => 'Šaldytuvo antibakterinis filtras, Fast Freeze, No Frost',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Išmanus įrenginys',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        //*******************************Skalbimo mašinos




        DB::table('specs')->insert([
            'products_id' => '4',
            'specs_key' => 'Ilgis',
            'value' => '542 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '4',
            'specs_key' => 'Plotis',
            'value' => '5421 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '4',
            'specs_key' => 'Aukštis',
            'value' => '542 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '4',
            'specs_key' => 'Gylis',
            'value' => '42 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '4',
            'specs_key' => 'Gylis',
            'value' => '42 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '4',
            'specs_key' => 'Maksimalus skalbinių svoris ',
            'value' => '10 KG',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '4',
            'specs_key' => 'Energijos klasė ',
            'value' => 'A +++',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '4',
            'specs_key' => 'Energijos sąnaudos per metus ',
            'value' => '167kWh',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '4',
            'specs_key' => 'Energijos sunaudojimas ciklui',
            'value' => '1.40 kWh',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '4',
            'specs_key' => 'Energijos sąnaudos išjungus',
            'value' => '0,1',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '4',
            'specs_key' => 'Metinės sąnaudos',
            'value' => '12100 kWh',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '4',
            'specs_key' => 'Gręžimo klasė',
            'value' => "A ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '4',
            'specs_key' => 'Gręžimo greitis',
            'value' => "1600 aps./min.",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '4',
            'specs_key' => 'Standartinis programos laikas',
            'value' => "285 min",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '4',
            'specs_key' => 'Maksimalus triukšmo lygis',
            'value' => "74 dB",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '4',
            'specs_key' => 'Montavimo tipas',
            'value' => "Laisvai statomos ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '4',
            'specs_key' => 'Skalbimo mašinos tipas',
            'value' => "Pakraunamos iš priekio ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '4',
            'specs_key' => 'Vandens sąnaudos ciklui',
            'value' => "70 L ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '4',
            'specs_key' => 'Ekranas ',
            'value' => "Taip ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '4',
            'specs_key' => 'Laikmatis ',
            'value' => "Taip ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '4',
            'specs_key' => 'Skalbimo programų skaičius',
            'value' => "14 ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '4',
            'specs_key' => 'Greitas skalbimas',
            'value' => "Taip ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '4',
            'specs_key' => 'Skalbimas be gręžimo',
            'value' => "Taip ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '4',
            'specs_key' => 'Ekonomiškas skalbimas',
            'value' => "Taip ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '4',
            'specs_key' => 'Kitos skalbimo programos',
            'value' => "Medvilnės programa, Sintetikos skalbimo programa, Vilnos skalbimo programa, Džinsų skalbimas, Sporto programa, Mix, ECO, Delikatus skalbimas, Greita programa ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '4',
            'specs_key' => 'Skalbimo pradžios atidėjimas',
            'value' => "Taip ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '4',
            'specs_key' => 'Garų funkcija',
            'value' => "Ne ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '4',
            'specs_key' => 'Skalbimo programos pauzė',
            'value' => "Taip",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '4',
            'specs_key' => 'Skalbimo eigos indikacija',
            'value' => "Taip",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '4',
            'specs_key' => 'Rankinis temperatūros valdymas',
            'value' => "Taip",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '4',
            'specs_key' => 'Rankinis gręžimo greičio valdymas',
            'value' => "Taip",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '4',
            'specs_key' => 'Kita informacija',
            'value' => "Būgno disbalanso kontrolė, Apsauga nuo vandens nutekėjimo, Putų kontrolė",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '4',
            'specs_key' => 'Automatinis svėrimas',
            'value' => "Taip",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '4',
            'specs_key' => 'Valdymas',
            'value' => "Mechaninis",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '5',
            'specs_key' => 'Ilgis',
            'value' => '552 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '5',
            'specs_key' => 'Plotis',
            'value' => '5521 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '5',
            'specs_key' => 'Aukštis',
            'value' => '552 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '5',
            'specs_key' => 'Gylis',
            'value' => '52 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '5',
            'specs_key' => 'Gylis',
            'value' => '52 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '5',
            'specs_key' => 'Maksimalus skalbinių svoris ',
            'value' => '10 KG',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '5',
            'specs_key' => 'Energijos klasė ',
            'value' => 'A +++',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '5',
            'specs_key' => 'Energijos sąnaudos per metus ',
            'value' => '167kWh',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '5',
            'specs_key' => 'Energijos sunaudojimas ciklui',
            'value' => '1.50 kWh',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '5',
            'specs_key' => 'Energijos sąnaudos išjungus',
            'value' => '0,1',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '5',
            'specs_key' => 'Metinės sąnaudos',
            'value' => '12100 kWh',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '5',
            'specs_key' => 'Gręžimo klasė',
            'value' => "A ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '5',
            'specs_key' => 'Gręžimo greitis',
            'value' => "1600 aps./min.",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '5',
            'specs_key' => 'Standartinis programos laikas',
            'value' => "285 min",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '5',
            'specs_key' => 'Maksimalus triukšmo lygis',
            'value' => "75 dB",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '5',
            'specs_key' => 'Montavimo tipas',
            'value' => "Laisvai statomos ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '5',
            'specs_key' => 'Skalbimo mašinos tipas',
            'value' => "Pakraunamos iš priekio ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '5',
            'specs_key' => 'Vandens sąnaudos ciklui',
            'value' => "70 L ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '5',
            'specs_key' => 'Ekranas ',
            'value' => "Taip ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '5',
            'specs_key' => 'Laikmatis ',
            'value' => "Taip ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '5',
            'specs_key' => 'Skalbimo programų skaičius',
            'value' => "15 ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '5',
            'specs_key' => 'Greitas skalbimas',
            'value' => "Taip ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '5',
            'specs_key' => 'Skalbimas be gręžimo',
            'value' => "Taip ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '5',
            'specs_key' => 'Ekonomiškas skalbimas',
            'value' => "Taip ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '5',
            'specs_key' => 'Kitos skalbimo programos',
            'value' => "Medvilnės programa, Sintetikos skalbimo programa, Vilnos skalbimo programa, Džinsų skalbimas, Sporto programa, Mix, ECO, Delikatus skalbimas, Greita programa ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '5',
            'specs_key' => 'Skalbimo pradžios atidėjimas',
            'value' => "Taip ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '5',
            'specs_key' => 'Garų funkcija',
            'value' => "Ne ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '5',
            'specs_key' => 'Skalbimo programos pauzė',
            'value' => "Taip",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '5',
            'specs_key' => 'Skalbimo eigos indikacija',
            'value' => "Taip",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '5',
            'specs_key' => 'Rankinis temperatūros valdymas',
            'value' => "Taip",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '5',
            'specs_key' => 'Rankinis gręžimo greičio valdymas',
            'value' => "Taip",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '5',
            'specs_key' => 'Kita informacija',
            'value' => "Būgno disbalanso kontrolė, Apsauga nuo vandens nutekėjimo, Putų kontrolė",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '5',
            'specs_key' => 'Automatinis svėrimas',
            'value' => "Taip",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '5',
            'specs_key' => 'Valdymas',
            'value' => "Mechaninis",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);

        DB::table('specs')->insert([
            'products_id' => '6',
            'specs_key' => 'Ilgis',
            'value' => '662 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '6',
            'specs_key' => 'Plotis',
            'value' => '6621 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '6',
            'specs_key' => 'Aukštis',
            'value' => '662 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '6',
            'specs_key' => 'Gylis',
            'value' => '62 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '6',
            'specs_key' => 'Gylis',
            'value' => '62 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '6',
            'specs_key' => 'Maksimalus skalbinių svoris ',
            'value' => '10 KG',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '6',
            'specs_key' => 'Energijos klasė ',
            'value' => 'A +++',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '6',
            'specs_key' => 'Energijos sąnaudos per metus ',
            'value' => '167kWh',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '6',
            'specs_key' => 'Energijos sunaudojimas ciklui',
            'value' => '1.60 kWh',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '6',
            'specs_key' => 'Energijos sąnaudos išjungus',
            'value' => '0,1',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '6',
            'specs_key' => 'Metinės sąnaudos',
            'value' => '12100 kWh',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '6',
            'specs_key' => 'Gręžimo klasė',
            'value' => "A ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '6',
            'specs_key' => 'Gręžimo greitis',
            'value' => "1600 aps./min.",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '6',
            'specs_key' => 'Standartinis programos laikas',
            'value' => "286 min",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '6',
            'specs_key' => 'Maksimalus triukšmo lygis',
            'value' => "76 dB",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '6',
            'specs_key' => 'Montavimo tipas',
            'value' => "Laisvai statomos ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '6',
            'specs_key' => 'Skalbimo mašinos tipas',
            'value' => "Pakraunamos iš priekio ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '6',
            'specs_key' => 'Vandens sąnaudos ciklui',
            'value' => "70 L ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '6',
            'specs_key' => 'Ekranas ',
            'value' => "Taip ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '6',
            'specs_key' => 'Laikmatis ',
            'value' => "Taip ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '6',
            'specs_key' => 'Skalbimo programų skaičius',
            'value' => "16 ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '6',
            'specs_key' => 'Greitas skalbimas',
            'value' => "Taip ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '6',
            'specs_key' => 'Skalbimas be gręžimo',
            'value' => "Taip ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '6',
            'specs_key' => 'Ekonomiškas skalbimas',
            'value' => "Taip ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '6',
            'specs_key' => 'Kitos skalbimo programos',
            'value' => "Medvilnės programa, Sintetikos skalbimo programa, Vilnos skalbimo programa, Džinsų skalbimas, Sporto programa, Mix, ECO, Delikatus skalbimas, Greita programa ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '6',
            'specs_key' => 'Skalbimo pradžios atidėjimas',
            'value' => "Taip ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '6',
            'specs_key' => 'Garų funkcija',
            'value' => "Ne ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '6',
            'specs_key' => 'Skalbimo programos pauzė',
            'value' => "Taip",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '6',
            'specs_key' => 'Skalbimo eigos indikacija',
            'value' => "Taip",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '6',
            'specs_key' => 'Rankinis temperatūros valdymas',
            'value' => "Taip",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '6',
            'specs_key' => 'Rankinis gręžimo greičio valdymas',
            'value' => "Taip",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '6',
            'specs_key' => 'Kita informacija',
            'value' => "Būgno disbalanso kontrolė, Apsauga nuo vandens nutekėjimo, Putų kontrolė",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '6',
            'specs_key' => 'Automatinis svėrimas',
            'value' => "Taip",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '6',
            'specs_key' => 'Valdymas',
            'value' => "Mechaninis",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);

        DB::table('specs')->insert([
            'products_id' => '7',
            'specs_key' => 'Ilgis',
            'value' => '772 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '7',
            'specs_key' => 'Plotis',
            'value' => '7721 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '7',
            'specs_key' => 'Aukštis',
            'value' => '772 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '7',
            'specs_key' => 'Gylis',
            'value' => '72 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '7',
            'specs_key' => 'Gylis',
            'value' => '72 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '7',
            'specs_key' => 'Maksimalus skalbinių svoris ',
            'value' => '10 KG',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '7',
            'specs_key' => 'Energijos klasė ',
            'value' => 'A +++',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '7',
            'specs_key' => 'Energijos sąnaudos per metus ',
            'value' => '177kWh',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '7',
            'specs_key' => 'Energijos sunaudojimas ciklui',
            'value' => '1.70 kWh',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '7',
            'specs_key' => 'Energijos sąnaudos išjungus',
            'value' => '0,1',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '7',
            'specs_key' => 'Metinės sąnaudos',
            'value' => '12100 kWh',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '7',
            'specs_key' => 'Gręžimo klasė',
            'value' => "A ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '7',
            'specs_key' => 'Gręžimo greitis',
            'value' => "1700 aps./min.",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '7',
            'specs_key' => 'Standartinis programos laikas',
            'value' => "287 min",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '7',
            'specs_key' => 'Maksimalus triukšmo lygis',
            'value' => "77 dB",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '7',
            'specs_key' => 'Montavimo tipas',
            'value' => "Laisvai statomos ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '7',
            'specs_key' => 'Skalbimo mašinos tipas',
            'value' => "Pakraunamos iš priekio ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '7',
            'specs_key' => 'Vandens sąnaudos ciklui',
            'value' => "70 L ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '7',
            'specs_key' => 'Ekranas ',
            'value' => "Taip ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '7',
            'specs_key' => 'Laikmatis ',
            'value' => "Taip ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '7',
            'specs_key' => 'Skalbimo programų skaičius',
            'value' => "17 ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '7',
            'specs_key' => 'Greitas skalbimas',
            'value' => "Taip ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '7',
            'specs_key' => 'Skalbimas be gręžimo',
            'value' => "Taip ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '7',
            'specs_key' => 'Ekonomiškas skalbimas',
            'value' => "Taip ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '7',
            'specs_key' => 'Kitos skalbimo programos',
            'value' => "Medvilnės programa, Sintetikos skalbimo programa, Vilnos skalbimo programa, Džinsų skalbimas, Sporto programa, Mix, ECO, Delikatus skalbimas, Greita programa ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '7',
            'specs_key' => 'Skalbimo pradžios atidėjimas',
            'value' => "Taip ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '7',
            'specs_key' => 'Garų funkcija',
            'value' => "Ne ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '7',
            'specs_key' => 'Skalbimo programos pauzė',
            'value' => "Taip",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '7',
            'specs_key' => 'Skalbimo eigos indikacija',
            'value' => "Taip",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '7',
            'specs_key' => 'Rankinis temperatūros valdymas',
            'value' => "Taip",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '7',
            'specs_key' => 'Rankinis gręžimo greičio valdymas',
            'value' => "Taip",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '7',
            'specs_key' => 'Kita informacija',
            'value' => "Būgno disbalanso kontrolė, Apsauga nuo vandens nutekėjimo, Putų kontrolė",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '7',
            'specs_key' => 'Automatinis svėrimas',
            'value' => "Taip",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '7',
            'specs_key' => 'Valdymas',
            'value' => "Mechaninis",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);

        DB::table('specs')->insert([
            'products_id' => '8',
            'specs_key' => 'Ilgis',
            'value' => '882 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '8',
            'specs_key' => 'Plotis',
            'value' => '8821 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '8',
            'specs_key' => 'Aukštis',
            'value' => '882 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '8',
            'specs_key' => 'Gylis',
            'value' => '82 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '8',
            'specs_key' => 'Gylis',
            'value' => '82 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '8',
            'specs_key' => 'Maksimalus skalbinių svoris ',
            'value' => '10 KG',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '8',
            'specs_key' => 'Energijos klasė ',
            'value' => 'A +++',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '8',
            'specs_key' => 'Energijos sąnaudos per metus ',
            'value' => '187kWh',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '8',
            'specs_key' => 'Energijos sunaudojimas ciklui',
            'value' => '1.80 kWh',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '8',
            'specs_key' => 'Energijos sąnaudos išjungus',
            'value' => '0,1',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '8',
            'specs_key' => 'Metinės sąnaudos',
            'value' => '12100 kWh',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '8',
            'specs_key' => 'Gręžimo klasė',
            'value' => "A ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '8',
            'specs_key' => 'Gręžimo greitis',
            'value' => "1800 aps./min.",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '8',
            'specs_key' => 'Standartinis programos laikas',
            'value' => "288 min",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '8',
            'specs_key' => 'Maksimalus triukšmo lygis',
            'value' => "78 dB",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '8',
            'specs_key' => 'Montavimo tipas',
            'value' => "Laisvai statomos ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '8',
            'specs_key' => 'Skalbimo mašinos tipas',
            'value' => "Pakraunamos iš priekio ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '8',
            'specs_key' => 'Vandens sąnaudos ciklui',
            'value' => "70 L ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '8',
            'specs_key' => 'Ekranas ',
            'value' => "Taip ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '8',
            'specs_key' => 'Laikmatis ',
            'value' => "Taip ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '8',
            'specs_key' => 'Skalbimo programų skaičius',
            'value' => "18 ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '8',
            'specs_key' => 'Greitas skalbimas',
            'value' => "Taip ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '8',
            'specs_key' => 'Skalbimas be gręžimo',
            'value' => "Taip ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '8',
            'specs_key' => 'Ekonomiškas skalbimas',
            'value' => "Taip ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '8',
            'specs_key' => 'Kitos skalbimo programos',
            'value' => "Medvilnės programa, Sintetikos skalbimo programa, Vilnos skalbimo programa, Džinsų skalbimas, Sporto programa, Mix, ECO, Delikatus skalbimas, Greita programa ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '8',
            'specs_key' => 'Skalbimo pradžios atidėjimas',
            'value' => "Taip ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '8',
            'specs_key' => 'Garų funkcija',
            'value' => "Ne ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '8',
            'specs_key' => 'Skalbimo programos pauzė',
            'value' => "Taip",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '8',
            'specs_key' => 'Skalbimo eigos indikacija',
            'value' => "Taip",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '8',
            'specs_key' => 'Rankinis temperatūros valdymas',
            'value' => "Taip",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '8',
            'specs_key' => 'Rankinis gręžimo greičio valdymas',
            'value' => "Taip",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '8',
            'specs_key' => 'Kita informacija',
            'value' => "Būgno disbalanso kontrolė, Apsauga nuo vandens nutekėjimo, Putų kontrolė",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '8',
            'specs_key' => 'Automatinis svėrimas',
            'value' => "Taip",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '8',
            'specs_key' => 'Valdymas',
            'value' => "Mechaninis",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);

        DB::table('specs')->insert([
            'products_id' => '9',
            'specs_key' => 'Ilgis',
            'value' => '992 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '9',
            'specs_key' => 'Plotis',
            'value' => '9921 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '9',
            'specs_key' => 'Aukštis',
            'value' => '992 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '9',
            'specs_key' => 'Gylis',
            'value' => '92 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '9',
            'specs_key' => 'Gylis',
            'value' => '92 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '9',
            'specs_key' => 'Maksimalus skalbinių svoris ',
            'value' => '10 KG',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '9',
            'specs_key' => 'Energijos klasė ',
            'value' => 'A +++',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '9',
            'specs_key' => 'Energijos sąnaudos per metus ',
            'value' => '197kWh',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '9',
            'specs_key' => 'Energijos sunaudojimas ciklui',
            'value' => '1.90 kWh',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '9',
            'specs_key' => 'Energijos sąnaudos išjungus',
            'value' => '0,1',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '9',
            'specs_key' => 'Metinės sąnaudos',
            'value' => '12100 kWh',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '9',
            'specs_key' => 'Gręžimo klasė',
            'value' => "A ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '9',
            'specs_key' => 'Gręžimo greitis',
            'value' => "1900 aps./min.",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '9',
            'specs_key' => 'Standartinis programos laikas',
            'value' => "289 min",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '9',
            'specs_key' => 'Maksimalus triukšmo lygis',
            'value' => "79 dB",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '9',
            'specs_key' => 'Montavimo tipas',
            'value' => "Laisvai statomos ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '9',
            'specs_key' => 'Skalbimo mašinos tipas',
            'value' => "Pakraunamos iš priekio ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '9',
            'specs_key' => 'Vandens sąnaudos ciklui',
            'value' => "70 L ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '9',
            'specs_key' => 'Ekranas ',
            'value' => "Taip ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '9',
            'specs_key' => 'Laikmatis ',
            'value' => "Taip ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '9',
            'specs_key' => 'Skalbimo programų skaičius',
            'value' => "19 ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '9',
            'specs_key' => 'Greitas skalbimas',
            'value' => "Taip ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '9',
            'specs_key' => 'Skalbimas be gręžimo',
            'value' => "Taip ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '9',
            'specs_key' => 'Ekonomiškas skalbimas',
            'value' => "Taip ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '9',
            'specs_key' => 'Kitos skalbimo programos',
            'value' => "Medvilnės programa, Sintetikos skalbimo programa, Vilnos skalbimo programa, Džinsų skalbimas, Sporto programa, Mix, ECO, Delikatus skalbimas, Greita programa ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '9',
            'specs_key' => 'Skalbimo pradžios atidėjimas',
            'value' => "Taip ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '9',
            'specs_key' => 'Garų funkcija',
            'value' => "Ne ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '9',
            'specs_key' => 'Skalbimo programos pauzė',
            'value' => "Taip",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '9',
            'specs_key' => 'Skalbimo eigos indikacija',
            'value' => "Taip",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '9',
            'specs_key' => 'Rankinis temperatūros valdymas',
            'value' => "Taip",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '9',
            'specs_key' => 'Rankinis gręžimo greičio valdymas',
            'value' => "Taip",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '9',
            'specs_key' => 'Kita informacija',
            'value' => "Būgno disbalanso kontrolė, Apsauga nuo vandens nutekėjimo, Putų kontrolė",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '9',
            'specs_key' => 'Automatinis svėrimas',
            'value' => "Taip",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '9',
            'specs_key' => 'Valdymas',
            'value' => "Mechaninis",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);




        // ************************Kavos Virimo aparatai

        DB::table('specs')->insert([
            'products_id' => '10',
            'specs_key' => 'Gylis',
            'value' => '52 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '10',
            'specs_key' => 'Plotis',
            'value' => '21 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '10',
            'specs_key' => 'Aukštis',
            'value' => '32 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);

        DB::table('specs')->insert([
            'products_id' => '10',
            'specs_key' => 'Galia',
            'value' => '1400 W',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '10',
            'specs_key' => 'Svoris',
            'value' => '9.00 kg',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '10',
            'specs_key' => 'Slėgis',
            'value' => '15 bar',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '10',
            'specs_key' => 'Gaminamos kavos tipas',
            'value' => 'Cappuccino, Espresso, Latte Machiatto, Juoda kava',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '10',
            'specs_key' => 'Vandens talpa',
            'value' => '1.2 l',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '10',
            'specs_key' => 'Kavos pupelių talpos dydis',
            'value' => '125 g',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '10',
            'specs_key' => 'Integruotas kavos malūnėlis',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '10',
            'specs_key' => 'Programos',
            'value' => 'Vandens temperatūros programavimas',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '10',
            'specs_key' => 'Skirstytuvas kavos išpilstymui iš karto į 2 puodelius',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '10',
            'specs_key' => 'Indikatoriai',
            'value' => 'Elektroninis ekranas',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '10',
            'specs_key' => 'Korpusas',
            'value' => 'Nerūdijantis plienas',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '10',
            'specs_key' => 'Naudojamos kavos tipas',
            'value' => 'Kavos pupelės',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);

        DB::table('specs')->insert([
            'products_id' => '10',
            'specs_key' => 'Išmanus įrenginys',
            'value' => 'Ne',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        // ********************TV**********************
        DB::table('specs')->insert([
            'products_id' => '11',
            'specs_key' => 'Energijos efektyvumo klasė',
            'value' => 'G',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '11',
            'specs_key' => 'Ekrano įstrižainė',
            'value' => '77" (~196 cm)',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '11',
            'specs_key' => 'Galia',
            'value' => '210 W',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '11',
            'specs_key' => 'Metinis energijos suvartojimas ',
            'value' => '291 kWh',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '11',
            'specs_key' => 'Energijos suvartojimas budėjimo rėžime',
            'value' => '0.5 W',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '11',
            'specs_key' => 'Maksimali raiška',
            'value' => '3840 x 2160 (4K)',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '11',
            'specs_key' => 'Ekrano tipas',
            'value' => 'OLED',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '11',
            'specs_key' => 'Smart TV',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '11',
            'specs_key' => 'Lenktas (Curved)',
            'value' => 'Ne',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '11',
            'specs_key' => 'TV imtuvai',
            'value' => 'DVB-C, DVB-T2, DVB-S2',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '11',
            'specs_key' => 'Svoris',
            'value' => '30.4 kg',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '11',
            'specs_key' => 'Svoris su stovu',
            'value' => '43.5 kg',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '11',
            'specs_key' => 'Garsiakalbio galia (RMS)',
            'value' => '60 W',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '11',
            'specs_key' => 'Jungties tipas',
            'value' => 'RF įvestis, Optinis išėjimas, Ausinių išvestis, CI jungtis, 3 x USB, 4 x HDMI, LAN (RJ45)',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '11',
            'specs_key' => 'Smart TV funkcijos',
            'value' => 'Sumanus energijos taupymas, Miracast, Simplink, DVR funkcija, Automatinis programavimas, Muzikos grotuvas, Failų naršyklė, Mobilus taikymas, Galerijos režimas, Teletekstas, Apple AirPlay 2, Išmanusis balso atpažinimas, Automatinis įrenginio atpažinimas',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '11',
            'specs_key' => 'WiFi',
            'value' => 'Yra',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '11',
            'specs_key' => 'Bluetooth',
            'value' => 'Yra',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '11',
            'specs_key' => 'Operacinė sistema',
            'value' => 'webOS',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '11',
            'specs_key' => 'Aukštis be stovo',
            'value' => '98.9 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '11',
            'specs_key' => 'Plotis be stovo',
            'value' => '172.1 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '11',
            'specs_key' => 'Gylis be stovo ',
            'value' => '0.59 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '11',
            'specs_key' => 'Aukštis su stovu',
            'value' => '98.9 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '11',
            'specs_key' => 'Plotis su stovu',
            'value' => '192.3 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '11',
            'specs_key' => 'Gylis su stovu',
            'value' => '28.8 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        // ***************************Mikrobangų*************************



        DB::table('specs')->insert([
            'products_id' => '12',
            'specs_key' => 'Energijos efektyvumo klasė',
            'value' => 'G',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '12',
            'specs_key' => 'Ekrano įstrižainė',
            'value' => '77" (~196 cm)',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '12',
            'specs_key' => 'Galia',
            'value' => '210 W',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '12',
            'specs_key' => 'Metinis energijos suvartojimas ',
            'value' => '291 kWh',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '12',
            'specs_key' => 'Energijos suvartojimas budėjimo rėžime',
            'value' => '0.5 W',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '12',
            'specs_key' => 'Maksimali raiška',
            'value' => '3840 x 2160 (4K)',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '12',
            'specs_key' => 'Ekrano tipas',
            'value' => 'OLED',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '12',
            'specs_key' => 'Smart TV',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '12',
            'specs_key' => 'Lenktas (Curved)',
            'value' => 'Ne',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '12',
            'specs_key' => 'TV imtuvai',
            'value' => 'DVB-C, DVB-T2, DVB-S2',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '12',
            'specs_key' => 'Svoris',
            'value' => '30.4 kg',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '12',
            'specs_key' => 'Svoris su stovu',
            'value' => '43.5 kg',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '12',
            'specs_key' => 'Garsiakalbio galia (RMS)',
            'value' => '60 W',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '12',
            'specs_key' => 'Jungties tipas',
            'value' => 'RF įvestis, Optinis išėjimas, Ausinių išvestis, CI jungtis, 3 x USB, 4 x HDMI, LAN (RJ45)',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '12',
            'specs_key' => 'Smart TV funkcijos',
            'value' => 'Sumanus energijos taupymas, Miracast, Simplink, DVR funkcija, Automatinis programavimas, Muzikos grotuvas, Failų naršyklė, Mobilus taikymas, Galerijos režimas, Teletekstas, Apple AirPlay 2, Išmanusis balso atpažinimas, Automatinis įrenginio atpažinimas',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '12',
            'specs_key' => 'WiFi',
            'value' => 'Yra',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '12',
            'specs_key' => 'Bluetooth',
            'value' => 'Yra',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '12',
            'specs_key' => 'Operacinė sistema',
            'value' => 'webOS',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '12',
            'specs_key' => 'Aukštis be stovo',
            'value' => '98.9 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '12',
            'specs_key' => 'Plotis be stovo',
            'value' => '172.1 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '12',
            'specs_key' => 'Gylis be stovo ',
            'value' => '0.59 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '12',
            'specs_key' => 'Aukštis su stovu',
            'value' => '98.9 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '12',
            'specs_key' => 'Plotis su stovu',
            'value' => '192.3 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '12',
            'specs_key' => 'Gylis su stovu',
            'value' => '28.8 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '13',
            'specs_key' => 'Montavimo tipas',
            'value' => 'Laisvai statomos',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '13',
            'specs_key' => 'Galia',
            'value' => '1800 W',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '13',
            'specs_key' => 'Aukštis',
            'value' => '37 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '13',
            'specs_key' => 'Plotis',
            'value' => '58 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '13',
            'specs_key' => 'Gylis',
            'value' => '53 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '13',
            'specs_key' => 'Svoris',
            'value' => '33.7 kg',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '13',
            'specs_key' => 'Talpa',
            'value' => '34 l',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '13',
            'specs_key' => 'Valdymas',
            'value' => 'Mechaninis',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '13',
            'specs_key' => 'Laikmatis',
            'value' => 'Yra',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '13',
            'specs_key' => 'Grilis',
            'value' => 'Ne',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '13',
            'specs_key' => 'Grilio galingumas',
            'value' => '- W',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '13',
            'specs_key' => 'Galios lygių skaičius',
            'value' => '7',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '13',
            'specs_key' => 'Atitirpinimo režimas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '13',
            'specs_key' => 'Laikmačio funkcija',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '13',
            'specs_key' => 'Veikimo pabaigos signalas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '13',
            'specs_key' => 'Vidaus danga',
            'value' => 'Keramika',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '13',
            'specs_key' => 'Konvekcija',
            'value' => 'Ne',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '13',
            'specs_key' => 'Kita informacija',
            'value' => 'Vidaus apšvietimas',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '14',
            'specs_key' => 'Montavimo tipas',
            'value' => 'Laisvai statomos',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '14',
            'specs_key' => 'Galia',
            'value' => '1800 W',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '14',
            'specs_key' => 'Aukštis',
            'value' => '37 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '14',
            'specs_key' => 'Plotis',
            'value' => '58 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '14',
            'specs_key' => 'Gylis',
            'value' => '53 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '14',
            'specs_key' => 'Svoris',
            'value' => '33.7 kg',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '14',
            'specs_key' => 'Talpa',
            'value' => '34 l',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '14',
            'specs_key' => 'Valdymas',
            'value' => 'Mechaninis',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '14',
            'specs_key' => 'Laikmatis',
            'value' => 'Yra',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '14',
            'specs_key' => 'Grilis',
            'value' => 'Ne',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '14',
            'specs_key' => 'Grilio galingumas',
            'value' => '- W',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '14',
            'specs_key' => 'Galios lygių skaičius',
            'value' => '7',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '14',
            'specs_key' => 'Atitirpinimo režimas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '14',
            'specs_key' => 'Laikmačio funkcija',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '14',
            'specs_key' => 'Veikimo pabaigos signalas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '14',
            'specs_key' => 'Vidaus danga',
            'value' => 'Keramika',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '14',
            'specs_key' => 'Konvekcija',
            'value' => 'Ne',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '14',
            'specs_key' => 'Kita informacija',
            'value' => 'Vidaus apšvietimas',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '15',
            'specs_key' => 'Montavimo tipas',
            'value' => 'Laisvai statomos',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '15',
            'specs_key' => 'Galia',
            'value' => '1800 W',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '15',
            'specs_key' => 'Aukštis',
            'value' => '37 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '15',
            'specs_key' => 'Plotis',
            'value' => '58 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '15',
            'specs_key' => 'Gylis',
            'value' => '53 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '15',
            'specs_key' => 'Svoris',
            'value' => '33.7 kg',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '15',
            'specs_key' => 'Talpa',
            'value' => '34 l',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '15',
            'specs_key' => 'Valdymas',
            'value' => 'Mechaninis',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '15',
            'specs_key' => 'Laikmatis',
            'value' => 'Yra',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '15',
            'specs_key' => 'Grilis',
            'value' => 'Ne',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '15',
            'specs_key' => 'Grilio galingumas',
            'value' => '- W',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '15',
            'specs_key' => 'Galios lygių skaičius',
            'value' => '7',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '15',
            'specs_key' => 'Atitirpinimo režimas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '15',
            'specs_key' => 'Laikmačio funkcija',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '15',
            'specs_key' => 'Veikimo pabaigos signalas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '15',
            'specs_key' => 'Vidaus danga',
            'value' => 'Keramika',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '15',
            'specs_key' => 'Konvekcija',
            'value' => 'Ne',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '15',
            'specs_key' => 'Kita informacija',
            'value' => 'Vidaus apšvietimas',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        // ************************Indaplovės****************************
        DB::table('specs')->insert([
            'products_id' => '16',
            'specs_key' => 'Energijos klasė',
            'value' => 'A+++',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '16',
            'specs_key' => 'Energijos sąnaudos per metus',
            'value' => '214 kWh',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '16',
            'specs_key' => 'Energijos suvartojimas',
            'value' => '0.74 kW/h',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '16',
            'specs_key' => 'Energijos suvartojimas nenaudojant',
            'value' => '0.5 W',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '16',
            'specs_key' => 'Metinės vandens sąnaudos',
            'value' => '2660 L',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '16',
            'specs_key' => 'Džiovinimo efektyvumo klasė',
            'value' => 'A',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '16',
            'specs_key' => 'Standartinės programos eigos trukmė',
            'value' => '235 min',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '16',
            'specs_key' => 'Palikto įjungimo režimo trukmė',
            'value' => 'Ne',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '16',
            'specs_key' => 'Maksimalus triukšmo lygis',
            'value' => '43 dB',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '16',
            'specs_key' => 'Montavimo tipas',
            'value' => 'Įmontuojamos',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '16',
            'specs_key' => 'Aukštis',
            'value' => '81.5 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '16',
            'specs_key' => 'Plotis',
            'value' => '59.8 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '16',
            'specs_key' => 'Gylis',
            'value' => '55 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '16',
            'specs_key' => 'Svoris',
            'value' => '44.83 kg',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '16',
            'specs_key' => 'Plovimo klasė',
            'value' => 'A',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '16',
            'specs_key' => 'Vandens sąnaudos ciklui',
            'value' => '9.5 L',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '16',
            'specs_key' => 'Valdymas',
            'value' => 'Elektroninis',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '16',
            'specs_key' => 'Valdymo skydelis',
            'value' => 'Ant briaunos',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '16',
            'specs_key' => 'Plovimo temperatūrų režimai',
            'value' => '6 vnt',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '16',
            'specs_key' => 'Plovimo programų skaičius',
            'value' => '8 vnt',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '16',
            'specs_key' => 'Plovimo pradžios atidėjimas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '16',
            'specs_key' => 'Programos',
            'value' => 'Auto 45-65°C, Eco 50°C, Valymas, Itin tylus, Intensyvi, Išankstinis skalavimas, GlassCare 40°',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '16',
            'specs_key' => 'Laikrodis',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '16',
            'specs_key' => 'Ekranas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '16',
            'specs_key' => 'LED Ekranas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '16',
            'specs_key' => 'Džiovinimo tipas',
            'value' => 'Zeolith®',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '16',
            'specs_key' => 'Vandens nuotėkio kontrolė',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '16',
            'specs_key' => 'Filtras',
            'value' => 'Savaime išsivalantis',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '16',
            'specs_key' => 'Pasibaigusios druskos indikacija',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '16',
            'specs_key' => 'Pasibaigusio blizgiklio indikacija',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '16',
            'specs_key' => 'Pajungimas prie karšto vandens',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '16',
            'specs_key' => 'Kita informacija',
            'value' => 'Akustinis signalas programos pabaigoje, TimeLight funkcija, Trečias krepšys, EcoSilence Drive',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '16',
            'specs_key' => 'Trečias stalčius',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '16',
            'specs_key' => 'Palaikomos technologijos',
            'value' => 'Aqua Stop, Aqua Sensor, TimeLight, Eco Silence Drive, 3 lygių Rackmatic, Dozavimo pagalbininkas, Stiklo apsaugos sistema, Pakrovimo jutiklis',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '16',
            'specs_key' => 'Specialios programos',
            'value' => 'Intensive Zone, My Favourite',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '17',
            'specs_key' => 'Energijos klasė',
            'value' => 'A+++',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '17',
            'specs_key' => 'Energijos sąnaudos per metus',
            'value' => '214 kWh',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '17',
            'specs_key' => 'Energijos suvartojimas',
            'value' => '0.74 kW/h',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '17',
            'specs_key' => 'Energijos suvartojimas nenaudojant',
            'value' => '0.5 W',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '17',
            'specs_key' => 'Metinės vandens sąnaudos',
            'value' => '2660 L',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '17',
            'specs_key' => 'Džiovinimo efektyvumo klasė',
            'value' => 'A',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '17',
            'specs_key' => 'Standartinės programos eigos trukmė',
            'value' => '235 min',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '17',
            'specs_key' => 'Palikto įjungimo režimo trukmė',
            'value' => 'Ne',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '17',
            'specs_key' => 'Maksimalus triukšmo lygis',
            'value' => '43 dB',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '17',
            'specs_key' => 'Montavimo tipas',
            'value' => 'Įmontuojamos',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '17',
            'specs_key' => 'Aukštis',
            'value' => '81.5 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '17',
            'specs_key' => 'Plotis',
            'value' => '59.8 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '17',
            'specs_key' => 'Gylis',
            'value' => '55 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '17',
            'specs_key' => 'Svoris',
            'value' => '44.83 kg',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '17',
            'specs_key' => 'Plovimo klasė',
            'value' => 'A',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '17',
            'specs_key' => 'Vandens sąnaudos ciklui',
            'value' => '9.5 L',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '17',
            'specs_key' => 'Valdymas',
            'value' => 'Elektroninis',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '17',
            'specs_key' => 'Valdymo skydelis',
            'value' => 'Ant briaunos',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '17',
            'specs_key' => 'Plovimo temperatūrų režimai',
            'value' => '6 vnt',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '17',
            'specs_key' => 'Plovimo programų skaičius',
            'value' => '8 vnt',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '17',
            'specs_key' => 'Plovimo pradžios atidėjimas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '17',
            'specs_key' => 'Programos',
            'value' => 'Auto 45-65°C, Eco 50°C, Valymas, Itin tylus, Intensyvi, Išankstinis skalavimas, GlassCare 40°',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '17',
            'specs_key' => 'Laikrodis',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '17',
            'specs_key' => 'Ekranas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '17',
            'specs_key' => 'LED Ekranas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '17',
            'specs_key' => 'Džiovinimo tipas',
            'value' => 'Zeolith®',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '17',
            'specs_key' => 'Vandens nuotėkio kontrolė',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '17',
            'specs_key' => 'Filtras',
            'value' => 'Savaime išsivalantis',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '17',
            'specs_key' => 'Pasibaigusios druskos indikacija',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '17',
            'specs_key' => 'Pasibaigusio blizgiklio indikacija',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '17',
            'specs_key' => 'Pajungimas prie karšto vandens',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '17',
            'specs_key' => 'Kita informacija',
            'value' => 'Akustinis signalas programos pabaigoje, TimeLight funkcija, Trečias krepšys, EcoSilence Drive',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '17',
            'specs_key' => 'Trečias stalčius',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '17',
            'specs_key' => 'Palaikomos technologijos',
            'value' => 'Aqua Stop, Aqua Sensor, TimeLight, Eco Silence Drive, 3 lygių Rackmatic, Dozavimo pagalbininkas, Stiklo apsaugos sistema, Pakrovimo jutiklis',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '17',
            'specs_key' => 'Specialios programos',
            'value' => 'Intensive Zone, My Favourite',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);


        DB::table('specs')->insert([
            'products_id' => '18',
            'specs_key' => 'Energijos klasė',
            'value' => 'A+++',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '18',
            'specs_key' => 'Energijos sąnaudos per metus',
            'value' => '214 kWh',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '18',
            'specs_key' => 'Energijos suvartojimas',
            'value' => '0.74 kW/h',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '18',
            'specs_key' => 'Energijos suvartojimas nenaudojant',
            'value' => '0.5 W',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '18',
            'specs_key' => 'Metinės vandens sąnaudos',
            'value' => '2660 L',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '18',
            'specs_key' => 'Džiovinimo efektyvumo klasė',
            'value' => 'A',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '18',
            'specs_key' => 'Standartinės programos eigos trukmė',
            'value' => '235 min',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '18',
            'specs_key' => 'Palikto įjungimo režimo trukmė',
            'value' => 'Ne',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '18',
            'specs_key' => 'Maksimalus triukšmo lygis',
            'value' => '43 dB',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '18',
            'specs_key' => 'Montavimo tipas',
            'value' => 'Įmontuojamos',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '18',
            'specs_key' => 'Aukštis',
            'value' => '81.5 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '18',
            'specs_key' => 'Plotis',
            'value' => '59.8 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '18',
            'specs_key' => 'Gylis',
            'value' => '55 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '18',
            'specs_key' => 'Svoris',
            'value' => '44.83 kg',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '18',
            'specs_key' => 'Plovimo klasė',
            'value' => 'A',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '18',
            'specs_key' => 'Vandens sąnaudos ciklui',
            'value' => '9.5 L',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '18',
            'specs_key' => 'Valdymas',
            'value' => 'Elektroninis',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '18',
            'specs_key' => 'Valdymo skydelis',
            'value' => 'Ant briaunos',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '18',
            'specs_key' => 'Plovimo temperatūrų režimai',
            'value' => '6 vnt',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '18',
            'specs_key' => 'Plovimo programų skaičius',
            'value' => '8 vnt',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '18',
            'specs_key' => 'Plovimo pradžios atidėjimas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '18',
            'specs_key' => 'Programos',
            'value' => 'Auto 45-65°C, Eco 50°C, Valymas, Itin tylus, Intensyvi, Išankstinis skalavimas, GlassCare 40°',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '18',
            'specs_key' => 'Laikrodis',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '18',
            'specs_key' => 'Ekranas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '18',
            'specs_key' => 'LED Ekranas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '18',
            'specs_key' => 'Džiovinimo tipas',
            'value' => 'Zeolith®',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '18',
            'specs_key' => 'Vandens nuotėkio kontrolė',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '18',
            'specs_key' => 'Filtras',
            'value' => 'Savaime išsivalantis',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '18',
            'specs_key' => 'Pasibaigusios druskos indikacija',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '18',
            'specs_key' => 'Pasibaigusio blizgiklio indikacija',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '18',
            'specs_key' => 'Pajungimas prie karšto vandens',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '18',
            'specs_key' => 'Kita informacija',
            'value' => 'Akustinis signalas programos pabaigoje, TimeLight funkcija, Trečias krepšys, EcoSilence Drive',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '18',
            'specs_key' => 'Trečias stalčius',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '18',
            'specs_key' => 'Palaikomos technologijos',
            'value' => 'Aqua Stop, Aqua Sensor, TimeLight, Eco Silence Drive, 3 lygių Rackmatic, Dozavimo pagalbininkas, Stiklo apsaugos sistema, Pakrovimo jutiklis',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '18',
            'specs_key' => 'Specialios programos',
            'value' => 'Intensive Zone, My Favourite',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '19',
            'specs_key' => 'Energijos klasė',
            'value' => 'A+++',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '19',
            'specs_key' => 'Energijos sąnaudos per metus',
            'value' => '214 kWh',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '19',
            'specs_key' => 'Energijos suvartojimas',
            'value' => '0.74 kW/h',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '19',
            'specs_key' => 'Energijos suvartojimas nenaudojant',
            'value' => '0.5 W',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '19',
            'specs_key' => 'Metinės vandens sąnaudos',
            'value' => '2660 L',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '19',
            'specs_key' => 'Džiovinimo efektyvumo klasė',
            'value' => 'A',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '19',
            'specs_key' => 'Standartinės programos eigos trukmė',
            'value' => '235 min',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '19',
            'specs_key' => 'Palikto įjungimo režimo trukmė',
            'value' => 'Ne',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '19',
            'specs_key' => 'Maksimalus triukšmo lygis',
            'value' => '43 dB',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '19',
            'specs_key' => 'Montavimo tipas',
            'value' => 'Įmontuojamos',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '19',
            'specs_key' => 'Aukštis',
            'value' => '81.5 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '19',
            'specs_key' => 'Plotis',
            'value' => '59.8 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '19',
            'specs_key' => 'Gylis',
            'value' => '55 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '19',
            'specs_key' => 'Svoris',
            'value' => '44.83 kg',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '19',
            'specs_key' => 'Plovimo klasė',
            'value' => 'A',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '19',
            'specs_key' => 'Vandens sąnaudos ciklui',
            'value' => '9.5 L',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '19',
            'specs_key' => 'Valdymas',
            'value' => 'Elektroninis',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '19',
            'specs_key' => 'Valdymo skydelis',
            'value' => 'Ant briaunos',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '19',
            'specs_key' => 'Plovimo temperatūrų režimai',
            'value' => '6 vnt',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '19',
            'specs_key' => 'Plovimo programų skaičius',
            'value' => '8 vnt',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '19',
            'specs_key' => 'Plovimo pradžios atidėjimas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '19',
            'specs_key' => 'Programos',
            'value' => 'Auto 45-65°C, Eco 50°C, Valymas, Itin tylus, Intensyvi, Išankstinis skalavimas, GlassCare 40°',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '19',
            'specs_key' => 'Laikrodis',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '19',
            'specs_key' => 'Ekranas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '19',
            'specs_key' => 'LED Ekranas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '19',
            'specs_key' => 'Džiovinimo tipas',
            'value' => 'Zeolith®',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '19',
            'specs_key' => 'Vandens nuotėkio kontrolė',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '19',
            'specs_key' => 'Filtras',
            'value' => 'Savaime išsivalantis',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '19',
            'specs_key' => 'Pasibaigusios druskos indikacija',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '19',
            'specs_key' => 'Pasibaigusio blizgiklio indikacija',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '19',
            'specs_key' => 'Pajungimas prie karšto vandens',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '19',
            'specs_key' => 'Kita informacija',
            'value' => 'Akustinis signalas programos pabaigoje, TimeLight funkcija, Trečias krepšys, EcoSilence Drive',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '19',
            'specs_key' => 'Trečias stalčius',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '19',
            'specs_key' => 'Palaikomos technologijos',
            'value' => 'Aqua Stop, Aqua Sensor, TimeLight, Eco Silence Drive, 3 lygių Rackmatic, Dozavimo pagalbininkas, Stiklo apsaugos sistema, Pakrovimo jutiklis',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '19',
            'specs_key' => 'Specialios programos',
            'value' => 'Intensive Zone, My Favourite',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        // ********************Kaitlentė*****************************



        DB::table('specs')->insert([
            'products_id' => '20',
            'specs_key' => 'Paviršiaus danga',
            'value' => 'Stiklo keramika',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '20',
            'specs_key' => 'Montavimo tipas',
            'value' => 'Įmontuojamos',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '20',
            'specs_key' => 'Rėmelis',
            'value' => 'Ne',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '20',
            'specs_key' => 'Laikiklių tipas',
            'value' => 'Be laikiklių',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '20',
            'specs_key' => 'Kaitviečių skaičius',
            'value' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '20',
            'specs_key' => 'Paviršiaus danga',
            'value' => 'Stiklo keramika',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '20',
            'specs_key' => 'Galia',
            'value' => '480 W',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '20',
            'specs_key' => 'Paviršiaus valdymas',
            'value' => 'Sensorinis',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '20',
            'specs_key' => 'Aukštis',
            'value' => '21.1 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '20',
            'specs_key' => 'Plotis',
            'value' => '83 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '20',
            'specs_key' => 'Gylis',
            'value' => '51.5 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '20',
            'specs_key' => 'Likutinės šilumos indikatorius',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '20',
            'specs_key' => 'Apsaugos nuo vaikų užraktas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '20',
            'specs_key' => 'Automatinis išsijungimas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '21',
            'specs_key' => 'Paviršiaus danga',
            'value' => 'Stiklo keramika',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '21',
            'specs_key' => 'Montavimo tipas',
            'value' => 'Įmontuojamos',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '21',
            'specs_key' => 'Rėmelis',
            'value' => 'Ne',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '21',
            'specs_key' => 'Laikiklių tipas',
            'value' => 'Be laikiklių',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '21',
            'specs_key' => 'Kaitviečių skaičius',
            'value' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '21',
            'specs_key' => 'Paviršiaus danga',
            'value' => 'Stiklo keramika',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '21',
            'specs_key' => 'Galia',
            'value' => '480 W',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '21',
            'specs_key' => 'Paviršiaus valdymas',
            'value' => 'Sensorinis',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '21',
            'specs_key' => 'Aukštis',
            'value' => '21.1 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '21',
            'specs_key' => 'Plotis',
            'value' => '83 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '21',
            'specs_key' => 'Gylis',
            'value' => '51.5 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '21',
            'specs_key' => 'Likutinės šilumos indikatorius',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '21',
            'specs_key' => 'Apsaugos nuo vaikų užraktas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '21',
            'specs_key' => 'Automatinis išsijungimas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        // *************************Orkaitės***************



        DB::table('specs')->insert([
            'products_id' => '22',
            'specs_key' => 'Energijos klasė',
            'value' => 'A +',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '22',
            'specs_key' => 'Kiekvienos ertmės energijos vartojimo efektyvumo indeksas',
            'value' => '103',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '22',
            'specs_key' => 'Ertmių skaičius',
            'value' => '1 vnt',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '22',
            'specs_key' => 'Orkaitės tipas',
            'value' => 'Elektrinė',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '22',
            'specs_key' => 'Galia',
            'value' => '3650 W',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '22',
            'specs_key' => 'Aukštis',
            'value' => '59.5 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '22',
            'specs_key' => 'Plotis',
            'value' => '59.5 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '22',
            'specs_key' => 'Gylis',
            'value' => '59.5 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '22',
            'specs_key' => 'Svoris',
            'value' => '-',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '22',
            'specs_key' => 'Orkaitės tūris',
            'value' => '71 L',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '22',
            'specs_key' => 'Orkaitės valdymas',
            'value' => 'Elektroninis',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '22',
            'specs_key' => 'Laikmatis',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '22',
            'specs_key' => 'Orkaitės durų užraktas nuo vaikų',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '22',
            'specs_key' => 'Orkaitės durų stiklai',
            'value' => '2 vnt',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '22',
            'specs_key' => 'Orkaitės apšvietimas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '22',
            'specs_key' => 'Grilis',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '22',
            'specs_key' => 'Vidaus danga',
            'value' => 'Nenurodyta',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '22',
            'specs_key' => 'Teleskopiniai bėgeliai',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '22',
            'specs_key' => 'LCD ekranas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '22',
            'specs_key' => 'Kepimo skardos',
            'value' => '1 vnt',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '22',
            'specs_key' => 'Kepimo grotelės',
            'value' => '1 vnt',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '22',
            'specs_key' => 'Mėsos termometras',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '22',
            'specs_key' => 'Apatinis kaitinimas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '22',
            'specs_key' => 'Viršutinis ir apatinis kaitinimas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '22',
            'specs_key' => 'Viršutinis kaitinimas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '22',
            'specs_key' => 'Ventiliatorius',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '22',
            'specs_key' => 'Savaiminio išsivalymo funkcija',
            'value' => 'Ne',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '22',
            'specs_key' => 'Konvekcija',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '22',
            'specs_key' => 'Aušinimo ventiliatorius',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '22',
            'specs_key' => 'Maks. kaitinimo temperatūra (°C)',
            'value' => '250',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '22',
            'specs_key' => 'Gaminimo garuose funkcija',
            'value' => 'Ne',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '22',
            'specs_key' => 'Funkcijos',
            'value' => 'Kepimas žemoje temperatūroje, Apatinis šildytuvas + viršutinis šildytuvas, Apatinis šildymas, Grilis + ventiliatorius, Apatinis šildymas eko',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '22',
            'specs_key' => 'Priedai',
            'value' => '1 grotelės, 1 kepimo skarda',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '23',
            'specs_key' => 'Energijos klasė',
            'value' => 'A +',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '23',
            'specs_key' => 'Kiekvienos ertmės energijos vartojimo efektyvumo indeksas',
            'value' => '103',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '23',
            'specs_key' => 'Ertmių skaičius',
            'value' => '1 vnt',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '23',
            'specs_key' => 'Orkaitės tipas',
            'value' => 'Elektrinė',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '23',
            'specs_key' => 'Galia',
            'value' => '3650 W',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '23',
            'specs_key' => 'Aukštis',
            'value' => '59.5 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '23',
            'specs_key' => 'Plotis',
            'value' => '59.5 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '23',
            'specs_key' => 'Gylis',
            'value' => '59.5 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '23',
            'specs_key' => 'Svoris',
            'value' => '-',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '23',
            'specs_key' => 'Orkaitės tūris',
            'value' => '71 L',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '23',
            'specs_key' => 'Orkaitės valdymas',
            'value' => 'Elektroninis',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '23',
            'specs_key' => 'Laikmatis',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '23',
            'specs_key' => 'Orkaitės durų užraktas nuo vaikų',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '23',
            'specs_key' => 'Orkaitės durų stiklai',
            'value' => '2 vnt',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '23',
            'specs_key' => 'Orkaitės apšvietimas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '23',
            'specs_key' => 'Grilis',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '23',
            'specs_key' => 'Vidaus danga',
            'value' => 'Nenurodyta',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '23',
            'specs_key' => 'Teleskopiniai bėgeliai',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '23',
            'specs_key' => 'LCD ekranas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '23',
            'specs_key' => 'Kepimo skardos',
            'value' => '1 vnt',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '23',
            'specs_key' => 'Kepimo grotelės',
            'value' => '1 vnt',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '23',
            'specs_key' => 'Mėsos termometras',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '23',
            'specs_key' => 'Apatinis kaitinimas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '23',
            'specs_key' => 'Viršutinis ir apatinis kaitinimas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '23',
            'specs_key' => 'Viršutinis kaitinimas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '23',
            'specs_key' => 'Ventiliatorius',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '23',
            'specs_key' => 'Savaiminio išsivalymo funkcija',
            'value' => 'Ne',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '23',
            'specs_key' => 'Konvekcija',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '23',
            'specs_key' => 'Aušinimo ventiliatorius',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '23',
            'specs_key' => 'Maks. kaitinimo temperatūra (°C)',
            'value' => '250',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '23',
            'specs_key' => 'Gaminimo garuose funkcija',
            'value' => 'Ne',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '23',
            'specs_key' => 'Funkcijos',
            'value' => 'Kepimas žemoje temperatūroje, Apatinis šildytuvas + viršutinis šildytuvas, Apatinis šildymas, Grilis + ventiliatorius, Apatinis šildymas eko',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '23',
            'specs_key' => 'Priedai',
            'value' => '1 grotelės, 1 kepimo skarda',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '24',
            'specs_key' => 'Energijos klasė',
            'value' => 'A +',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '24',
            'specs_key' => 'Kiekvienos ertmės energijos vartojimo efektyvumo indeksas',
            'value' => '103',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '24',
            'specs_key' => 'Ertmių skaičius',
            'value' => '1 vnt',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '24',
            'specs_key' => 'Orkaitės tipas',
            'value' => 'Elektrinė',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '24',
            'specs_key' => 'Galia',
            'value' => '3650 W',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '24',
            'specs_key' => 'Aukštis',
            'value' => '59.5 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '24',
            'specs_key' => 'Plotis',
            'value' => '59.5 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '24',
            'specs_key' => 'Gylis',
            'value' => '59.5 cm',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '24',
            'specs_key' => 'Svoris',
            'value' => '-',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '24',
            'specs_key' => 'Orkaitės tūris',
            'value' => '71 L',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '24',
            'specs_key' => 'Orkaitės valdymas',
            'value' => 'Elektroninis',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '24',
            'specs_key' => 'Laikmatis',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '24',
            'specs_key' => 'Orkaitės durų užraktas nuo vaikų',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '24',
            'specs_key' => 'Orkaitės durų stiklai',
            'value' => '2 vnt',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '24',
            'specs_key' => 'Orkaitės apšvietimas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '24',
            'specs_key' => 'Grilis',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '24',
            'specs_key' => 'Vidaus danga',
            'value' => 'Nenurodyta',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '24',
            'specs_key' => 'Teleskopiniai bėgeliai',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '24',
            'specs_key' => 'LCD ekranas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '24',
            'specs_key' => 'Kepimo skardos',
            'value' => '1 vnt',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '24',
            'specs_key' => 'Kepimo grotelės',
            'value' => '1 vnt',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '24',
            'specs_key' => 'Mėsos termometras',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '24',
            'specs_key' => 'Apatinis kaitinimas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '24',
            'specs_key' => 'Viršutinis ir apatinis kaitinimas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '24',
            'specs_key' => 'Viršutinis kaitinimas',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '24',
            'specs_key' => 'Ventiliatorius',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '24',
            'specs_key' => 'Savaiminio išsivalymo funkcija',
            'value' => 'Ne',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '24',
            'specs_key' => 'Konvekcija',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '24',
            'specs_key' => 'Aušinimo ventiliatorius',
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '24',
            'specs_key' => 'Maks. kaitinimo temperatūra (°C)',
            'value' => '250',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '24',
            'specs_key' => 'Gaminimo garuose funkcija',
            'value' => 'Ne',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '24',
            'specs_key' => 'Funkcijos',
            'value' => 'Kepimas žemoje temperatūroje, Apatinis šildytuvas + viršutinis šildytuvas, Apatinis šildymas, Grilis + ventiliatorius, Apatinis šildymas eko',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '24',
            'specs_key' => 'Priedai',
            'value' => '1 grotelės, 1 kepimo skarda',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        // virduliai
        DB::table('specs')->insert([
            'products_id' => '25',
            'specs_key' => 'Korpusas',
            'value' => 'Nenurodyta',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '25',
            'specs_key' => 'Galia',
            'value' => '1200 W',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '25',
            'specs_key' => 'Talpa',
            'value' => '1 L',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '25',
            'specs_key' => 'Reguliuojama temperatūra',
            'value' => 'Ne',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '25',
            'specs_key' => 'Išmanus įrenginys',
            'value' => 'Ne',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
    }
}
