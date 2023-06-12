<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fakultas')->insert([
            ['name'=>'Fakultas Teknik','created_at' => now(), 'updated_at' => now()],
            ['name'=>'Fakultas Teknologi Informasi','created_at' => now(), 'updated_at' => now()],
            ['name'=>'Fakultas Ekonomi dan Bisnis','created_at' => now(), 'updated_at' => now()],
            ['name'=>'Fakultas Ilmu Sosial dan Ilmu Politik','created_at' => now(), 'updated_at' => now()],
            ['name'=>'Fakultas Kedokteran','created_at' => now(), 'updated_at' => now()],
            ['name'=>'Fakultas Hukum','created_at' => now(), 'updated_at' => now()],]
        );
    }
}