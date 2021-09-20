<?php

namespace Modules\Product\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Product\Entities\CategoryProduct;

class CategoryProductDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        CategoryProduct::create([
            'name' => 'Komputer',
        ]);
        CategoryProduct::create([
            'name' => 'Laptop',
        ]);
        CategoryProduct::create([
            'name' => 'Printer',
        ]);
        CategoryProduct::create([
            'name' => 'Aksesioris',
        ]);
    }
}
