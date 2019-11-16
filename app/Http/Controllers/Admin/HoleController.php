<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Hole;

class HoleController extends Controller
{
	public function index($CourseID){

		$holes = Hole::all();
		//$holes = Hole::where('id', $HoleID)->get();
		//dd(compact('holes'));
		return view('admin.courses.holes.index')->with(compact('holes'))->with('CourseID');
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

		$this->validate($request, $rules, $messages);


		//dd($request->all());

		return back()->with('notification','Course added.');
	}	
	
	public function edit($HoleID){

		$hole = Hole::find($HoleID);

		//dd(compact('competition'));
		return view('admin.courses.holes.edit')->with(compact('hole'));
	}


	public function update($HoleID, Request $request){

		$rules = [
			'Name' => 'required|max:255',
			'Type' => 'required|min:1'
		];

		$messages = [
			'Name.required' => 'Es necesario ingresar el nombre de la competition.',
			'Name.max' => 'El nombre es demasiado largo.',
			'Type.min' => 'HoleCount debe tener al menos 1 caracteres.'
		];			

		//$this->validate($request, $rules, $messages);

		$hole = Hole::find($HoleID);

		$hole->Name = $request->input('Name');
		$hole->Type = $request->input('Type');

		$competition->save();

		return back()->with('notification','Competition updated.');
	}

	public function delete($CompetitionID){

		$competition = Competition::find($CompetitionID);
		$competition->delete();

		return back()->with('notification','Course deleted');
	}	
}
