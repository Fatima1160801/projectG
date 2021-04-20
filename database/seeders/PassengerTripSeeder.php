<?php

namespace Database\Seeders;

use App\Models\Passenger_Trip;
use Illuminate\Database\Seeder;

class PassengerTripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Passenger_Trip::create([

            'seatNum'=>'2',
            'note'=>'this is the first time to try this app it is a wonderful and useful app.',
            'passenger_id'=>'1',
            'trip_id'=>'1',
            'updated_at'=>'4/14/2021',
            'created_at'=>'4/14/2021 10:01:00',

        ]);

        Passenger_Trip::create([

            'seatNum'=>'3',
            'note'=>'this is the first time to try this app it is a wonderful and useful app.',
            'passenger_id'=>'1',
            'trip_id'=>'3',
            'updated_at'=>'4/14/2021',
            'created_at'=>'4/14/2021 10:01:00',


        ]);

        Passenger_Trip::create([

            'seatNum'=>'1',
            'note'=>'this is the first time to try this app it is a wonderful and useful app.',
            'passenger_id'=>'3',
            'trip_id'=>'4',
            'updated_at'=>'4/14/2021',
            'created_at'=>'4/14/2021 10:01:00',


        ]);

        Passenger_Trip::create([

            'seatNum'=>'4',
            'note'=>'this is the first time to try this app it is a wonderful and useful app.this is the first time to try this app it is a wonderful and useful app.this is the first time to try this app it is a wonderful and useful app.',
            'passenger_id'=>'2',
            'trip_id'=>'2',
            'updated_at'=>'4/14/2021',
            'created_at'=>'4/14/2021 10:01:00',
        ]);


    }
}
