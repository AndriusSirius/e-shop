<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class Model_Has_Roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('model_has_roles')->insert([
            'role_id' => '1',
            'model_type' => 'nezinau ka cia rasyti',
            'model_id' => '1',
        ]);
        DB::table('model_has_roles')->insert([
            'role_id' => '2',
            'model_type' => 'nezinau ka cia rasyti',
            'model_id' => '2',
        ]);
    }
}
