<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_cliente;
use App\Models\tb_mascota;
use Barryvdh\DomPDF\Facade as PDF;

class tb_clienteController extends Controller
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
        $tb_clientes=tb_cliente::all();
		$tb_mascotas=tb_mascota::all();
		return view("tb_clientes.index",compact("tb_clientes","tb_mascotas"));
    }
	
	/*public function caninis()
	{
		return view("tb_clientes.caninis");
	}*/

	public function pdf()
	{	
		$tb_clientes=tb_cliente::all();
		PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
		$pdf = PDF::loadView("tb_clientes.pdf",compact("tb_clientes"));
		$pdf->setPaper('A4', 'landscape');
		return $pdf->stream("tb_clientes.pdf", ['Attachment' => false]);
	}
	
	
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("tb_clientes.index");
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
		tb_cliente::create($datos);*/
		 $validatedData = $request->validate([
                'nombre' => 'required',
                'apellidos' => 'required',
                'direccion' => 'required',
			 	'cp' => 'required',
			 	'localidad' => 'required',
			 	'provincia' => 'required',
			 	'pais' => 'required',
			 	'telefono' => 'required',
			 	'email' => 'required',
			 	'nif' => 'required|regex:/^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]$/',
            ], /*[
                'empresa.required' => 'Empresa is required',
                'cargo_contacto.required' => 'Cargo is required'
            ]*/);
		
		tb_cliente::create($validatedData);
		return  redirect('/tb_clientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tb_cliente=tb_cliente::find($id);
		
		return view("tb_clientes.show",compact("tb_cliente"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tb_cliente=tb_cliente::find($id);

        return view("tb_clientes.create", compact("tb_cliente"));
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
		
		tb_cliente::find($id)->update($datos);
		
		return  redirect('/tb_clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tb_cliente::find($id)->delete();
		
		return  redirect('/tb_clientes');
    }
}
