<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expediente>
 */
class ExpedienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'numero_expediente' => $this->faker->unique()->randomNumber(5),
            'asunto' => $this->faker->sentence(),
            'fecha_inicio' => $this->faker->date(),
            'id_estatus' => $this->faker->randomElement([1, 2]),
            'id_usuario_regstra' => $this->faker->randomElement([1, 2]),
        ];
    }
}
