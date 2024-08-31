<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get the ID of the Gujarat state

        // Update to smaller case


$cities = DB::table('cities')->where('state_id', 7)->get();

foreach ($cities as $city) {
    // Convert the city name to lowercase
    $lowercaseName = strtolower($city->name);
    
    // Update the city name in the database
    DB::table('cities')->where('id', $city->id)->update(['name' => $lowercaseName]);
}


// Insert New Records
        // $stateId = DB::table('states')->where('name', 'Gujarat')->first()->id;

        // $cities = [
        //     'Ahmedabad', 'Surat', 'Vadodara (Baroda)', 'Rajkot', 'Bhavnagar', 'Jamnagar',
        //     'Junagadh', 'Gandhinagar', 'Anand', 'Nadiad', 'Navsari', 'Bharuch', 'Vapi',
        //     'Patan', 'Morbi', 'Surendranagar', 'Amreli', 'Porbandar', 'Gondal', 'Mehsana',
        //     'Palanpur', 'Valsad', 'Godhra', 'Dahod', 'Botad'
        // ];

        // sort($cities);

        // foreach ($cities as $city) {
        //     DB::table('cities')->insert([
        //         'name' => $city,
        //         'state_id' => $stateId,
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ]);
        // }
    }
}
