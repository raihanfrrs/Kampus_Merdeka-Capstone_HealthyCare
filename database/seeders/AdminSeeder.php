<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            [
                'name' => 'Raihan Farras',
                'email' => 'rehanfarras76@gmail.com',
                'phone' => '081333903187',
                'user_id' => 1
            ]
        ];

        foreach ($admins as $key => $value) {
            Admin::create($value);
        }
    }
}
