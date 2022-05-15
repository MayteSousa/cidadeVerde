<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;

class OnlyUserController extends Controller
{

    
    public function index(Request $request)
    {
        $search = request('search');

        if($search) {

            $dados = User::where([
                ['name', 'like', '%'.$search.'%'],
                ['ecoponto', 0],
                ['administrador', 0]
            ])->orWhere([
                ['email', 'like', '%'.$search.'%'],
                ['ecoponto', 0],
                ['administrador', 0]
            ])->orderBy('id')->get();

        } else {
            $dados = User::where([
                ['ecoponto', 0],
                ['administrador', 0]
            ])->orderBy('id')->get();
        }        
    
        return view('onlyuser.index',['dados' => $dados, 'search' => $search]);
    }


    public function create()
    {
        return view('onlyuser.create');
    }


    public function store(Request $request)
    {
        User::create($request->all());
        return redirect('onlyuser');
    }


    public function show(User $usuario)
    {
        return view('usuario.show')->with('dados',$usuario);  
    }


    public function edit(User $usuario)
    {
        return view('usuario.edit')->with('dados',$usuario); 
    }

    
    public function update(Request $request, User $usuario)
    {
        $usuario->update( $request->all());        
        return redirect('onlyuser');
    }


    public function destroy(User $usuario)
    {
        $usuario->delete();
        return redirect('onlyuser');
    }

}
