<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Product\Database\Seeders\CategoryProductDatabaseSeeder;
use Modules\Product\Database\Seeders\ProductDatabaseSeeder;
use Modules\Rzfkomputer\Database\Seeders\OfficeTableSeeder;
use Modules\User\Database\Seeders\UserDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserDatabaseSeeder::class,
            CategoryProductDatabaseSeeder::class,
            ProductDatabaseSeeder::class,
            OfficeTableSeeder::class,
        ]);
    }
}
