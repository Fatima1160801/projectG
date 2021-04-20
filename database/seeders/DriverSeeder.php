<?php

namespace Database\Seeders;

use App\Models\Driver;
use Illuminate\Database\Seeder;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Driver::create([
            'name'=>'Adam',
            'phone'=>'05230946',
            'ssn'=>'12341234',
            'salray'=>'2000',
            'license'=>'1234',
            'available'=>'yes',
            'busy'=>'no',
            'banknumber'=>'98765',
            'password'=>'wwwer',
            'admin_id'=>'2',

        ]);
        Driver::create([
            'name'=>'Ahamd',
            'phone'=>'050276',
            'salray'=>'2050',
            'license'=>'12d4',
            'ssn'=>'454545',
            'available'=>'yes',
            'busy'=>'no',
            'banknumber'=>'98765',
            'password'=>'werrr',
            'admin_id'=>'2',

        ]);
        Driver::create([
            'name'=>'Adham',
            'phone'=>'0576',
            'ssn'=>'343434',
            'available'=>'yes',
            'password'=>'werxx',
            'salray'=>'2500',
            'license'=>'134',
            'busy'=>'no',
            'banknumber'=>'98765',
            'admin_id'=>'2',

        ]);Driver::create([
            'name'=>'Ashraf',
            'phone'=>'05135546',
            'ssn'=>'232323',
            'salray'=>'3000',
            'license'=>'234',
            'available'=>'yes',
            'password'=>'wer',
            'busy'=>'no',
            'banknumber'=>'98765',
            'admin_id'=>'2',

        ]);Driver::create([
            'name'=>'abed',
            'phone'=>'0533376',
            'ssn'=>'12121',
            'available'=>'yes',
            'password'=>'weii',
            'busy'=>'no',
            'salray'=>'2550',
            'license'=>'1224',
            'banknumber'=>'98765',
            'admin_id'=>'2',

        ]);
    }
}
