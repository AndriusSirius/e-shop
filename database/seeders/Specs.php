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
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Ilgis',
            'value' => '542 cm',
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
            'specs_key' => 'Šaldiklio valdymas' ,
            'value' => 'Sensorinis',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Greitas užšaldymas' ,
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Ledo gaminimo įranga' ,
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Padėklas ledukams' ,
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Ledo gaminimo įranga' ,
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Keičiama durų kryptis' ,
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Lentynų skačius' ,
            'value' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Žemos temperatūros kamera' ,
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Palaikomos technologijos' ,
            'value' => 'Šaldytuvo antibakterinis filtras, Fast Freeze, No Frost',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '1',
            'specs_key' => 'Išmanus įrenginys' ,
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
            'specs_key' => 'Šaldiklio valdymas' ,
            'value' => 'Sensorinis',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Greitas užšaldymas' ,
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Ledo gaminimo įranga' ,
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Padėklas ledukams' ,
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Ledo gaminimo įranga' ,
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Keičiama durų kryptis' ,
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Lentynų skačius' ,
            'value' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Žemos temperatūros kamera' ,
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Palaikomos technologijos' ,
            'value' => 'Šaldytuvo antibakterinis filtras, Fast Freeze, No Frost',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '2',
            'specs_key' => 'Išmanus įrenginys' ,
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
            'specs_key' => 'Šaldiklio valdymas' ,
            'value' => 'Sensorinis',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Greitas užšaldymas' ,
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Ledo gaminimo įranga' ,
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Padėklas ledukams' ,
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Ledo gaminimo įranga' ,
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Keičiama durų kryptis' ,
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Lentynų skačius' ,
            'value' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Žemos temperatūros kamera' ,
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Palaikomos technologijos' ,
            'value' => 'Šaldytuvo antibakterinis filtras, Fast Freeze, No Frost',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('specs')->insert([
            'products_id' => '3',
            'specs_key' => 'Išmanus įrenginys' ,
            'value' => 'Taip',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
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
            'value' => "Laisvai statomas ",
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
    }
}
