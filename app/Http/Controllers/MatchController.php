<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;
use App\User;
use App\Hole;
use App\Round;
use App\Course;
use App\Scorecard;

class MatchController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $matches = Match::all();
        $users =User::all();
        $rounds =Round::all();
        
        return view('matches.index')->with(compact('users','matches','rounds'));;
    }

    public function store(Request $request){
        
        $rules = [
            'Name' => 'required|max:255',
            'HoleCount' => 'required|min:1',
        ];

        $messages = [
            'Name.required' => 'Es necesario ingresar el nombre del usuario.',
            'Name.max' => 'El nombre es demasiado largo.',
            'HoleCount.required' => 'Olvidó ingresar una HoleCount',
            'HoleCount.min' => 'HoleCount debe tener al menos 1 caracteres.'
        ];  

        //$this->validate($request, $rules, $messages);

        $match= new Match();

        $match->Date = $request->input('Date');
        $match->Weather = $request->input('Weather');

        $match->save();

        //dd($request->all());

        return back()->with('notification','Match added.');
    }   
    public function edit($MatchID){

        $match = Match::find($MatchID);
        $course = Course::find($match->CourseID);
        $holes = Hole::where('CourseID', $match->CourseID)->get();
        $rounds = Round::where('MatchID', $MatchID)->get();
        $users = User::all();

        $roundP1 = Round::find($MatchID)->where('PlayerID',$match->Player1)->get();
        $roundP2 = Round::find($MatchID)->where('PlayerID',$match->Player2)->get();
        $roundP3 = Round::find($MatchID)->where('PlayerID',$match->Player3)->get();
        $roundP4 = Round::find($MatchID)->where('PlayerID',$match->Player4)->get();


        if (count($roundP1) > 0 && count($roundP2) > 0 && count($roundP3) > 0 && count($roundP4) > 0) {
            $scorecardP1 = Scorecard::where('PlayerID', $roundP1->get(0)->PlayerID)->get();
            $scorecardP2 = Scorecard::where('PlayerID', $roundP2->get(0)->PlayerID)->get();
            $scorecardP3 = Scorecard::where('PlayerID', $roundP3->get(0)->PlayerID)->get();
            $scorecardP4 = Scorecard::where('PlayerID', $roundP4->get(0)->PlayerID)->get();

            //dd(compact('match','users','course','holes','rounds','scorecardP1','scorecardP2','scorecardP3','scorecardP4','roundP1','roundP2','roundP3','roundP4'));
            return view('matches.edit')->with(compact('match','users','course','holes','rounds','scorecardP1','scorecardP2','scorecardP3','scorecardP4','roundP1','roundP2','roundP3','roundP4'));            
        }
        if (count($roundP1) > 0 && count($roundP2) > 0 && count($roundP3) > 0 && count($roundP4) == 0) {
            $scorecardP1 = Scorecard::where('PlayerID', $roundP1->get(0)->PlayerID)->get();
            $scorecardP2 = Scorecard::where('PlayerID', $roundP2->get(0)->PlayerID)->get();
            $scorecardP3 = Scorecard::where('PlayerID', $roundP3->get(0)->PlayerID)->get();
            
            //dd(compact('match','users','course','holes','rounds','scorecardP1','scorecardP2','scorecardP3','roundP1','roundP2','roundP3'));
            return view('matches.edit')->with(compact('match','users','course','holes','rounds','scorecardP1','scorecardP2','scorecardP3','roundP1','roundP2','roundP3'));
        }
        if (count($roundP1) > 0 && count($roundP2) > 0 && count($roundP3) == 0 && count($roundP4) == 0) {
            $scorecardP1 = Scorecard::where('PlayerID', $roundP1->get(0)->PlayerID)->get();
            $scorecardP2 = Scorecard::where('PlayerID', $roundP2->get(0)->PlayerID)->get();
                     
            //dd(compact('match','users','course','holes','rounds','scorecardP1','scorecardP2','roundP1','roundP2'));
            return view('matches.edit')->with(compact('match','users','course','holes','rounds','scorecardP1','scorecardP2','roundP1','roundP2'));
        }

    }

    public function update($MatchID, Request $request){

        $rules = [
            'Name' => 'required|max:255',
            'HoleCount' => 'required|min:1'
        ];

        $messages = [
            'Name.required' => 'Es necesario ingresar el nombre del usuario.',
            'Name.max' => 'El nombre es demasiado largo.',
            'HoleCount.min' => 'HoleCount debe tener al menos 1 caracteres.'
        ];          

        //$this->validate($request, $rules, $messages);

        $match = Match::find($MatchID);
        $course = Course::where('id', $match->CourseID)->get();
        $holes = Hole::where('CourseID', $match->CourseID)->get();
        $rounds = Round::where('MatchID', $MatchID)->get();
        $users = User::all();

        $match->Date = $request->input('Date');
        $match->Weather = $request->input('Weather');

        $roundP1 = Round::find($MatchID)->where('PlayerID',$match->Player1)->get();
        $roundP2 = Round::find($MatchID)->where('PlayerID',$match->Player2)->get();
        $roundP3 = Round::find($MatchID)->where('PlayerID',$match->Player3)->get();
        $roundP4 = Round::find($MatchID)->where('PlayerID',$match->Player4)->get();

        if (count($roundP1) > 0) {

            $scorecardP1 = Scorecard::where('PlayerID', $roundP1->get(0)->PlayerID)->get();

            $j=1;
            $totalP1=0;$totalP2=0;$totalP3=0;$totalP4=0;

            for($i=0; $i<18;$i++){

                    $score= $scorecardP1->get($i);

                    $score->Score = $request->input('P1Score'.$j);
                    $totalP1= $totalP1 + $score->Score;

                    $score->save();
                    $j++;
            }
            $roundP1->get(0)->TotalScore= $totalP1;
            $roundP1->get(0)->save();
        }
        if (count($roundP2) > 0) {

            $scorecardP2 = Scorecard::where('PlayerID', $roundP2->get(0)->PlayerID)->get();

            $j=1;
            for($i=0; $i<18;$i++){

                    $score= $scorecardP2->get($i);

                    $score->Score = $request->input('P2Score'.$j);
                    $score->save();
                    $j++;
            }
            $roundP2->get(0)->TotalScore= $totalP2;
            $roundP2->get(0)->save();
        }
        if (count($roundP3) > 0) {

            $scorecardP3 = Scorecard::where('PlayerID', $roundP3->get(0)->PlayerID)->get();

            $j=1;
            for($i=0; $i<18;$i++){

                    $score= $scorecardP3->get($i);

                    $score->Score = $request->input('P3Score'.$j);
                    $score->save();
                    $j++;
            }
            $roundP3->get(0)->TotalScore= $totalP3;
            $roundP3->get(0)->save();
        }
        if (count($roundP4) > 0) {

            $scorecardP4 = Scorecard::where('PlayerID', $roundP4->get(0)->PlayerID)->get();

            $j=1;
            for($i=0; $i<18;$i++){

                    $score= $scorecardP4->get($i);

                    $score->Score = $request->input('P4Score'.$j);
                    $score->save();
                    $j++;
            }
            $roundP4->get(0)->TotalScore= $totalP4;
            $roundP4->get(0)->save();
        }

        $match->save();

        return back()->with('notification','Match updated.');
    }

    public function delete($MatchID){
/*
        $rounds = Round::where('MatchID', $MatchID)->get();
        $rounds->delete();

        $scorecardP1 = Scorecard::where('PlayerID', $roundP1->get(0)->PlayerID)->get();
        $scorecardP2 = Scorecard::where('PlayerID', $roundP2->get(0)->PlayerID)->get();
        $scorecardP3 = Scorecard::where('PlayerID', $roundP3->get(0)->PlayerID)->get();
        $scorecardP4 = Scorecard::where('PlayerID', $roundP4->get(0)->PlayerID)->get();       
*/
        $match = Match::find($MatchID);
        $match->delete();


        return back()->with('notification','Match deleted');
    }    
}
