<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use ProductCategory;
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
            Model_Has_Permissions::class,
            Model_Has_Roles::class,
            UserSeeder::class,
            productsSeeder::class,
            discountSeeder::class,
            product_categoriesSeeder::class,
            ImagesSeeder::class,
            Specs::class
        ]);
    }
}
