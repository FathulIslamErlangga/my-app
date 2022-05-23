<?php

namespace Database\Seeders;

use App\Models\Airplane;
use Illuminate\Database\Seeder;

class AirplaneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Airplane::create([
            'serialnumber' => 'M11460',
            'partnumber' => 'D30664-709',
            'slug' => 'Airbus',
            'datemanufacture' => 'JUN-2015',
            'name' => 'PK-GME',
            'category_id' => 1,
            'service_id' => 1
        ]);
        Airplane::create([
            'serialnumber' => 'M11461',
            'partnumber' => 'D30665-709',
            'slug' => 'Airbus-1',
            'datemanufacture' => 'APR-2015',
            'name' => 'PK-GMJ',
            'category_id' => 2,
            'service_id' => 2,
        ]);
    }
}
