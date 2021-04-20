<?php

namespace Database\Seeders;

use App\Models\Cab;
use Illuminate\Database\Seeder;

class CabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cab::create([
            'cabType'=>'bus',
            'cabNumber'=>'1',
            'seatNum'=>'50',
            'license'=>'4325',
            'insurance'=>'678',
            'driver_id'=>'9',
            'machineNumber'=>'11234',
        ]);
        Cab::create([
            'cabType'=>'van',
            'cabNumber'=>'1',
            'seatNum'=>'7',
            'license'=>'45456',
            'insurance'=>'890',
            'driver_id'=>'8',
            'machineNumber'=>'14564',
        ]);
        Cab::create([
            'cabType'=>'bus',
            'cabNumber'=>'4',
            'seatNum'=>'50',
            'license'=>'4325',
            'insurance'=>'345',
            'driver_id'=>'7',
            'machineNumber'=>'11234',
        ]);
        Cab::create([
            'cabType'=>'taxi',
            'cabNumber'=>'3',
            'seatNum'=>'2',
            'license'=>'2225',
            'insurance'=>'123',
            'driver_id'=>'6',
            'machineNumber'=>'11234',
        ]);
    }
}
