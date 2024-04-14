<?php

namespace Database\Seeders;

use App\Models\solar_panel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SolarPanelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        solar_panel::factory()->times(2)->create();
    }
}
