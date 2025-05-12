<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = true;
        $type = 'uang';
        $amount = 0;
        if ($status) {
            $type = (string) collect(['uang', 'beras'])->random();
            if ($type === 'uang') {
                $amount = rand(10000, 100000);
            } else {
                $amount = rand(1, 100);
            }
        }

        return [
            'year' => 2025,
            'type' => $type,
            'amount' => $amount,
            'status' => $status
        ];
    }
}
