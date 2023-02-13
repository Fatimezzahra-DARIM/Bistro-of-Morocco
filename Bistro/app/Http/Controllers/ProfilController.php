<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    public function index()
    {
        $profils = User::all();
        return view ('profil.index')->with('profils', $profils);
    }
    
    // public function create()
    // {
    //     return view('profils.create');
    // }
  
    // public function store(Request $request)
    // {
    //     $input = $request->all();
    //     User::create($input);
    //     return redirect('profil')->with('flash_message', 'profil Addedd!');  
    // }
    
    // public function show($id)
    // {
    //     $profil = User::find($id);
    //     return view('profils.show')->with('profils', $profil);
    // }
    
    public function edit()
    {
        
        $profil = User::find(Auth::user()->id);
        return view('profil.edit')->with('profils', $profil);
    }

    public function update(Request $request, $id)
    {
        $profil = User::find($id);
        $profil ->fill($request->all()) ;
        $profil->update();
        return redirect()->back()->with('flash_message', 'profil Updated!');
    }
    public function updatePassword(Request $request)
    {
        $profil = User::findOrFail(Auth::user()->id);
       $validated = $request->validate([
        'oldPassword'=> 'required',
        'newPassword'=> 'required',
        'confirmPassword'=> 'required|same:newPassword',
       ]);
    //    echo  Hash::make($validated['oldPassword']);
    //    echo '<hr>'. Auth::user()->password;
        if( Hash::check($validated['oldPassword'] , Auth::user()->password)){
            $profil->password = Hash::make($validated['newPassword']);
            $profil->update();

            return redirect()->back()->with('flash_message', 'profil Updated!');
        }
        
        return redirect()->back()->with('error_message', 'Password incorrect!');
    }
    
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('profil')->with('flash_message', 'profil deleted!');  
    }
    public function changeRole($id){
        $user = User::find($id);
        if(!$user->role){
            $user->role=true;

        }else{
            $user->role = false;
        }
        $user->save(); 
        return redirect('profil')->with('flash_message', 'Role changed!');
    }
}
