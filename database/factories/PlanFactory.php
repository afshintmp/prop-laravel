<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plan>
 */
class PlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'نام پلن',
            'step' => '2',
            'daily_draw_down' => '5',
            'max_draw_down' => '5',
            'platforms' => 'mt4-mt5',
            'leverage' => '500',
            'account' => '50000',
            'price' => '150',
            'description' => 'این یک متن تستی است',
        ];
    }
}
