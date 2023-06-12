<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nim = 22081000000;
        $id=1;
        $gender = fake()->randomElement(['laki-laki', 'perempuan']);
        return  [
            'nim' => ++$nim,
            'alamat' => fake('id_ID')->address(),
            'no_hp' => fake('id_ID')->phoneNumber(),
            'prodi_id' => 1,
            'jenjang_id' => 1,
            'user_id' => ++$id,
            'jenis_kelamin' => $gender,
            'status' => 'aktif',
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
