<?php

namespace Database\Factories;

use App\Models\Person;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Person::class;

    public function definition(): array
    {
        return [
            'id' => fake()->uuid(),
            'name' => fake()->name(),
            'description' => fake()->paragraph(),
            'created_at' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }

    public function familyHead(): static
    {
        return $this->state(fn(array $attributes) => [
            'family_id' => null,
        ]);
    }

    public function familyMember(Person $familyHead): static
    {
        return $this->state(fn(array $attributes) => [
            'family_id' => $familyHead->id,
            'category_id' => $familyHead->category_id,
        ]);
    }
}
