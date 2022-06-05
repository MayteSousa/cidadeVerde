<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{

    public function changePassword()
    {
        return view('auth.passwords.change');
    }


    public function updatePassword(Request $request)
    {
        # Validation
            $request->validate([
                'old_password' => 'required',
                'new_password' => 'required|confirmed',
            ]);
    
    
        #Match The Old Password
            if(!Hash::check($request->old_password, auth()->user()->password)){
                return back()->with("error", "{{__('Senha antiga não confere!')}}");
            }
    
    
        #Update the new Password
            User::whereId(auth()->user()->id)->update([
                'password' => Hash::make($request->new_password)
            ]);
    
            return back()->with("status", "{{ __('Senha alterada com sucesso!')}}");
    }

    public function contarUsuarios() {
        
        $only_users = User::where('administrador',false AND 'ecoponto',false)->count();

        $only_admin = User::where('administrador','=',1)->count();

        $only_ecoponto = User::where('ecoponto','=',1)->count();

        $users_total=DB::table('users')->count();

        
        return view('home')->with(
            [
                'qtd_user' => $only_users,
                'qtd_admin' => $only_admin,
                'qtd_ecoponto' => $only_ecoponto,
                'qtd_total' => $users_total
            ]
        );
    }



    public function index(Request $request)
    {
        $usuarios = User::paginate(10);
       
       
       $search = $request->search;
       $usuarios = User::where(function ($query) use ($search) {
           if($search){
               $query->where('email','LIKE', "%$search%")
               ->orwhere('name','LIKE', "%{$search}%");
           }
       })->orderBy('id')->get();

        return view('admin.user_usuario.index')->with('dados',$usuarios);
    }


    public function create()
    {
        return view('admin.user_usuario.create');
    }


    public function store(Request $request)
    {
        User::create($request->all());
        return redirect("usuario");
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
        return redirect('usuario');
    }


    public function destroy(User $usuario)
    {
        $usuario->delete();
        return redirect('usuario');
    }



}
