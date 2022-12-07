<?php

namespace Database\Seeders;

use App\Models\CategoryDisease;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryDiseaseSeeder extends Seeder
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
                'category' => 'Pernafasan'
            ],
            [
                'category' => 'Pencernaan'
            ],
            [
                'category' => 'Persendian'
            ]
        ];

        foreach ($category as $key => $value) {
            CategoryDisease::create($value);
        }
    }
}
