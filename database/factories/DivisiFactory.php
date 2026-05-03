<?php

namespace Database\Factories;

use App\Models\Divisi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Divisi>
 */
class DivisiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_divisi' => fake()->randomElement([
                'Programming',
                'Desain Komunikasi Visual', 
                'Networking',
                ]),
            'deskripsi' => fake()->sentence(),
            'ketua_divisi' => fake()->name(),
        ];
    }
}
