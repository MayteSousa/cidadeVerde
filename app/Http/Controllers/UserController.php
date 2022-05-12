<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{

    public function index(Request $request)
    {
       // $usuarios = User::paginate(10);
       
       
       $search = $request->search;
       $usuarios = User::where(function ($query) use ($search) {
           if($search){
               $query->where('email','LIKE', "%$search%")
               ->orwhere('name','LIKE', "%{$search}%");
           }
       })->orderBy('id')->get();

        return view('usuario.index')->with('dados',$usuarios);
    }


    public function create()
    {
        return view('usuario.create');
    }


    public function store(Request $request)
    {
        User::create($request->all());
        return redirect("usuario");
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
        return redirect('usuario');
    }


    public function destroy(User $usuario)
    {
        $usuario->delete();
        return redirect('usuario');
    }


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
                return back()->with("error", "Old Password Doesn't match!");
            }
    
    
        #Update the new Password
            User::whereId(auth()->user()->id)->update([
                'password' => Hash::make($request->new_password)
            ]);
    
            return back()->with("status", "{{__('Password changed successfully!')}}");
    }


}
