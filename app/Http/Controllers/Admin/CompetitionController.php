<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Competition;

class CompetitionController extends Controller
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

	public function index(){

		$competitions = Competition::all();

		//dd(compact('competitions'));
		return view('admin.competitions.index')->with(compact('competitions'));
	}
	
	public function store(Request $request){
		
		$rules = [
			'Name' => 'required|max:255',
			'Type' => 'required|min:1'
		];

		$messages = [
			'Name.required' => 'Es necesario ingresar el nombre del usuario.',
			'Name.max' => 'El nombre es demasiado largo.',
			'Type.required' => 'Olvidó ingresar un Type',
			'HoleCount.min' => 'Type debe tener al menos 1 caracteres.'
		];	

		$this->validate($request, $rules, $messages);

		$competition= new Competition();

		$competition->Name = $request->input('Name');
		$competition->Type = $request->input('Type');
		
		$competition->save();

		//dd($request->all());

		return back()->with('notification','Competition added.');
	}	
	
	public function edit($CompetitionID){

		$competition = Competition::find($CompetitionID);


		//dd(compact('competition'));
		return view('admin.competitions.edit')->with(compact('competition'));
	}


	public function update($CompetitionID, Request $request){

		$rules = [
			'Name' => 'required|max:255',
			'Type' => 'required|min:1'
		];

		$messages = [
			'Name.required' => 'Es necesario ingresar el nombre de la competition.',
			'Name.max' => 'El nombre es demasiado largo.',
			'Type.min' => 'HoleCount debe tener al menos 1 caracteres.'
		];			

		$this->validate($request, $rules, $messages);

		$competition = Competition::find($CompetitionID);

		$competition->Name = $request->input('Name');
		$competition->Type = $request->input('Type');

		$competition->save();

		return back()->with('notification','Competition updated.');
	}

	public function delete($CompetitionID){

		$competition = Competition::find($CompetitionID);
		$competition->delete();

		return back()->with('notification','Course deleted');
	}	
}
