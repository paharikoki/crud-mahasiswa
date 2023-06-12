<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prodi')->insert([
            ['name'=>'Sistem Informasi','fakultas_id'=>2,'jenjang_id'=>1,'kode'=>'081','created_at' => now(), 'updated_at' => now()],
            ['name'=>'Sistem Informasi','fakultas_id'=>2,'jenjang_id'=>3,'kode'=>'083','created_at' => now(), 'updated_at' => now()],
            ['name'=>'Teknik Sipil','fakultas_id'=>1,'jenjang_id'=>3,'kode'=>rand(000,999),'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Arsitektur','fakultas_id'=>1,'jenjang_id'=>3,'kode'=>rand(000,999),'created_at' => now(), 'updated_at' => now()],
            ]
        );
    }
}