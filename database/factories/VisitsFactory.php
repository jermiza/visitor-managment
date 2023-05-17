<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Visit>
 */
class VisitsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'visitor_id' => function () {
                return \App\Models\Visitors::factory()->create()->id;
            },
            'result' => $this->faker->numberBetween(0, 100),
            'date' => $this->faker->date(),
        ];
    }
}
