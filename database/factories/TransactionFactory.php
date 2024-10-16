<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Transaction;


class TransactionFactory extends Factory
{
    protected $model = Transaction::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'transaction_title' => fake()->text(20),
            'description' => fake()->sentence(2),
            'status' => fake()->randomElement(['successful','declined']),
            'total_amount' => fake()->randomNumber(),
            'transaction_number' => fake()->unique()->randomNumber(),
        ];
    }
}
