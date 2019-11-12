<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Competition;
use App\Course;
use App\Scorecard;
use App\Round;
use App\User;
use App\Match;

class HomeController extends Controller
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
        return view('home');
    }

    public function getReport()
    {
        //$categories =$prjoect->categories;
        //$categories = Category::where('project_id', 1)->get();
        $competitions =Competition::all();
        $courses =Course::all();
        $players =User::where('role', 1)->get();

        return view('report')->with(compact('competitions','courses','players'));
    }    
    public function postReport(Request $request)
    {
        $rules = [
            'competition_id' => 'sometimes|exists:competitions,id'
        ];

        $this->validate($request, $rules);

        $user1 = User::find($request->input('player1'));
        $user2 = User::find($request->input('player2'));
        $user3 = User::find($request->input('player3'));
        $user4 = User::find($request->input('player4'));

        //dd($user1->id);

        $match = new Match();
        $now = date('Y-m-d');
        $match->Date = $now;
        $match->Weather = $request->input('Weather') ?: null;
        $match->CourseID = $request->input('CourseID');
        $match->CompetitionID = $request->input('CompetitionID') ?: null;
        $match->save();

        
        if($user1){

            $round = new Round();
            $round->TotalScore = 0;
            $round->NumRonda = $request->input('RoundID');
            $round->PlayerID = $request->input('player1');
            $round->MatchID = $match->id;

            $round->save();

            for($i=1; $i <= 18; $i++){
                
                $scorecard = new Scorecard();
                $scorecard->PlayerID = $request->input('player1');
                $scorecard->RoundID = $request->input('RoundID');
                $scorecard->HoleID = $i;
                $scorecard->score = 0;

                $scorecard->save();
            }
            
            $match->Player1 = $user1->id;
            $match->RoundPlayer1 = $round->id;
        }

        if($user2){

            $round = new Round();
            $round->TotalScore = 0;
            $round->NumRonda = $request->input('RoundID');
            $round->PlayerID = $request->input('player2');
            $round->MatchID = $match->id;

            $round->save();

            for($i=1; $i <= 18; $i++){
                
                $scorecard = new Scorecard();
                $scorecard->PlayerID = $request->input('player2');
                $scorecard->RoundID = $request->input('RoundID');
                $scorecard->HoleID = $i;
                $scorecard->score = 0;

                $scorecard->save();
            }

            $match->Player2 = $user2->id;
            $match->RoundPlayer2 = $round->id;
        }
        
        if($user3){

            $round = new Round();
            $round->TotalScore = 0;
            $round->NumRonda = $request->input('RoundID');
            $round->PlayerID = $request->input('player3');
            $round->MatchID = $match->id;

            $round->save();

            for($i=1; $i <= 18; $i++){
                
                $scorecard = new Scorecard();
                $scorecard->PlayerID = $request->input('player3');
                $scorecard->RoundID = $request->input('RoundID');
                $scorecard->HoleID = $i;
                $scorecard->score = 0;

                $scorecard->save();
            }

            $match->Player3 = $user3->id;
            $match->RoundPlayer3 = $round->id;
        }

        if($user4){

            $round = new Round();
            $round->TotalScore = 0;
            $round->NumRonda = $request->input('RoundID');
            $round->PlayerID = $request->input('player4');
            $round->MatchID = $match->id;

            $round->save();

            for($i=1; $i <= 18; $i++){
                
                $scorecard = new Scorecard();
                $scorecard->PlayerID = $request->input('player4');
                $scorecard->RoundID = $request->input('RoundID');
                $scorecard->HoleID = $i;
                $scorecard->score = 0;

                $scorecard->save();
            }

            $match->Player4 = $user4->id;
            $match->RoundPlayer4 = $round->id;
        }
        $match->save();


        return back();
    }       
}
