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
            'path'=> 'storage/produktai/saldytuvas1.png'
        ]);
        DB::table('images')->insert([
            'products_id' => 2,
            'path'=> 'storage/produktai/saldytuvas1.png'
        ]);
        DB::table('images')->insert([
            'products_id' => 3,
            'path'=> 'storage/produktai/saldytuvas1.png'
        ]);
        DB::table('images')->insert([
            'products_id' => 1,
            'path'=> 'storage/produktai/saldytuvas1.png'
        ]);
        DB::table('images')->insert([
            'products_id' => 1,
            'path'=> 'storage/produktai/saldytuvas1.png'
        ]);
        DB::table('images')->insert([
            'products_id' => 2,
            'path'=> 'storage/produktai/saldytuvas1.png'
        ]);
        DB::table('images')->insert([
            'products_id' => 2,
            'path'=> 'storage/produktai/saldytuvas1.png'
        ]);
           DB::table('images')->insert([
            'products_id' => 4,
            'path'=> 'storage/produktai/skalbenke.jpg'
        ]);
           DB::table('images')->insert([
            'products_id' => 5,
            'path'=> 'storage/produktai/skalbimomasinyte.jpg'
        ]);
           DB::table('images')->insert([
            'products_id' => 6,
            'path'=> 'storage/produktai/skalbimomasinyte.jpg'
        ]);
           DB::table('images')->insert([
            'products_id' => 7,
            'path'=> 'storage/produktai/skalbenke.jpg'
        ]);
           DB::table('images')->insert([
            'products_id' => 8,
            'path'=> 'storage/produktai/skalbenke.jpg'
        ]);
           DB::table('images')->insert([
            'products_id' => 9,
            'path'=> 'storage/produktai/skalbimomasinyte.jpg'
        ]);
           DB::table('images')->insert([
            'products_id' => 10,
            'path'=> 'storage/produktai/kavosaparatas.png'
        ]);
        DB::table('images')->insert([
            'products_id' => 11,
            'path'=> 'storage/produktai/tv1.jpg'
        ]);
        DB::table('images')->insert([
            'products_id' => 12,
            'path'=> 'storage/produktai/tv2.jpg'
        ]);

    }
}
