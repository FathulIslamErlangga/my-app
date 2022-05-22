<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'description' => 'due for overhaul',
            'deadline' => '2025-05-24',
            'airplane_id' => 1,
            'item_id' => 1
        ]);
        Service::create([
            'description' => 'due for overhaul',
            'deadline' => '2025-10-24',
            'airplane_id' => 2,
            'item_id' => 2
        ]);
    }
}
