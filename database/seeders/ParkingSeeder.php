<?php

namespace Database\Seeders;

use App\Models\Parking;
use Illuminate\Database\Seeder;

class ParkingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Parking::create([
            'name' => 'Fast Parking Basic',
            'price_hours' => 10.00,
        ]);

        Parking::create([
            'name' => 'Fast Parking Premium',
            'price_hours' => 15.00,
        ]);

    }
}
