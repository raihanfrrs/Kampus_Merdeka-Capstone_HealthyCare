<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Admin;
use App\Models\Patient;
use App\Models\CategoryNews;
use App\Models\CategoryDisease;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
                'username' => 'raihan123',
                'password' => bcrypt('test123'),
                'level' => 'administrator'
        ]);

        User::create([
            'username' => 'fauzi123',
            'password' => bcrypt('test123'),
            'level' => 'patient'
        ]);

        Admin::create([
            'name' => 'Raihan Farras',
            'email' => 'rehanfarras76@gmail.com',
            'phone' => '081333903187',
            'user_id' => 1
        ]);

        Patient::create([
            'name' => 'Fauzi Rahman',
            'email' => 'fauzirahman76@gmail.com',
            'phone' => '0823456765324',
            'user_id' => 2
        ]);

        CategoryNews::create([
            'category' => 'Kesehatan'
        ]);

        CategoryNews::create([
            'category' => 'Olahraga'
        ]);

        CategoryNews::create([
            'category' => 'Covid-19'
        ]);

        CategoryDisease::create([
            'category' => 'Pernafasan'
        ]);

        CategoryDisease::create([
            'category' => 'Pencernaan'
        ]);

        CategoryDisease::create([
            'category' => 'Persendian'
        ]);
    }
}
