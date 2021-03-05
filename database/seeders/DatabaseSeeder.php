<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Prophecy\Call\Call;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorySeeder::class,
            RolesSeeder::class,
            PermissionsSeeder::class,
            Role_Has_Permissions::class,
            Model_Has_Permissions::class,
            Model_Has_Roles::class,
             UserSeeder::class,
            productsSeeder::class,
            discountSeeder::class,

        ]);
    }
}
