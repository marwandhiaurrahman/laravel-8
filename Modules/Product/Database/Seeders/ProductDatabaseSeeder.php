<?php

namespace Modules\Product\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Product\Entities\Product;

class ProductDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");
        Product::create([
            'name' => 'Komputer Asus Vivobook 14',
            'description' => 'Komputer Asus Vivobook 14',
            'stock' => '10',
            'price' => '5000000',
            'status' => 'true',
        ])->category()->attach(1);
        Product::create([
            'name' => 'Laptop HP Ryzen 5',
            'description' => 'Laptop HP Ryzen 5',
            'stock' => '10',
            'price' => '5500000',
            'status' => 'true',
        ])->category()->attach(2);
        Product::create([
            'name' => 'Mouse Logitecech 12X',
            'description' => 'Mouse Logitecech 12X',
            'stock' => '15',
            'price' => '100000',
            'status' => 'true',
        ])->category()->attach(4);
        Product::create([
            'name' => 'Printer Epson L213',
            'description' => 'Printer Epson L213',
            'stock' => '10',
            'price' => '3000000',
            'status' => 'true',
        ])->category()->attach(3);
    }
}
