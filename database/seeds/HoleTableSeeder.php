<?php

use Illuminate\Database\Seeder;
use App\Hole;

class HoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hole::create([
            'Number' => 1,
            'Par' => 3,
            'Distance' => 87,
            'Handicap' => 11,
            'Picture' => 'http://canmascaro.com/wp-content/uploads/2015/12/13-686x1024.jpeg',
            'Description' => '87m con un ligero desnivel que hace que el green sea difícil de apreciar en su totalidad desde la salida. Se complica si de primer golpe se sobrevuela el green.',
            'CourseID' => 1
        ]); 
        Hole::create([
            'Number' => 2,
            'Par' => 3,
            'Distance' => 55,
            'Handicap' => 18,
            'Picture' => 'http://canmascaro.com/wp-content/uploads/2015/12/14-685x1024.jpeg',
            'Description' => 'Hoyo muy técnico que exige precisión y línea recta. Green protegido a ambos lados por su forma de ‘flan’ y con poco espacio si se falla la salida.',
            'CourseID' => 1
        ]); 
        Hole::create([
            'Number' => 3,
            'Par' => 3,
            'Distance' => 63,
            'Handicap' => 5,
            'Picture' => '',
            'Description' => '',
            'CourseID' => 1
        ]); 
        Hole::create([
            'Number' => 4,
            'Par' => 3,
            'Distance' => 97,
            'Handicap' => 2,
            'Picture' => '',
            'Description' => '',
            'CourseID' => 1
        ]); 
        Hole::create([
            'Number' => 5,
            'Par' => 3,
            'Distance' => 72,
            'Handicap' => 13,
            'Picture' => '',
            'Description' => '',
            'CourseID' => 1
        ]); 
        Hole::create([
            'Number' => 6,
            'Par' => 3,
            'Distance' => 78,
            'Handicap' => 6,
            'Picture' => '',
            'Description' => '',
            'CourseID' => 1
        ]); 
        Hole::create([
             'Number' => 7,
            'Par' => 3,
            'Distance' => 69,
            'Handicap' => 15,
            'Picture' => '',
            'Description' => '',
            'CourseID' => 1
        ]); 
        Hole::create([
            'Number' => 8,
            'Par' => 3,
            'Distance' => 120,
            'Handicap' => 3,
            'Picture' => '',
            'Description' => '',
            'CourseID' => 1
        ]); 
        Hole::create([
            'Number' => 9,
            'Par' => 3,
            'Distance' => 61,
            'Handicap' => 17,
            'Picture' => '',
            'Description' => '',
            'CourseID' => 1
        ]);
        Hole::create([
            'Number' => 10,
            'Par' => 3,
            'Distance' => 81,
            'Handicap' => 7,
            'Picture' => '',
            'Description' => '',
            'CourseID' => 1
        ]); 
        Hole::create([
            'Number' => 11,
            'Par' => 3,
            'Distance' => 100,
            'Handicap' => 8,
            'Picture' => '',
            'Description' => '',
            'CourseID' => 1
        ]); 
        Hole::create([
            'Number' => 12,
            'Par' => 3,
            'Distance' => 82,
            'Handicap' => 10,
            'Picture' => '',
            'Description' => '',
            'CourseID' => 1
        ]); 
        Hole::create([
            'Number' => 13,
            'Par' => 3,
            'Distance' => 70,
            'Handicap' => 14,
            'Picture' => '',
            'Description' => '',
            'CourseID' => 1
        ]); 
        Hole::create([
            'Number' => 14,
            'Par' => 3,
            'Distance' => 55,
            'Handicap' => 9,
            'Picture' => '',
            'Description' => '',
            'CourseID' => 1
        ]); 
        Hole::create([
            'Number' => 15,
            'Par' => 3,
            'Distance' => 98,
            'Handicap' => 4,
            'Picture' => '',
            'Description' => '',
            'CourseID' => 1
        ]); 
        Hole::create([
             'Number' => 16,
            'Par' => 3,
            'Distance' => 65,
            'Handicap' => 16,
            'Picture' => '',
            'Description' => '',
            'CourseID' => 1
        ]); 
        Hole::create([
            'Number' => 17,
            'Par' => 3,
            'Distance' => 103,
            'Handicap' => 1,
            'Picture' => '',
            'Description' => '',
            'CourseID' => 1
        ]); 
        Hole::create([
            'Number' => 18,
            'Par' => 3,
            'Distance' => 78,
            'Handicap' => 12,
            'Picture' => '',
            'Description' => '',
            'CourseID' => 1
        ]);

        //CAN RAFEL        
        Hole::create([
            'Number' => 1,
            'Par' => 3,
            'Distance' => 59,
            'Handicap' => 0,
            'Picture' => '',
            'Description' => '',
            'CourseID' => 2
        ]); 
        Hole::create([
            'Number' => 2,
            'Par' => 3,
            'Distance' => 82,
            'Handicap' => 0,
            'Picture' => '',
            'Description' => '',
            'CourseID' => 2
        ]); 
        Hole::create([
            'Number' => 3,
            'Par' => 3,
            'Distance' => 88,
            'Handicap' => 0,
            'Picture' => '',
            'Description' => '',
            'CourseID' => 2
        ]); 
        Hole::create([
            'Number' => 4,
            'Par' => 3,
            'Distance' => 69,
            'Handicap' => 0,
            'Picture' => '',
            'Description' => '',
            'CourseID' => 2
        ]); 
        Hole::create([
            'Number' => 5,
            'Par' => 3,
            'Distance' => 111,
            'Handicap' => 0,
            'Picture' => '',
            'Description' => '',
            'CourseID' => 2
        ]); 
        Hole::create([
            'Number' => 6,
            'Par' => 3,
            'Distance' => 75,
            'Handicap' => 0,
            'Picture' => '',
            'Description' => '',
            'CourseID' => 2
        ]); 
        Hole::create([
             'Number' => 7,
            'Par' => 3,
            'Distance' => 84,
            'Handicap' => 0,
            'Picture' => '',
            'Description' => '',
            'CourseID' => 2
        ]); 
        Hole::create([
            'Number' => 8,
            'Par' => 3,
            'Distance' => 73,
            'Handicap' => 0,
            'Picture' => '',
            'Description' => '',
            'CourseID' => 2
        ]); 
        Hole::create([
            'Number' => 9,
            'Par' => 3,
            'Distance' => 63,
            'Handicap' => 0,
            'Picture' => '',
            'Description' => '',
            'CourseID' => 2
        ]);
    }
}
