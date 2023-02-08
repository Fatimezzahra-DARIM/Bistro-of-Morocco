<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plat;

class PlatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */ 
    // @return \Illuminate\Http\Response
    public function index()
    {
        $plats= Plat::all();
        return view('plats.index')->with('plats',$plats);
    }

    /**
     * Show the form for creating a new resource.
     *
     * 
     */
    // @return \Illuminate\Http\Response
    public function create()
    {
        return view('plats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * 
     */
    // @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    public function store(Request $request)
    {
        $input=$request->all();
        Plat::create($input);
        return redirect('plat')->with('flash_message', 'Plat Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * 
     */
    // @param  int  $id
    //  * @return \Illuminate\Http\Response
    public function show($id)
    {
       $plat=Plat::find($id);
       return view ('plats.show')->with('plats',$plat); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     *
     */
    //  @param  int  $id
    //  * @return \Illuminate\Http\Response
    public function edit($id)
    {
        $plat=Plat::find($id);
       return view ('plats.edit')->with('plats',$plat);
    }

    /**
     * Update the specified resource in storage.
     *
     * 
     */
    // @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    public function update(Request $request, $id)
    {
        $plat=Plat::find($id);
        $input=$request->all();
        $plat->update($input);
        return redirect('plat')->with('flash_message','Plat Updates!');
    }

    /**
     * Remove the specified resource from storage.
     *
     *
     */
    //  @param  int  $id
    //  * @return \Illuminate\Http\Response
    public function destroy($id)
    {
        Plat::destroy($id);
        return redirect('plat')->with('flash_message','Plat deleted!');
    }
}
