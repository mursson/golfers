<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(CompetitionTableSeeder::class);
        $this->call(HoleTableSeeder::class);
        $this->call(ScorecardTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(RoundsTableSeeder::class);
    }
}
