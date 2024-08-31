<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use DB;

class LiveCompetitionStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
        $startTime = Carbon::createFromFormat('Y-m-d H:i:s', '2024-09-07 00:00:00'); // 7-Sep-2024 12 AM midnight
        $endTime = Carbon::createFromFormat('Y-m-d H:i:s', '2024-09-17 23:59:59');   // 17-Sep-2024 11:59:59 PM

        DB::table('live_competition_status')->insert([
            [
                'status' => 'scheduled',
                'start_time' => $startTime,
                'end_time' => $endTime,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Add more entries as needed...
        ]);
}
}

