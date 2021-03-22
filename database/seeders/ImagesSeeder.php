<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'products_id' => 1,
            'path'=> 'images/saldytuvas1.png'
        ]);
        DB::table('images')->insert([
            'products_id' => 2,
            'path'=> 'images/saldytuvas1.png'
        ]);
        DB::table('images')->insert([
            'products_id' => 3,
            'path'=> 'images/saldytuvas1.png'
        ]);
        DB::table('images')->insert([
            'products_id' => 1,
            'path'=> 'images/saldytuvas1.png'
        ]);
        DB::table('images')->insert([
            'products_id' => 1,
            'path'=> 'images/saldytuvas1.png'
        ]);
        DB::table('images')->insert([
            'products_id' => 2,
            'path'=> 'images/saldytuvas1.png'
        ]);
        DB::table('images')->insert([
            'products_id' => 2,
            'path'=> 'images/saldytuvas1.png'
        ]);
           DB::table('images')->insert([
            'products_id' => 4,
            'path'=> 'images/skalbenke.jpg'
        ]);
           DB::table('images')->insert([
            'products_id' => 5,
            'path'=> 'images/skalbimomasinyte.jpg'
        ]);
           DB::table('images')->insert([
            'products_id' => 6,
            'path'=> 'images/skalbimomasinyte.jpg'
        ]);
           DB::table('images')->insert([
            'products_id' => 7,
            'path'=> 'images/skalbenke.jpg'
        ]);
           DB::table('images')->insert([
            'products_id' => 8,
            'path'=> 'images/skalbenke.jpg'
        ]);
           DB::table('images')->insert([
            'products_id' => 9,
            'path'=> 'images/skalbimomasinyte.jpg'
        ]);
           DB::table('images')->insert([
            'products_id' => 10,
            'path'=> 'images/kavosaparatas.png'
        ]);

    }
}
