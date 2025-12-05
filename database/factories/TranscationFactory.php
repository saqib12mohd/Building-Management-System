<?php

namespace Database\Factories;

use App\Models\Ledger;
use App\Models\Unit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transcation>
 */
class TranscationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'contractdate'      => $this->faker->date(),
            'name'              => $this->faker->words(2, true),
            'unit_id'           => Unit::factory(),
            'reference'         => $this->faker->uuid(),
            'ledger_id'         => Ledger::factory(),
            'agent_id'          => Ledger::factory(),
            'leasemonths'       => $this->faker->numberBetween(1, 60),
            'freemonths'        => $this->faker->numberBetween(0, 12),
            'startdate'         => $this->faker->date(),
            'expdate'           => $this->faker->date(),
            'enddate'           => $this->faker->date(),
            'rentpermonthamt'   => $this->faker->numberBetween(1000, 20000),
            'totalrentamt'      => $this->faker->numberBetween(10000, 200000),
            'depositamt'        => $this->faker->numberBetween(1000, 50000),
            'bankcharge'        => $this->faker->numberBetween(10, 500),
            'installment'       => $this->faker->numberBetween(1, 24),
            'salespost'         => $this->faker->boolean(),
            'receiptpost'       => $this->faker->boolean(),
            'refundrentamt'     => $this->faker->numberBetween(0, 10000),
            'refunddepositamt'  => $this->faker->numberBetween(0, 50000),
            'ptype'             => $this->faker->randomElement(['Cash', 'Cheque', 'Online']),
            'paydate'           => $this->faker->date(),
            'pmode'             =>
                $this->faker->randomElement(['Bank', 'UPI', 'Card', 'Cash']),
            'pymtcollectedby'   => $this->faker->name(),
            'Pymtdocnumber'     => $this->faker->uuid(),
            'attachment' => [
                'url'      => $this->faker->imageUrl(),
                'filename' => $this->faker->word() . '.jpg'
            ],

        ];
    }
}
