<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'type' => 'A320'
        ]);
        Category::create([
            'type' => 'A330'
        ]);
        Category::create([
            'type' => 'B737'
        ]);
        Category::create([
            'type' => 'B777'
        ]);
    }
}
