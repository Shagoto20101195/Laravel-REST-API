<?php

namespace Database\Factories;
use App\Models\Customer;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Receipt>
 */
class ReceiptFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = $this->faker->randomElement(['paid', 'pending', 'empty']);
        $paid_at = $status === 'paid' ? $this->faker->dateTimeBetween('now', '+1 year') : NULL;
        
        return [
            'customer_id' => Customer::factory(),
            'amount' => $this->faker->randomFloat(2, 0, 1000),
            'status' => $status,
            'due_at' => $this->faker->dateTimeBetween('now', '+1 year'),
            'paid_at' => $paid_at
        ];
    }
}
