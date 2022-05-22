<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create([
            'name' => 'O-Ring',
            'kode' => 'B14056-916',
            'qty' => '1',
            'airplane_id' => 1
        ]);
        Item::create([
            'name' => 'O-Ring',
            'kode' => 'B14056-912',
            'qty' => '1',
            'airplane_id' => 2
        ]);
    }
}
