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
            'Description' => 'Hoyo muy técnico que exige precisión y línea recta. Green protegido a ambos lados por su forma de flan y con poco espacio si se falla la salida.',
            'CourseID' => 1
        ]); 
        Hole::create([
            'Number' => 3,
            'Par' => 3,
            'Distance' => 63,
            'Handicap' => 5,
            'Picture' => 'http://canmascaro.com/wp-content/uploads/2015/12/15-685x1024.jpeg',
            'Description' => '63m en subida. Esencial coronar de primer golpe. El Green tiene en su parte trasera, un muro que no da margen de error. Green inclinado y complicado según la posición de la bola.',
            'CourseID' => 1
        ]); 
        Hole::create([
            'Number' => 4,
            'Par' => 3,
            'Distance' => 97,
            'Handicap' => 2,
            'Picture' => 'http://canmascaro.com/wp-content/uploads/2015/12/16-685x1024.jpeg',
            'Description' => '97m que exigen una salida con buena trayectoria. Con peligro a izquierda y derecha de green. Hcp 2 del campo merecido. No hay búnker porque no lo necesita para ser un hoyo de los más complejos del campo.',
            'CourseID' => 1
        ]); 
        Hole::create([
            'Number' => 5,
            'Par' => 3,
            'Distance' => 72,
            'Handicap' => 13,
            'Picture' => 'http://canmascaro.com/wp-content/uploads/2015/12/17-685x1024.jpeg',
            'Description' => '72m sin desnivel. Un green pequeño que aconseja entrar ligeramente por la izquierda. Protegido por árboles altos en su parte trasera.',
            'CourseID' => 1
        ]); 
        Hole::create([
            'Number' => 6,
            'Par' => 3,
            'Distance' => 78,
            'Handicap' => 6,
            'Picture' => 'http://canmascaro.com/wp-content/uploads/2015/12/18-685x1024.jpeg',
            'Description' => '78m con ligero descenso hacia green. Éste se protege por las copas de los árboles que quedan literalmente encima. Por su situación en el recorrido exige concentración y mucha precisión.',
            'CourseID' => 1
        ]); 
        Hole::create([
             'Number' => 7,
            'Par' => 3,
            'Distance' => 69,
            'Handicap' => 15,
            'Picture' => 'http://canmascaro.com/wp-content/uploads/2015/12/19-685x1024.jpeg',
            'Description' => 'Hoyo corto con peligro a la izquierda. Aconseja la entrada por la derecha si bien el raugh no concede regalos a las bolas que buscan entrar por ahí. Green con desnivel y de difícil lectura.',
            'CourseID' => 1
        ]); 
        Hole::create([
            'Number' => 8,
            'Par' => 3,
            'Distance' => 120,
            'Handicap' => 3,
            'Picture' => 'http://canmascaro.com/wp-content/uploads/2015/12/20-1024x685.jpeg',
            'Description' => '120m que exigen precisión y pegada desde la salida. Hoyo importante de la primera vuelta cuyo recorrido acerca a la casa club, que se ve de fondo de pantalla en la salida.',
            'CourseID' => 1
        ]); 
        Hole::create([
            'Number' => 9,
            'Par' => 3,
            'Distance' => 61,
            'Handicap' => 17,
            'Picture' => 'http://canmascaro.com/wp-content/uploads/2015/12/21-1024x685.jpeg',
            'Description' => '61m en bajada. Poco margen de fallo con un green que se protege por medio de un búnker en la parte posterior y que tiende a llevar bolas a la zona larga de green debido a su inclinación.',
            'CourseID' => 1
        ]);
        Hole::create([
            'Number' => 10,
            'Par' => 3,
            'Distance' => 81,
            'Handicap' => 7,
            'Picture' => 'http://canmascaro.com/wp-content/uploads/2015/12/22-1024x685.jpeg',
            'Description' => 'Hoyo muy recto que exige acertar con la distancia desde la salida. Con un árbol alto que dificulta entrar a green por la derecha. Éste es ancho y bastante plano.',
            'CourseID' => 1
        ]); 
        Hole::create([
            'Number' => 11,
            'Par' => 3,
            'Distance' => 100,
            'Handicap' => 8,
            'Picture' => 'http://canmascaro.com/wp-content/uploads/2015/12/23-686x1024.jpeg',
            'Description' => 'Hoyo de 100m con una estructura parecida al hoyo anterior pero que exige mayor distancia de salida. Un green estrecho y algo cruzado que dificulta la lectura del tiro de salida o de approach.',
            'CourseID' => 1
        ]); 
        Hole::create([
            'Number' => 12,
            'Par' => 3,
            'Distance' => 82,
            'Handicap' => 10,
            'Picture' => 'http://canmascaro.com/wp-content/uploads/2015/12/24-1024x685.jpeg',
            'Description' => '82m en subida con un obstáculo de agua imponente y que aconseja entrar por la derecha debido a la inclinación del green. Éste es de los más complicados del recorrido. ¡2 putts son buenos!',
            'CourseID' => 1
        ]); 
        Hole::create([
            'Number' => 13,
            'Par' => 3,
            'Distance' => 70,
            'Handicap' => 14,
            'Picture' => 'http://canmascaro.com/wp-content/uploads/2015/12/25-1024x685.jpeg',
            'Description' => 'Green protegido por árboles cercanos a la salida que obligan a ser muy preciso. Peligro a la izquierda.',
            'CourseID' => 1
        ]); 
        Hole::create([
            'Number' => 14,
            'Par' => 3,
            'Distance' => 55,
            'Handicap' => 9,
            'Picture' => 'http://canmascaro.com/wp-content/uploads/2015/12/26-685x1024.jpeg',
            'Description' => 'La distancia más pequeña del recorrido. Exigente en cuanto a trayectoria, tiene un green cómodo.',
            'CourseID' => 1
        ]); 
        Hole::create([
            'Number' => 15,
            'Par' => 3,
            'Distance' => 98,
            'Handicap' => 4,
            'Picture' => 'http://canmascaro.com/wp-content/uploads/2015/12/27-1024x685.jpeg',
            'Description' => 'Probablemente el hoyo más mediático del campo. Su configuración, con un obstáculo de agua imponente hasta la entrada de green, con poco margen para dejarse opciones de birdie y un green variado en caídas y que no pone fácil salvar el par si se alcanza de primer golpe.',
            'CourseID' => 1
        ]); 
        Hole::create([
             'Number' => 16,
            'Par' => 3,
            'Distance' => 65,
            'Handicap' => 16,
            'Picture' => 'http://canmascaro.com/wp-content/uploads/2015/12/28-686x1024.jpeg',
            'Description' => 'Hoyo de tregua antes del Hcp 1 del campo. 65m con fuera límites a la izquierda un green mas largo de lo que sugiere desde la salida.',
            'CourseID' => 1
        ]); 
        Hole::create([
            'Number' => 17,
            'Par' => 3,
            'Distance' => 103,
            'Handicap' => 1,
            'Picture' => 'http://canmascaro.com/wp-content/uploads/2015/12/29-685x1024.jpeg',
            'Description' => 'Un desafío de 103m para los Hcp bajos. Hoyo parcialmente ciego con un green en bajada que dificulta mantener la bola en green y dejarse una opción de birdie. Su inclinación y distancia hacen de él un reto para el jugador experto y una experiencia bonita de ver para el principiante.',
            'CourseID' => 1
        ]); 
        Hole::create([
            'Number' => 18,
            'Par' => 3,
            'Distance' => 78,
            'Handicap' => 12,
            'Picture' => 'http://canmascaro.com/wp-content/uploads/2015/12/30-1024x685.jpeg',
            'Description' => '78m ligeramente en subida, con un primer tiro ciego a green. Según la ubicación de la bandera el hoyo se complica más todavía ya que el green tiene una inclinación hacia la izquierda considerable, lo que no nos permite relajarnos hasta el ultimo putt del recorrido.',
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
