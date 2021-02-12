<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;


class CategoryInitialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'pavadinimas' => "Desertai",
            'nuoroda' => 'desertai',
            'nr' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('categories')->insert([
            'pavadinimas' => "Sriubos",
            'nuoroda' => 'sriubos',
            'nr' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
//        DB::table('categories')->insert([
//            'pavadinimas' => "Karšti patiekalai",
//            'nuoroda' => 'karsti',
//            'nr' => 3,
//            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
//            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//        ]);

        $category = new Category();
        $category->pavadinimas = "Kepsniai";
        $category->nuoroda = "kepsniai";
        $category->nr = 3;
        $category->save();


    }
}
