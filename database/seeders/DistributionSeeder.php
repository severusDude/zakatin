<?php

namespace Database\Seeders;

use App\Models\Person;
use App\Models\Payment;
use App\Models\Distribution;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DistributionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // Category weights configuration [category_id => weight]
    protected array $categoryWeights = [
        2 => 2,
        3 => 1.5,
        4 => 1,
        5 => 1,
        6 => 1,
        7 => 1,
        8 => 1

    ];

    // Base rice amount per weight unit (in kg)
    protected float $baseRiceAmount = 5.0;

    protected int $currentYear;

    public function __construct()
    {
        $this->currentYear = now()->year;
    }

    public function run(): void
    {
        $this->createCurrentYearDistributions();
    }

    public function createCurrentYearDistributions(): void
    {
        // Get total available rice from payments
        $totalRiceAvailable = Payment::where('year', $this->currentYear)
            ->where('type', 'beras')
            ->sum('amount');

        if ($totalRiceAvailable <= 0) {
            $this->command->error('No rice payments available for distribution in ' . $this->currentYear);
            return;
        }

        // Get all eligible recipients
        $recipients = Person::recipient()->get();

        if ($recipients->isEmpty()) {
            $this->command->error('No eligible recipients found');
            return;
        }

        // Calculate total weight points
        $totalWeight = $recipients->sum(function ($person) {
            return $this->categoryWeights[$person->category_id] ?? 1;
        });

        // Calculate rice per weight unit
        $ricePerWeight = min(
            $this->baseRiceAmount,
            $totalRiceAvailable / $totalWeight
        );

        // Create distributions
        $distributedRice = 0;
        $recipientsCount = 0;

        foreach ($recipients as $recipient) {
            $weight = $this->categoryWeights[$recipient->category_id] ?? 1;
            $riceAmount = round($ricePerWeight * $weight, 2);

            // Ensure we don't exceed available rice
            if (($distributedRice + $riceAmount) > $totalRiceAvailable) {
                $this->command->warn('Reached maximum available rice, stopping distribution');
                break;
            }

            // Create distribution
            Distribution::factory()
                ->forRecipient($recipient)
                ->create([
                    'amount' => $riceAmount,
                ]);

            $distributedRice += $riceAmount;
            $recipientsCount++;
        }

        $this->command->info(sprintf(
            'Created distributions for %d recipients in %d with %.2f kg rice (%.2f kg available)',
            $recipientsCount,
            $this->currentYear,
            $distributedRice,
            $totalRiceAvailable
        ));
    }
}
