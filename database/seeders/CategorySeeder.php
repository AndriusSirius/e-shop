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
            'link' => 'smulki-buitine-technika',
            'parent_id' => '0',
            'nr' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Stambi buitinė technika',
            'link' => 'stambi-buitine-technika',
            'parent_id' => '0',
            'nr' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Namų technika',
            'link' => 'namu-technika',
            'parent_id' => '0',
            'nr' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Šaldytuvai',
            'link' => 'saldytuvai',
            'parent_id' => '2',
            'nr' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Orkaitės',
            'link' => 'orkaites',
            'parent_id' => '2',
            'nr' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Virduliai',
            'link' => 'virduliai',
            'parent_id' => '1',
            'nr' => '6',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Kavos virimo aparatai',
            'link' => 'kavos-virimo-aparatai',
            'parent_id' => '1',
            'nr' => '7',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Televizoriai',
            'link' => 'televizoriai',
            'parent_id' => '3',
            'nr' => '8',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Kaitlentės',
            'link' => 'kaitlentes',
            'parent_id' => '2',
            'nr' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Indaplovės',
            'link' => 'indaploves',
            'parent_id' => '2',
            'nr' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Mikrobangų krosnelės',
            'link' => 'orkaites',
            'parent_id' => '2',
            'nr' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
    }
}
