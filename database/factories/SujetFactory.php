<?php

namespace Database\Factories;

use App\Models\Sujet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sujet>
 */
class SujetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Sujet::class;

    public function definition()
    {
        return [
            'question' => $this->faker->sentences(20, true),
        ];
    }
}
