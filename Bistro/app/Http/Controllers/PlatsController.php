<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Plat;

class PlatsController extends Controller
{
    public function index()
    {
        $plats= Plat::all();
        return view('plats.index')->with('plats',$plats);
    }
    public function indexx()
    {
        $plats= Plat::all();
        return view('home')->with('plats',$plats);
    }
    public function create()
    {
        return view('plats.create');
    }
    public function store(Request $request)
    {

        $input=$request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        Plat::create($input);
        return redirect('plat')->with('flash_message', 'Plat Addedd!');
    }
    public function show($id)
    {
       $plat=Plat::find($id);
       return view ('plats.show')->with('plats',$plat); 
    }
    public function edit($id)
    {
        $plat=Plat::find($id);
       return view ('plats.edit')->with('plats',$plat);
    }
    public function update(Request $request, $id)
    {
        $plat=Plat::find($id);
        $input=$request->all();
        $deleteImage = $plat->image ;
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
            File::delete(public_path("images/$deleteImage"));
        } else {
            unset($input['image']);
        }
        $plat->update($input);
        return redirect('plat')->with('flash_message','Plat Updates!');
    }
    public function destroy($id)
    {
        $plat = Plat::find($id);
        Plat::destroy($id);
        File::delete(public_path("images/$plat->image"));
        return redirect('plat')->with('flash_message','Plat deleted!');
    }
}
