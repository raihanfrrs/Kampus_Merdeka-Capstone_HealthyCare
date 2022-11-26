<?php

namespace Database\Seeders;

use App\Models\Pasien;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pasiens = [
            [
                'name' => 'Fauzi Rahman',
                'email' => 'fauzirahman76@gmail.com',
                'phone' => '0823456765324',
                'user_id' => 2
            ]
        ];

        foreach($pasiens as $key => $value){
            Pasien::create($value);
        }
    }
}
