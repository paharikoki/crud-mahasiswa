<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
            ['nim'=>'22081000001','no_hp'=>null,'prodi_id'=>1,'user_id'=>1,'alamat'=>null,'jenis_kelamin'=>1,'status'=>1,'created_at' => now(), 'updated_at' => now()],
            ['nim'=>'22081000002','no_hp'=>null,'prodi_id'=>1,'user_id'=>2,'alamat'=>null,'jenis_kelamin'=>1,'status'=>1,'created_at' => now(), 'updated_at' => now()],
            ['nim'=>'22081000003','no_hp'=>null,'prodi_id'=>1,'user_id'=>3,'alamat'=>null,'jenis_kelamin'=>1,'status'=>1,'created_at' => now(), 'updated_at' => now()],
            ['nim'=>'22081000004','no_hp'=>null,'prodi_id'=>1,'user_id'=>4,'alamat'=>null,'jenis_kelamin'=>1,'status'=>1,'created_at' => now(), 'updated_at' => now()],
            ['nim'=>'22081000005','no_hp'=>null,'prodi_id'=>1,'user_id'=>5,'alamat'=>null,'jenis_kelamin'=>1,'status'=>1,'created_at' => now(), 'updated_at' => now()],
            ['nim'=>'22081000006','no_hp'=>null,'prodi_id'=>1,'user_id'=>6,'alamat'=>null,'jenis_kelamin'=>1,'status'=>1,'created_at' => now(), 'updated_at' => now()],
            ['nim'=>'22081000007','no_hp'=>null,'prodi_id'=>1,'user_id'=>7,'alamat'=>null,'jenis_kelamin'=>1,'status'=>1,'created_at' => now(), 'updated_at' => now()],
            ['nim'=>'22081000008','no_hp'=>null,'prodi_id'=>1,'user_id'=>8,'alamat'=>null,'jenis_kelamin'=>0,'status'=>1,'created_at' => now(), 'updated_at' => now()],
            ['nim'=>'22081000009','no_hp'=>null,'prodi_id'=>1,'user_id'=>9,'alamat'=>null,'jenis_kelamin'=>0,'status'=>1,'created_at' => now(), 'updated_at' => now()],
            ['nim'=>'22081000010','no_hp'=>null,'prodi_id'=>1,'user_id'=>10,'alamat'=>null,'jenis_kelamin'=>1,'status'=>1,'created_at' => now(), 'updated_at' => now()],
            ['nim'=>'22081000011','no_hp'=>null,'prodi_id'=>1,'user_id'=>11,'alamat'=>null,'jenis_kelamin'=>1,'status'=>1,'created_at' => now(), 'updated_at' => now()],
            ['nim'=>'22081000012','no_hp'=>null,'prodi_id'=>1,'user_id'=>12,'alamat'=>null,'jenis_kelamin'=>0,'status'=>1,'created_at' => now(), 'updated_at' => now()],
            ['nim'=>'22081000013','no_hp'=>null,'prodi_id'=>1,'user_id'=>13,'alamat'=>null,'jenis_kelamin'=>1,'status'=>1,'created_at' => now(), 'updated_at' => now()],
            ['nim'=>'22081000014','no_hp'=>null,'prodi_id'=>1,'user_id'=>14,'alamat'=>null,'jenis_kelamin'=>1,'status'=>1,'created_at' => now(), 'updated_at' => now()],
            ['nim'=>'22081000015','no_hp'=>null,'prodi_id'=>1,'user_id'=>15,'alamat'=>null,'jenis_kelamin'=>1,'status'=>1,'created_at' => now(), 'updated_at' => now()],]
        );
    }
}