<?php

namespace Database\Factories;

use App\Models\Anggota;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Anggota>
 */
class AnggotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'nia' => fake()->unique()->numerify('COS.UNITAMA.###.###.##'),
            'status' => fake()->randomElement(['Anggota Kehormatan', 'Anggota Tetap', 'Anggota Muda']),
            'nama_unix' => fake()->userName(),
            'alamat' => fake()->address(),
            'no_telp' => fake()->phoneNumber(),
        ];
    }
}
