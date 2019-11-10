<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Course;
use App\Hole;

class CourseController extends Controller
{
	public function index(){

		$courses = Course::all();
		//$users = Course::where('role', 1)->get();
		//dd(compact('courses'));
		return view('admin.courses.index')->with(compact('courses'));
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

		$course= new Course();

		$course->Name = $request->input('Name');
		$course->HoleCount = $request->input('HoleCount');
		$course->Par = $request->input('Par');
		$course->Rating = $request->input('Rating');
		$course->BogeyRating = $request->input('BogeyRating');

		$course->save();

		//dd($request->all());

		return back()->with('notification','Course added.');
	}	
	public function edit($CourseID){

		$course = Course::find($CourseID);

		//$holes= Hole::find($CourseID);
		$holes = Hole::where('CourseID', $CourseID)->get();
		//$course = Course::where('CourseID', $CourseID)->get();

		//dd(compact('course','holes'));
		return view('admin.courses.edit')->with(compact('course','holes'));
	}

	public function update($CourseID, Request $request){

		$rules = [
			'Name' => 'required|max:255',
			'HoleCount' => 'required|min:1'
		];

		$messages = [
			'Name.required' => 'Es necesario ingresar el nombre del usuario.',
			'Name.max' => 'El nombre es demasiado largo.',
			'HoleCount.min' => 'HoleCount debe tener al menos 1 caracteres.'
		];			

		$this->validate($request, $rules, $messages);

		$course = Course::find($CourseID);
		//$course = Course::where('CourseID', $CourseID)->get();

		$course->Name = $request->input('Name');
		$course->HoleCount = $request->input('HoleCount');
		$course->Par = $request->input('Par');
		$course->Rating = $request->input('Rating');
		$course->BogeyRating = $request->input('BogeyRating');


		$course->save();

		return back()->with('notification','Course updated.');
	}

	public function delete($CourseID){

		$course = Course::find($CourseID);
		$course->delete();

		return back()->with('notification','Course deleted');
	}
}
