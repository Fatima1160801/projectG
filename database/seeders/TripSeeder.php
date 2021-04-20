<?php

namespace Database\Seeders;

use App\Models\Trip;
use Illuminate\Database\Seeder;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trip::create([
            'cabType'=>'taxi',
            'pickupDate'=>'2021-03-24',
            'pickupTime'=>'21:42:19',
            'pickup'=>'Ramalla',
            'dropoff'=>'Birziet',
            'price'=>'5',
            'gratuity'=>'2',
            'statusTrip'=>'waiting',
            'passengerCounter'=>'1',
            'driver_id'=>'6',
            'PaymentType'=>'cash',
            'admin_id'=>'1',

        ]);
        Trip::create([
            'cabType'=>'taxi',
            'pickupDate'=>'2021-03-23',
            'pickupTime'=>'11:12:19',
            'pickup'=>'Birziet',
            'dropoff'=>'Ramalla',
            'statusTrip'=>'waiting',
            'gratuity'=>'2',
            'PaymentType'=>'cash',
            'price'=>'5',
            'passengerCounter'=>'2',
            'driver_id'=>'7',
            'admin_id'=>'1',

        ]);  Trip::create([
            'cabType'=>'van',
            'pickupDate'=>'2020-03-4',
            'pickupTime'=>'12:24:19',
            'pickup'=>'Ramalla',
            'dropoff'=>'Birziet',
            'price'=>'5',
            'statusTrip'=>'waiting',
            'gratuity'=>'3',
            'PaymentType'=>'BZUid',
            'passengerCounter'=>'5',
            'driver_id'=>'9',
            'admin_id'=>'1',

        ]);  Trip::create([
            'cabType'=>'bus',
            'pickupDate'=>'2021-02-10',
            'pickupTime'=>'02:02:19',
            'pickup'=>'Ramalla',
            'dropoff'=>'Birziet',
            'price'=>'5',
            'statusTrip'=>'waiting',
            'gratuity'=>'1',
            'PaymentType'=>'BZUid',
            'passengerCounter'=>'20',
            'driver_id'=>'7',
            'admin_id'=>'1',

        ]);  Trip::create([
            'cabType'=>'van',
            'pickupDate'=>'2020-03-24',
            'pickupTime'=>'21:42:19',
            'pickup'=>'Al-Ersal',
            'dropoff'=>'Birziet',
            'price'=>'4.5',
            'statusTrip'=>'waiting',
            'gratuity'=>'0',
            'PaymentType'=>'BZUid',
            'passengerCounter'=>'5',
            'driver_id'=>'1',
            'admin_id'=>'3',

        ]);
    }
}
