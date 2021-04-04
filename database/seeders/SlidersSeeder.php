<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

use App\Models\Slider;
use Carbon\Carbon;

class SlidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            [
                'title' => 'Glavni slajder',
                'place' => 'Početna',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
             ],
             [
                 'title' => 'Kalendar slajder',
                 'place' => 'Početna',
                 'created_at' => Carbon::now(),
                 'updated_at' => Carbon::now(),
             ],
             [
                 'title' => '12 sela slajder',
                 'place' => 'O nama',
                 'created_at' => Carbon::now(),
                 'updated_at' => Carbon::now(),
             ]
        ]);
    }
}
