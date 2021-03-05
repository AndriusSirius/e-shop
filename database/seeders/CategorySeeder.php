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
            'parent_id' => '0',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Stambi buitinė technika',
            'parent_id' => '0',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Namų technika',
            'parent_id' => '0',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Šaldytuvas',
            'parent_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Orkaitė',
            'parent_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Virduliai',
            'parent_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Kavos virimo aparatai',
            'parent_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
        DB::table('categories')->insert([
            'name' => 'Televizoriai',
            'parent_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i'),
        ]);
    }
}
