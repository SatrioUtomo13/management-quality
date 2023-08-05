<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tanggal =  fake()->dateTimeBetween('-1 week', 'now');
        $lot = fake()->unique()->numberBetween(1, 7);
        return [
            "user_id" => 1,
            "tanggal" => $tanggal,
            "shift" => mt_rand(1, 4),
            "lot" => $lot,
            "item" => "5001",
            "resin" => "DPMB",
            "rc_r" => mt_rand(40, 45),
            "rc_c" => mt_rand(40, 45),
            "rc_l" => mt_rand(40, 45),
            "vc_r" => mt_rand(5, 8),
            "vc_l" => mt_rand(5, 8),
            "speed" => mt_rand(29, 35),
            "berat_aktual" => 230,
            "berat_awal" => 230,
            "berat_akhir" => 0,
            "rsi" => mt_rand(0, 10),
            "qty_transisi" => 0,
            "qty_lot" => mt_rand(980, 1200),
            "qty_total" => mt_rand(900, 1300),
            "lot_wip" => $tanggal->format('Ymd') . $lot,
            'created_at' => fake()->dateTimeBetween('-1 year', 'now'),
            'updated_at' => now(),

        ];
    }
}
