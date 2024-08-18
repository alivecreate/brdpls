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
        $stateId = DB::table('states')->where('name', 'Gujarat')->first()->id;

        $cities = [
            'Ahmedabad', 'Surat', 'Vadodara (Baroda)', 'Rajkot', 'Bhavnagar', 'Jamnagar',
            'Junagadh', 'Gandhinagar', 'Anand', 'Nadiad', 'Navsari', 'Bharuch', 'Vapi',
            'Patan', 'Morbi', 'Surendranagar', 'Amreli', 'Porbandar', 'Gondal', 'Mehsana',
            'Palanpur', 'Valsad', 'Godhra', 'Dahod', 'Botad'
        ];

        sort($cities);

        foreach ($cities as $city) {
            DB::table('cities')->insert([
                'name' => $city,
                'state_id' => $stateId,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
