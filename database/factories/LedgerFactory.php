<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ledger>
 */
class LedgerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'name'       => $this->faker->name(),
            'phone'      => $this->faker->phoneNumber(),
            'email'      => $this->faker->unique()->safeEmail(),
            'address'    => $this->faker->address(),
            'occupation' => $this->faker->jobTitle(),
            'group'      => $this->faker->word(),
            'dob'        => $this->faker->date(),
            'country'    => $this->faker->country(),
            'city'       => $this->faker->city(),
            'state'      => $this->faker->state(),
            'zip'        => $this->faker->postcode(),
            'street'     => $this->faker->streetAddress(),
            'idname'     => $this->faker->randomElement(['Aadhar', 'PAN', 'Passport', 'Driving License']),
            'idno'       => $this->faker->numerify('##########'),
        ];
    }
}
