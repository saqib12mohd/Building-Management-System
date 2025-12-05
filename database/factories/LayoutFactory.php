<?php

namespace Database\Factories;

use App\Models\Building;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Layout>
 */
class LayoutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'name'       => $this->faker->words(2, true),
            'type'       => $this->faker->randomElement(['1BHK', '2BHK', '3BHK', 'Studio', null]),
            'sqt'        => $this->faker->numberBetween(400, 2000) . ' Sqft',
            'attached'   => $this->faker->boolean(),
            'view'       => $this->faker->randomElement(['Sea', 'City', 'Park', 'Street', null]),
            'floorplan'  => $this->faker->imageUrl(),   // or null
             'building_id' => Building::factory(),   // ✅ FIX
        ];
    }
}
