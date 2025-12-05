<?php

namespace Database\Seeders;

use App\Models\Building;
use App\Models\Layout;
use App\Models\Ledger;
use App\Models\Transcation;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Ledger::factory()->count(10)->create();
        // Building::factory()->count(30)->create();
        // Transcation::factory()->count(25)->create();
        // Layout::factory()->count(15)->create();

    }
}
