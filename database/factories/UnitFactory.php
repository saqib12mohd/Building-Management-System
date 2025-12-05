<?php

namespace Database\Factories;

use App\Models\Building;
use App\Models\Layout;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Unit>
 */
class UnitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'name'        => $this->faker->bothify('Room-##'),
            'sqt'         => $this->faker->randomFloat(2, 100, 2000),
            'status'      => $this->faker->randomElement([0, 1]),   // 0 = inactive, 1 = active

            'layout_id'   => Layout::factory(),   
            'building_id' => Building::factory(), 
        ];
    }
}
