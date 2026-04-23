<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reservation;
use Carbon\Carbon;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reservations data - formation_id references removed since formations table no longer exists
        Reservation::insert([
            [
                'user_id' => 1,
                'rented' => false,
                'limit' => Carbon::now()->addDays(4)->toDateTimeString(),
                'start' =>  Carbon::now()->addDays(5)->toDateTimeString(),
                'end' =>  Carbon::now()->addDays(6)->toDateTimeString(),
            ],
            [
                'user_id' => 1,
                'rented' => true,
                'limit' => Carbon::now()->addDays(3)->toDateTimeString(),
                'start' =>  Carbon::now()->addDays(10)->toDateTimeString(),
                'end' =>  Carbon::now()->addDays(11)->toDateTimeString(),
            ],
            [
                'user_id' => 2,
                'rented' => true,
                'limit' => Carbon::now()->addDays(9)->toDateTimeString(),
                'start' =>  Carbon::now()->addDays(16)->toDateTimeString(),
                'end' =>  Carbon::now()->addDays(18)->toDateTimeString(),
            ],
        ]);
    }
}
