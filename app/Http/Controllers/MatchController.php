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
        
        return view('matches.index')->with(compact('users','matches'));;
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
        $course = Course::where('id', $match->CourseID)->get();
        $holes = Hole::where('CourseID', $match->CourseID)->get();
        $rounds = Round::where('MatchID', $MatchID)->get();
        $users = User::all();

        $roundP1 = $rounds->first();
        $roundP2 = $rounds->find([1,2])->find([2])->get(1);

        //dd(compact('match','users','course','holes','rounds','roundP1','roundP2'));
        //$scorecardP1 = Scorecard::where('PlayerID', $round->PlayerID)->get();
        $scorecardP1 = Scorecard::where('PlayerID', $roundP1->PlayerID)->get();
        $scorecardP2 = Scorecard::where('PlayerID', $roundP2->PlayerID)->get();

        //dd(compact('match','users','course','holes','rounds','scorecardP1','scorecardP2','roundP1','roundP2'));
        return view('matches.edit')->with(compact('match','users','course','holes','rounds','scorecardP1','scorecardP2','roundP1','roundP2'));
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

        $roundP1 = $rounds->first();
        $roundP2 = $rounds->find([1,2])->find([2])->get(1);

        //dd(compact('match','users','course','holes','rounds','roundP1','roundP2'));
        //$scorecardP1 = Scorecard::where('PlayerID', $round->PlayerID)->get();
        $scorecardP1 = Scorecard::where('PlayerID', $roundP1->PlayerID)->get();
        $scorecardP2 = Scorecard::where('PlayerID', $roundP2->PlayerID)->get();

        $match->Date = $request->input('Date');
        $match->Weather = $request->input('Weather');

/*
        for($i=0; $i<18;$i++){
                Scorecard::findOrFail($i)->Score = $request->input('Score'.$i);
        }
        
*/
        $match->save();

        return back()->with('notification','Match updated.');
    }

    public function delete($MatchID){

        $match = Match::find($MatchID);
        $match->delete();

        return back()->with('notification','Match deleted');
    }    
}
