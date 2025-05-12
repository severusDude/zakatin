<?php

namespace Database\Seeders;

use App\Models\Person;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PersonSeeder extends Seeder
{
    protected int $familyHeadsCount = 85;
    protected int $individualsCount = 30;
    protected int $maxFamilyMembers = 6;

    // Category distribution configuration
    // Format: ['category_id' => weight]
    protected array $categoryDistribution = [
        1 => 5, //most common
        2 => 2,
        3 => 3,
        4 => 1,
        5 => 1,
        6 => 2,
        7 => 2,
        8 => 1
    ];

    /**
     * Run the database seeds.
     */
    // Population configuration

    public function run(): void
    {
        // Validate configured category IDs exist
        $this->validateCategories();

        // Create family heads
        $this->createFamilyHeads();

        // Create individuals
        $this->createIndividuals();
    }

    protected function validateCategories(): void
    {
        $existingCategoryIds = Category::pluck('id')->toArray();
        $missingCategories = array_diff(
            array_keys($this->categoryDistribution),
            $existingCategoryIds
        );

        if (!empty($missingCategories)) {
            throw new \Exception(
                'Configured category IDs not found in database: ' .
                    implode(', ', $missingCategories)
            );
        }
    }

    protected function createFamilyHeads(): void
    {
        for ($i = 0; $i < $this->familyHeadsCount; $i++) {
            $categoryId = $this->getRandomCategoryId();

            $head = Person::factory()
                ->familyHead()
                ->create(['category_id' => $categoryId]);

            $this->createFamilyMembers($head);
        }
    }

    protected function createFamilyMembers(Person $head): void
    {
        $memberCount = rand(0, $this->maxFamilyMembers);

        if ($memberCount > 0) {
            Person::factory()
                ->count($memberCount)
                ->familyMember($head)
                ->create();
        }
    }

    protected function createIndividuals(): void
    {
        for ($i = 0; $i < $this->individualsCount; $i++) {
            $categoryId = $this->getRandomCategoryId();

            Person::factory()
                ->familyHead()
                ->create(['category_id' => $categoryId]);
        }
    }

    protected function getRandomCategoryId(): int
    {
        $weightedCategories = [];
        foreach ($this->categoryDistribution as $categoryId => $weight) {
            $weightedCategories = array_merge(
                $weightedCategories,
                array_fill(0, $weight, $categoryId)
            );
        }

        return $weightedCategories[array_rand($weightedCategories)];
    }
}
