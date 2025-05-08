<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'MAMPU',
                'label' => 'Mampu',
                'description' => 'The capable',
            ],
            [
                'name' => 'FAKIR',
                'label' => 'Fakir',
                'description' => 'The poor with no means',
            ],
            [
                'name' => 'MISKIN',
                'label' => 'Miskin',
                'description' => 'The needy with limited means',
            ],
            [
                'name' => 'AMILIN',
                'label' => 'Amilin',
                'description' => 'Zakat Administrator',
            ],
            [
                'name' => 'MUALAF',
                'label' => 'Mualaf',
                'description' => 'New converts to Islam',
            ],
            [
                'name' => 'GHORIM',
                'label' => 'Ghorim',
                'description' => 'People in debt',
            ],
            [
                'name' => 'FISABILLILAH',
                'label' => 'Fi Sabillilah',
                'description' => 'In the cause of Allah',
            ],
            [
                'name' => 'IBNUSABIL',
                'label' => 'Ibnu Sabil',
                'description' => 'Wayfarer/traveler',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
