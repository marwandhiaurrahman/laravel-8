<?php

namespace Modules\Product\Database\Seeders;

use Faker\Factory;
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

        $faker = Factory::create();

        // $this->call("OthersTableSeeder");
        Product::create([
            'name' => 'Komputer Asus Vivobook 14',
            'review' => $faker->text,
            'stock' => '10',
            'price' => '5000000',
            'description' => $faker->text,
            'status' => 'true',
        ])->category()->attach(1);
        Product::create([
            'name' => 'Laptop HP Ryzen 5',
            'review' => $faker->text,
            'stock' => '10',
            'price' => '5500000',
            'description' => $faker->text,
            'status' => 'true',
        ])->category()->attach(2);
        Product::create([
            'name' => 'Mouse Logitecech 12X',
            'review' => $faker->text,
            'stock' => '15',
            'price' => '100000',
            'description' => $faker->text,
            'status' => 'true',
        ])->category()->attach(4);
        Product::create([
            'name' => 'Printer Epson L213',
            'review' => $faker->text,
            'stock' => '10',
            'price' => '3000000',
            'description' => $faker->text,
            'status' => 'true',
        ])->category()->attach(3);
    }
}
