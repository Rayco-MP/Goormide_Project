<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_reserva;
use App\Models\tb_mascota;
use App\Models\tb_dieta;
use App\Models\tb_habitacion;
use Barryvdh\DomPDF\Facade as PDF;

class tb_reservaController extends Controller
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
        $tb_reservas=tb_reserva::all();
		
		$tb_mascotas=tb_mascota::all();
		$tb_habitaciones=tb_habitacion::all();
		$tb_dietas=tb_dieta::all();
		
		return view("tb_reservas.index",compact("tb_reservas","tb_mascotas","tb_habitaciones","tb_dietas"));
    }

	
	public function pdf()
	{	
		$tb_reservas=tb_reserva::all();
		PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
		$pdf = PDF::loadView("tb_reservas.pdf",compact('tb_reservas'));
		return $pdf->stream("tb_reservas.pdf", ['Attachment' => false]);
	}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$tb_mascotas=tb_mascota::all();
		$tb_habitaciones=tb_habitacion::all();
		$tb_dietas=tb_dieta::all();
        return view("tb_reservas.create",compact("tb_mascotas","tb_habitaciones","tb_dietas"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* $datos=$request->all();
		tb_reserva::create($datos);*/
		$validatedData = $request->validate([
                'pide_reserva' => 'required',
                'entrada' => 'required',
				'hora_entrada' => 'required',
                'salida' => 'required',
				'hora_salida' => 'required',
			 	'mascota_id' => 'required',
			 	'habitacion_id' => 'required',
			 	'dieta_id' => 'required',
            ]);
		tb_reserva::create($validatedData);
		return  redirect('/tb_reservas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tb_reserva=tb_reserva::find($id);
		
		return view("tb_reservas.show",compact("tb_reserva"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tb_reserva=tb_reserva::find($id);
		
		$tb_mascotas=tb_mascota::all();
		$tb_habitaciones=tb_habitacion::all();
		$tb_dietas=tb_dieta::all();

        return view("tb_reservas.create", compact("tb_reserva","tb_mascotas","tb_habitaciones","tb_dietas"));
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
		
		tb_reserva::find($id)->update($datos);
		
		return  redirect('/tb_reservas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tb_reserva::find($id)->delete();
		
		return  redirect('/tb_reservas');
    }
}
