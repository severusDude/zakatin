<?php

namespace Database\Seeders;

use App\Models\Person;
use App\Models\Payment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $persons = Person::payer()->get();

        if (!$persons->isEmpty()) {
            foreach ($persons as $person) {
                Payment::factory()->create([
                    'person_id' => $person->id,
                ]);
            }
        }
    }
}
