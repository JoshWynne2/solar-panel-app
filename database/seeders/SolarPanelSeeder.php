<?php

namespace Database\Seeders;

use App\Models\solarPanel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SolarPanelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        solarPanel::factory()->times(2)->create();
    }
}
