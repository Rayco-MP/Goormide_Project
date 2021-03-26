<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_habitacion;
use Barryvdh\DomPDF\Facade as PDF;

class tb_habitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function __construct()
    {

        $this->middleware('auth');

        
    }
	
    public function index()
    {
        $tb_habitaciones=tb_habitacion::all();
		
		return view("tb_habitaciones.index",compact("tb_habitaciones"));
    }

	public function pdf()
	{	
		$tb_habitaciones=tb_habitacion::all();
		PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
		$pdf = PDF::loadView("tb_habitaciones.pdf",compact('tb_habitaciones'));
		return $pdf->stream("tb_habitaciones.pdf", ['Attachment' => false]);
	}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("tb_habitaciones.create");
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
		tb_habitacion::create($datos);*/
		$validatedData = $request->validate([
                'habitacion' => 'required',
                'precio' => 'required',
            ]);
		
		tb_habitacion::create($validatedData);
		return  redirect('/tb_habitaciones')->with("crear_habitacion",'Se ha creado una habitacion correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tb_habitacion=tb_habitacion::find($id);
		
		return view("tb_habitaciones.show",compact("tb_habitacion"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tb_habitacion=tb_habitacion::find($id);

        return view("tb_habitaciones.create", compact("tb_habitacion"));
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
        $datos=$request->all();
		
		tb_habitacion::find($id)->update($datos);
		
		return  redirect('/tb_habitaciones')->with("editar_habitacion",'Se ha editado una habitacion correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tb_habitacion::find($id)->delete();
		
		return  redirect('/tb_habitaciones')->with("eliminar",'Ok.');
    }
}
