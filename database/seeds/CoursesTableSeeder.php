<?php

use Illuminate\Database\Seeder;
use App\Course;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            'Name' => 'Can Mascaró',
            'HoleCount' => 18,
            'Par' => 54,
            'Rating' => 10,
            'BogeyRating' => 8,
            'Location' => 'La Palma de Cervelló',
            'Description' => 'Campo de P&P bueno para principiantes',
            'Map' => 'http://canmascaro.com/wp-content/uploads/2015/11/Captura-de-pantalla-2015-11-29-a-las-0.00.25.png'
        ]);  
        Course::create([
            'Name' => 'Can Rafel',
            'HoleCount' => 9,
            'Par' => 27,
            'Rating' => 10,
            'BogeyRating' => 8,            
            'Location' => 'Can Rafel',
            'Description' => 'Campo de P&P con nueve hoyos',
            'Map' => ''
        ]); 
    }
}
