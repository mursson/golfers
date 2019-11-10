<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
	public function index(){

		//$users = User::all();
		$users = User::where('role', 1)->get();

		return view('admin.users.index')->with(compact('users'));
	}

	public function store(Request $request){
		
		$rules = [
			'nombre' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|min:4'
		];

		$messages = [
			'nombre.required' => 'Es necesario ingresar el nombre del usuario.',
			'nombre.max' => 'El nombre es demasiado largo.',
			'email.required' => 'Es indispensable ingresar el e-mail del usuario.',
			'email.email' => 'El e-mail ingresado no es válido.',
			'email.max' => 'El e-mail es demasiado extenso.',
			'email.unique' => 'El e-mail ya se encuentra en uso.',
			'password.required' => 'Olvidó ingresar una contraseña',
			'password.min' => 'La contraseña debe tener al menos 4 caracteres.'
		];	

		$this->validate($request, $rules, $messages);

		$user= new User();

		$user->name = $request->input('nombre');
		$user->email = $request->input('email');
		$user->password = bcrypt($request->input('password'));
		$user->role = 1;

		$user->save();

		//dd($request->all());

		return back()->with('notification','Usuario registrado exitosamente.');
	}	
	public function edit($id){

		$user = User::find($id);

		//dd(compact('user'));

		return view('admin.users.edit')->with(compact('user'));
	}

	public function update($id, Request $request){

		$rules = [
			'nombre' => 'required|max:255',
			'password' => 'required|min:4'
		];

		$messages = [
			'nombre.required' => 'Es necesario ingresar el nombre del usuario.',
			'nombre.max' => 'El nombre es demasiado largo.',
			'password.min' => 'La contraseña debe tener al menos 4 caracteres.'
		];			

		$this->validate($request, $rules, $messages);

		$user = User::find($id);

		$user->name = $request->input('nombre');

		$password = $request->input('password');
		if($password)
			$user->password = bcrypt($password);

		$user->save();

		return back()->with('notification','Usuario registrado exitosamente.');
	}

	public function delete($id){

		$user = User::find($id);
		$user->delete();

		return back()->with('notification','El usuario se ha dado de baja correctamente.');
	}
}
