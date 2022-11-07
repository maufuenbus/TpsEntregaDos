<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;


class RegisterController extends Controller
{
    public function create(){
        return view ('admin.gestionUsuario');
    }

    public function store(Request $request){
        $user = User::where('username', $request->username)->first();
        echo ($user);
        if ($user != null) {
            return back()->withErrors([
                'message' => 'Username existe, intente con otro',
            ]);
        }else{
            $user = User::create(request(['name','apellidop','apellidom','rut','role','password','username']));
        }
       /* if (User::where('username', '=', Request::get('username'))->exists()) {
            return back()->withErrors([
                'message' => 'Username existe, intente con otro',
            ]);
         }else{
        $user = User::create(request(['name','apellidop','apellidom','rut','role','password','username']));
         }
        
              /*auth()->Login($user);*/
        return redirect()->to('gestionUsuario');
        
    }

    public function index(){
        $users = User::orderBy('id')->paginate(5);
        return view('admin.gestionUsuario', ['users' => $users]);
    }

    public function show($id){
        $users = User::find($id);
        return view('admin.gestionUsuario', ['users' => $users]);
    }

    public function update(Request $request, $id){
        $users = User::find($id);
        $users ->name = $request -> name;
        $users ->apellidop = $request -> apellidop;
        $users ->apellidom = $request -> apellidom;
        $users ->rut = $request -> rut;
        $users ->username = $request -> username;
        $users ->password = $request -> password;
        $users ->role = $request -> role;
        $users->save();
        //return view('todos.index', ['success' => 'Tarea Actualizada']);
        return redirect()->to('gestionUsuario')->with('success','Usuario Actializado');
    }

    public function destroy($id){
        $users = User::find($id);
        $users->delete();
        return redirect()->to('gestionUsuario')->with('destroy','Usuario Eliminado');
    }
}