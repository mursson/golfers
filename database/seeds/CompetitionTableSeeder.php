<?php

use Illuminate\Database\Seeder;
use App\Competition;

class CompetitionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Competition::create([
            'Name' => 'Green Free Circuit',
            'Type' => 'Green Free'
        ]);  
    }
}
