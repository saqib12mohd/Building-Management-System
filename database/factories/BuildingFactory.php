<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Building>
 */
class BuildingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'name'              => $this->faker->company(),
            'btype'             => $this->faker->randomElement(['Commercial', 'Residential', 'Mixed']),
            'country'           => $this->faker->country(),
            'city'              => $this->faker->city(),
            'state'             => $this->faker->state(),
            'street'            => $this->faker->streetAddress(),
            'securityname'      => $this->faker->name(),
            'securitymobile'    => $this->faker->phoneNumber(),
            'nooflift'          => $this->faker->numberBetween(0, 12),
            'activatedon'       => $this->faker->date(),
            'deactivatedon'     => $this->faker->optional()->date(),
        ];
    }
}
