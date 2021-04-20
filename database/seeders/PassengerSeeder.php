<?php

namespace Database\Seeders;

use App\Models\Passenger;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PassengerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Passenger::create([
            'name'=>'fatima',
            'BZUid'=>'1160801',
            'email'=>'fatima@gmail.com',
            'password'=>Hash::make('1234'),
            'phone'=>'05923',
            'canbook'=>'yes',
            'balance'=>'150',
            'Favorite_location'=>'Ramallah',

        ]);
        Passenger::create([
            'name'=>'mais',
            'BZUid'=>'1131366',
            'email'=>'mais@gmail.com',
            'password'=>Hash::make('4321'),
            'phone'=>'05934',
            'canbook'=>'yes',
            'balance'=>'70',
            'Favorite_location'=>'Ramallah',

        ]);
        Passenger::create([
            'name'=>'Sara',
            'BZUid'=>'1150123',
            'email'=>'Sara@gmail.com',
            'password'=>Hash::make('3412'),
            'phone'=>'05956',
            'canbook'=>'yes',
            'balance'=>'50',
            'Favorite_location'=>'Birziet',

        ]);
    }
}
