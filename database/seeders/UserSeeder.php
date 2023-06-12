<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['name'=>'Reza Fadillah','email'=>'22081000001@student.unmer.ac.id','password'=>bcrypt('unmer2022'),'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Rizalludin Fakhriansyah Nugroho','email'=>'22081000002@student.unmer.ac.id','password'=>bcrypt('unmer2022'),'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Arsyad Widia Tirta Arakian','email'=>'22081000003@student.unmer.ac.id','password'=>bcrypt('unmer2022'),'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Riski Dwi Prakoso','email'=>'22081000004@student.unmer.ac.id','password'=>bcrypt('unmer2022'),'created_at' => now(), 'updated_at' => now()],
            ['name'=>'seseorang','email'=>'22081000005@student.unmer.ac.id','password'=>bcrypt('unmer2022'),'created_at' => now(), 'updated_at' => now()],
            ['name'=>'seseorang','email'=>'22081000006@student.unmer.ac.id','password'=>bcrypt('unmer2022'),'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Ahmad Alan Lestari','email'=>'22081000007@student.unmer.ac.id','password'=>bcrypt('unmer2022'),'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Miftahul Adnin Adiwati','email'=>'22081000008@student.unmer.ac.id','password'=>bcrypt('unmer2022'),'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Arina Hidayah','email'=>'22081000009@student.unmer.ac.id','password'=>bcrypt('unmer2022'),'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Bayu Krisnamukti','email'=>'22081000010@student.unmer.ac.id','password'=>bcrypt('unmer2022'),'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Darmawan Agung D.P ','email'=>'22081000011@student.unmer.ac.id','password'=>bcrypt('unmer2022'),'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Nadita Prisanta','email'=>'22081000012@student.unmer.ac.id','password'=>bcrypt('unmer2022'),'created_at' => now(), 'updated_at' => now()],
            ['name'=>'seseorang','email'=>'22081000013@student.unmer.ac.id','password'=>bcrypt('unmer2022'),'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Taufanrizqi Andika','email'=>'22081000014@student.unmer.ac.id','password'=>bcrypt('unmer2022'),'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Muh Azril Hariansyah','email'=>'22081000015@student.unmer.ac.id','password'=>bcrypt('unmer2022'),'created_at' => now(), 'updated_at' => now()],]
        );
    }
}