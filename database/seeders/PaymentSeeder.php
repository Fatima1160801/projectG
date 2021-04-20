<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Payment::create([

            'passenger_id'=>'1',
            'admin_id'=>'1',
            'balance'=>'8',


        ]);
        Payment::create([

            'passenger_id'=>'3',
            'admin_id'=>'1',
            'balance'=>'4.5',


        ]);Payment::create([

            'passenger_id'=>'2',
            'admin_id'=>'1',
            'balance'=>'7',


        ]);
    }
}
