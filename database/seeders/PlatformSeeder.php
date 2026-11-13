<?php

namespace Database\Seeders;

use App\Models\Platform;
use Illuminate\Database\Seeder;

class PlatformSeeder extends Seeder
{
    public function run(): void
    {
        foreach (['PC', 'PlayStation 5', 'Xbox Series', 'Switch'] as $name) {
            Platform::create(['name' => $name]);
        }
    }
}
