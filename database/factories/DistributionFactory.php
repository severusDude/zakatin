<?php

namespace Database\Factories;

use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Distribution>
 */
class DistributionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $currentYear = now()->year;

        return [
            'id' => fake()->uuid(),
            'person_id' => Person::factory(),
            'year' => $currentYear,
            'type' => 'beras', // Only 'beras' as per requirement
            'amount' => 0, // Will be calculated based on payments and category weight
            'status' => true, // All distributions are completed
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    public function forRecipient(Person $person): static
    {
        return $this->state(fn(array $attributes) => [
            'person_id' => $person->id,
        ]);
    }
}
