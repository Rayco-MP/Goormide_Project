<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Capitan;
class CapitanesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $capitanes=Capitan::all();
		
		return view("capitanes.index",compact("capitanes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("capitanes.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$datos=$request->all();
		Capitan::create($datos);
		return  redirect('/capitanes');*/
		
		$datos=$request->validate([
			'nombre' => 'required',
			'apellidos' => 'required',
			'f_nacimiento' => 'required',
			'email' => 'required|email',
			
			]);
		
		
		Capitan::create($datos);
		return redirect("/capitanes");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Capitan::find($id)->delete();
		
		return  redirect('/capitanes');
    }
}
