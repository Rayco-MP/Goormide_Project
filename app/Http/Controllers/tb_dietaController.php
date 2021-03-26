<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_dieta;
use Barryvdh\DomPDF\Facade as PDF;

class tb_dietaController extends Controller
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
        $tb_dietas=tb_dieta::all();
		
		return view("tb_dietas.index",compact("tb_dietas"));
    }

	
	public function pdf()
	{	
		$tb_dietas=tb_dieta::all();
		PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
		$pdf = PDF::loadView("tb_dietas.pdf",compact('tb_dietas'));
		return $pdf->stream("tb_dietas.pdf", ['Attachment' => false]);
	}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("tb_dietas.create");
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
		tb_dieta::create($datos);*/
		$validatedData = $request->validate([
                'tipo_dieta' => 'required',
                'precio' => 'required',
            ]);
		
		tb_dieta::create($validatedData);
		return  redirect('/tb_dietas')->with("crear_dieta",'Se ha añadido una dieta correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tb_dieta=tb_dieta::find($id);
		
		return view("tb_dietas.show",compact("tb_dieta"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tb_dieta=tb_dieta::find($id);

        return view("tb_dietas.create", compact("tb_dieta"));
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
		
		tb_dieta::find($id)->update($datos);
		
		return  redirect('/tb_dietas')->with("editar_dieta",'Se ha editado una dieta correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tb_dieta::find($id)->delete();
		
		return  redirect('/tb_dietas')->with("eliminar",'Ok.');
    }
}
