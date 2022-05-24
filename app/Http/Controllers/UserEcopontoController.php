<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;

class UserEcopontoController extends Controller
{

    public function index(Request $request)
    {
        $search = request('search');

        if($search) {

            $dados = User::where([
                ['name', 'like', '%'.$search.'%'],
                ['ecoponto', 1]
            ])->orWhere([
                ['email', 'like', '%'.$search.'%'],
                ['ecoponto', 1]
            ])->orderBy('id')->get();

        } else {
            $dados = User::where([
                ['ecoponto', 1]
            ])->orderBy('id')->get();
        }        
    
        return view('admin.user_ecoponto.index',['dados' => $dados, 'search' => $search]);
    }


    public function create()
    {
        return view('admin.user_ecoponto.create');
    }


    public function store(Request $request)
    {
        User::create($request->all());
        return redirect("admin.user_ecoponto");
    }


    public function show(User $usuario)
    {
        return view('admin.user_usuario.show')->with('dados',$usuario);  
    }


    public function edit(User $usuario)
    {
        return view('admin.user_usuario.edit')->with('dados',$usuario); 
    }

    
    public function update(Request $request, User $usuario)
    {
        $usuario->update( $request->all());        
        return redirect('user_ecoponto');
    }


    public function destroy(User $usuario)
    {
        $usuario->delete();
        return redirect('admin.user_ecoponto');
    }


}
