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
            'path'=> 'images/saldytuvas1.jpg'
        ]);
        DB::table('images')->insert([
            'products_id' => 2,
            'path'=> 'images/siurblys.jpg'
        ]);
        DB::table('images')->insert([
            'products_id' => 3,
            'path'=> 'images/virdulys.jpg'
        ]);
    }
}
