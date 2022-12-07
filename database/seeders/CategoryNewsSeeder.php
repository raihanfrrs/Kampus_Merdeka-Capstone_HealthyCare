<?php

namespace Database\Seeders;

use App\Models\CategoryNews;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            [
                'category' => 'Kesehatan'
            ],
            [
                'category' => 'Olahraga'
            ],
            [
                'category' => 'Covid-19'
            ]
        ];

        foreach ($category as $key => $value) {
            CategoryNews::create($value);
        }
    }
}
