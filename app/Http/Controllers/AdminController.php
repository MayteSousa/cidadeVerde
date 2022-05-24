<?php

namespace App\Http\Controllers;
use App\Models\User;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = request('search');

        if($search) {

            $dados = User::where([
                ['name', 'like', '%'.$search.'%'],
                ['administrador', 1]
            ])->orWhere([
                ['email', 'like', '%'.$search.'%'],
                ['administrador', 1]
            ])->orderBy('id')->get();

        } else {
            $dados = User::where([
                ['administrador', 1]
            ])->orderBy('id')->get();
        }        
    
        return view('admin.user_admin.index',['dados' => $dados, 'search' => $search]);
    }

    
    public function create()
    {
        return view('admin.user_admin.create');
    }


    public function store(Request $request)
    {
        User::create($request->all());
        return redirect("admin");
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
        return redirect('admin');
    }


    public function destroy(User $usuario)
    {
        $usuario->delete();
        return redirect('{{admin}}');
    }


}
