<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $patients = [
            [
                'name' => 'Fauzi Rahman',
                'email' => 'fauzirahman76@gmail.com',
                'phone' => '0823456765324',
                'user_id' => 2
            ]
        ];

        foreach($patients as $key => $value){
            Patient::create($value);
        }
    }
}
