<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Param;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            "name" => "admin",
            "username" => "admin123",
            "tim" => "Lead",
            "password" => bcrypt('password'),
            "is_admin" => true
        ]);

        // Param::create([
        //     "item" => "5001",
        //     "resin" => "DPMB",
        //     "type" => "kj",
        //     "max_rc" => 43,
        //     "min_rc" => 41,
        //     "max_vc" => 6,
        //     "min_vc" => 7,
        //     "wind" => "20",
        //     "created_at" => fake()->dateTimeBetween('-1 year', 'now'),
        //     "updated_at" => now()
        // ]);

        // Param::create([
        //     "item" => "11001",
        //     "resin" => "DMMC",
        //     "type" => "kj",
        //     "max_rc" => 43,
        //     "min_rc" => 41,
        //     "max_vc" => 6,
        //     "min_vc" => 7,
        //     "wind" => "20",
        //     "created_at" => fake()->dateTimeBetween('-1 year', 'now'),
        //     "updated_at" => now()
        // ]);

        // Param::create([
        //     "item" => "16001",
        //     "resin" => "DPMD",
        //     "type" => "kj",
        //     "max_rc" => 43,
        //     "min_rc" => 41,
        //     "max_vc" => 6,
        //     "min_vc" => 7,
        //     "wind" => "20",
        //     "created_at" => fake()->dateTimeBetween('-1 year', 'now'),
        //     "updated_at" => now()
        // ]);

        // Param::create([
        //     "item" => "9010",
        //     "resin" => "DMMD",
        //     "type" => "kj",
        //     "max_rc" => 43,
        //     "min_rc" => 41,
        //     "max_vc" => 6,
        //     "min_vc" => 7,
        //     "wind" => "20",
        //     "created_at" => fake()->dateTimeBetween('-1 year', 'now'),
        //     "updated_at" => now()
        // ]);

        // Product::factory(7)->create();
    }
}
