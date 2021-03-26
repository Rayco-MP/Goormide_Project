<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_mascota;
use App\Models\tb_cliente;
use Barryvdh\DomPDF\Facade as PDF;

class tb_mascotaController extends Controller
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
        $tb_mascotas=tb_mascota::all();
		$tb_clientes=tb_cliente::all();
		
		return view("tb_mascotas.index",compact("tb_mascotas","tb_clientes"));
    }

	
	
	
	public function pdf()
	{	
		$tb_mascotas=tb_mascota::all();
		PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
		$pdf = PDF::loadView("tb_mascotas.pdf",compact('tb_mascotas'));
		return $pdf->stream("tb_mascotas.pdf", ['Attachment' => false]);
	}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$tb_clientes=tb_cliente::all();
        return view("tb_mascotas.create",compact("tb_clientes"));
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
		tb_mascota::create($datos);*/
		$validatedData = $request->validate([
                'cliente_id' => 'required',
                'nombre' => 'required',
                'sexo' => 'required',
			 	'raza' => 'required',
			 	'color' => 'required',
			 	'peso' => 'required',
			 	'fecha_nacimiento' => 'required',
			 	'microchip' => 'required|min:15|max:15',
			 	'esterilizado' => 'required',
            ], /*[
                'empresa.required' => 'Empresa is required',
                'cargo_contacto.required' => 'Cargo is required'
            ]*/);
		
		tb_mascota::create($validatedData);
		return  redirect('/tb_mascotas')->with("crear_mascota",'Se ha añadido una mascota correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tb_mascota=tb_mascota::find($id);
		
		return view("tb_mascotas.show",compact("tb_mascota"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tb_mascota=tb_mascota::find($id);
		$tb_clientes=tb_cliente::all();

        return view("tb_mascotas.create", compact("tb_mascota","tb_clientes"));
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
		
		tb_mascota::find($id)->update($datos);
		
		return  redirect('/tb_mascotas')->with("editar_mascota",'Se ha editado una mascota correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tb_mascota::find($id)->delete();
		
		return  redirect('/tb_mascotas')->with("eliminar",'Ok.');
    }
}
