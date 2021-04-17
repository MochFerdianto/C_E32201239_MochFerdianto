<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke tabel pegawai
       DB::table('detail_profile')->insert([
            'address' => 'pasuruan',
            'nomor_tlp' => '0823-4861-8122',
            'ttl' => '2001-01-31',
            'foto' => 'picture.png',
        ]);
    }
}
