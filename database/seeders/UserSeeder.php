<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'raihan123',
                'password' => bcrypt('test123'),
                'level' => 'administrator'
            ],
            [
                'username' => 'fauzi123',
                'password' => bcrypt('test123'),
                'level' => 'patient'
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
