<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Taxi;
use App\Rules\dni;

class TaxisController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');

        $this->middleware('tesla')->only('store');

       
    }
	
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $taxis=Taxi::all();
		
		return view("taxis.index",compact("taxis"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("taxis.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$datos=$request->all();
		//Taxi::create($datos);
		//return redirect("/taxis");
		
		/*$datos=$request->validate([
			'matricula' => 'required',
			'modelo' => 'required',
			'f_matriculacion' => 'required',
			'dni_chofer' => 'required|regex:/^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]$/',
			'kms' => 'required',
			'fecha_alta' => 'required'
			
			], [
            'matricula.required' => 'Matricula is required',
			'modelo.required' => 'Modelo is required',
			'f_matriculacion.required' => 'Fecha matriculacion is required',
            'dni_chofer.required' => 'dni is required',
			'kms.required' => 'Kms is required',
			'fecha_alta.required' => 'Fecha alta is required',
		]);*/
		$datos=$request->validate([
			'matricula' => 'required',
			'modelo' => 'required',
			'f_matriculacion' => 'required',
			'dni_chofer' => ['required', new dni],
			'kms' => 'required|integer|between:5,100',
			'fecha_alta' => 'required'
			
			] /*,[
            'matricula.required' => 'Matricula is required',
			'modelo.required' => 'Modelo is required',
			'f_matriculacion.required' => 'Fecha matriculacion is required',
			'kms.required' => 'Kms is required y tiene que estar entre 5 y 100',
			'fecha_alta.required' => 'Fecha alta is required',
		]*/);
		//$datos->validate($request, ['dni_chofer' => ['required', new dni]]);
		
		Taxi::create($datos);
		return redirect("/taxis");
		
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
        //
    }
}
