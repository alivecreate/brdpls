<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;
use Str;

class GaneshCompetitionCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ganesh_competition_category')->insert([
            [
                'name' => 'Best Ganesh Idol',
                'name_h' => 'શ્રેષ્ઠ મૂર્તિ',
                'rules' => null,
                'slug' => Str::slug('Best Ganesh Idol'),
            ],
            [
                'name' => 'Best Decoration',
                'name_h' => 'શ્રેષ્ઠ ડેકોરેશન',
                'rules' => null,
                'slug' => Str::slug('Best Decoration'),
            ],
            [
                'name' => 'Home Best Murti and Decoration',
                'name_h' => 'ઘરની બેસ્ટ મૂર્તિ',
                'rules' => null,
                'slug' => Str::slug('Home Best Murti and Decoration'),
            ],
        ]);
    }
}
