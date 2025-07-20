<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::create([
            'name' => 'Front End',
            'slug' => 'front-end',
            'color' => 'bg-red-100'
        ]);
        Category::create([
            'name' => 'Back End',
            'slug' => 'back-end',
            'color' => 'bg-green-100'
        ]);
        Category::create([
            'name' => 'UI UX',
            'slug' => 'ui-ux',
            'color' => 'bg-blue-100'
        ]);
    }
}
