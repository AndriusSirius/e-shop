<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Smulki buitinė technika',
            'link' => 'Smulki-buitinė-technika',
            'parent_id' => '0',
            'nr' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Stambi buitinė technika',
            'link' => 'Stambi-buitinė-technika',
            'parent_id' => '0',
            'nr' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Namų technika',
            'link' => 'Namų-technika',
            'parent_id' => '0',
            'nr' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Šaldytuvas',
            'link' => 'Šaldytuvai',
            'parent_id' => '2',
            'nr' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Orkaitės',
            'link' => 'Orkaitės',
            'parent_id' => '2',
            'nr' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Virduliai',
            'link' => 'Virduliai',
            'parent_id' => '1',
            'nr' => '6',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Kavos virimo aparatai',
            'link' => 'Kavos-virimo-aparatai',
            'parent_id' => '1',
            'nr' => '7',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Televizoriai',
            'link' => 'Televizoriai',
            'parent_id' => '3',
            'nr' => '8',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
    }
}
