<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()

    {

        $this->call(UserTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(FormationSeeder::class);
        $this->call(ReservationSeeder::class);
        // $this->call(ActualiteSeeder::class);
    }
}
