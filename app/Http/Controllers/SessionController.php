<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionController extends Controller
{
    public function create(){
        return view ('auth.tpsLogin');
    }

    public function store(){
        if(auth()->attempt(request(['username','password'])) == false){
            return back()->withErrors([
                'message' => 'Usuario o contraseña incorrecta, intentelo de nuevo',
            ]);
        } else {
            if(auth()->user()->role == 'admin'){
                return redirect()->to('gestionUsuario');
            }else{
                return redirect()->to('index');
            }


        }
        

    }

    public function destroy(){

        auth()->logout();

        return redirect()->to('/');
    }

    
}

