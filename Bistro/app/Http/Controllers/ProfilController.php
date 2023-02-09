<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
    
    public function edit($id)
    {
        $profil = User::find($id);
        return view('profil.edit')->with('profils', $profil);
    }

    public function update(Request $request, $id)
    {
        $profil = User::find($id);
        $profil ->fill($request->all()) ;
        $profil->update();
        return redirect()->back()->with('flash_message', 'profil Updated!');
    }
    
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('profil')->with('flash_message', 'profil deleted!');  
    }
}
