<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user = DB::table('users')->insert([
            'name' => 'admin',
            'Lastname' =>'admin',
            'email' => 'admin@household.lt',
            'password' => Hash::make('r%![HBr9p:__.8c&x+..7v{u'),
            'country' => 'Lietuva',
            'city' => 'Klaipeda',
            'address'=> 'Klaipedos g. 5',
            'phone_number' => 862124276,
            'post_code' => 'LT45572',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i')
        ]);


        DB::table('users')->insert([
            'name' => 'Aleksandras',
            'Lastname' =>'Barnys',
            'email' => 'BarAleksandras@gmail.com',
            'password' => Hash::make('123456789'),
            'country' => 'Lietuva',
            'city' => 'Vilnius',
            'address'=> 'Gelezinio vilko g. 21',
            'phone_number' => 862124276,
            'post_code' => 'LT45572',
            'created_at' => Carbon::now()->format('Y-m-d H:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i')
        ]);

    }
}
