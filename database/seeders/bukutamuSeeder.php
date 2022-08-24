<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\bukutamu;

class bukutamuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        bukutamu::create ([
            'nama' => 'Mus',
            'email' => 'mus123@gmail.com',
            'komentar' => 'oke',
            'waktu' => '2022-06-10 14:24:12',
        ]);
        
        bukutamu::firstOrCreate (
            ['nama' => 'Ubur'],
            ['email' => 'ubur123@gmail.com'],
            ['komentar' => 'sip'],
            ['waktu' => '2022-06-10 14:24:12']
        );
        

    }
}
