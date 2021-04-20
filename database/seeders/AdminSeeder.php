<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name'=>'Ahmad',
            'ssn'=>'098765',
            'phone'=>'059911',
            'email'=>'Ahmad@gmail',
            'salray'=>'5000',
            'password'=>Hash::make('1234'),
            'bankNum'=>'567890',
            'role_id'=>'1',


        ]);
        Admin::create([
            'name'=>'Mohammad',
            'ssn'=>'0954325',
            'phone'=>'052311',
            'email'=>'Mohammad@gmail',
            'password'=>Hash::make('9870'),
            'bankNum'=>'562830',
            'salray'=>'5000',
            'role_id'=>'3',


        ]);
        Admin::create([
            'name'=>'Harb',
            'ssn'=>'765098',
            'phone'=>'059123',
            'email'=>'Harb@gmail',
            'password'=>Hash::make('3421'),
            'bankNum'=>'890345',
            'salray'=>'5000',
            'role_id'=>'2',


        ]);
    }
}
