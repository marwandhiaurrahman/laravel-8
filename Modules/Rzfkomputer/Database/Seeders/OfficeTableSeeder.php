<?php

namespace Modules\Rzfkomputer\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Rzfkomputer\Entities\Office;

class OfficeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Office::create([
            'name' => 'RZF Komputer',
            'address' => 'RZF Komputer',
            'facebook' => 'RZF Komputer',
            'instagram' => 'RZF Komputer',
            'youtube' => 'RZF Komputer',
        ]);
    }
}
