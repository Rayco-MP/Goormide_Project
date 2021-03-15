<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;
use Barryvdh\DomPDF\Facade as PDF;
use Sheets;

class ProveedoresController extends Controller
{	
	/* public function __construct()
    {

        $this->middleware('auth');

        //$this->middleware('gmail');
    }*/
	
	public function cambiarSaldo($id, $cantidad){
		 $p=Proveedor::find($id);
		 $p->saldo=$p->saldo+$cantidad;
		 $p->save();
		 return  redirect('/proveedores');
	 }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function listado($id=-1){
  		$proveedores=Proveedor::all();
		
		return view("proveedores.index",compact("proveedores","id"));
					
	}
	
    public function index()
    {
        $proveedores=Proveedor::Paginate(5);
		return view("proveedores.index", ['proveedores' => $proveedores]);
		
    }
	
	public function index2()
    {
		
        $proveedores=Proveedor::all();
		
		return view("proveedores.index2",compact("proveedores"));
		
    }
	public function index3()
    {
		
        $proveedores=Proveedor::all();
		
		return view("proveedores.index3",compact("proveedores"));
		
    }
	
	public function pdf()
	{	
		$proveedores=Proveedor::all();
		PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
		$pdf = PDF::loadView("proveedores.index2",compact('proveedores'));
		return $pdf->stream("proveedores.pdf", ['Attachment' => false]);
		/*	Instalar composer require barryvdh/laravel-dompdf
			Crear la ruta : Route::get("/proveedores/pdf",[ProveedoresController::class,"pdf"]);
			Crear el metodo: public function pdf()
			Crear la carpeta fonts en storage
			Tipos de salida de dompdf save- stream - download
			Pagina de interes: https://styde.net/genera-pdfs-en-laravel-con-el-componente-dompdf/ ------ https://www.itsolutionstuff.com/post/laravel-8-pdf-laravel-8-generate-pdf-file-using-dompdfexample.html
		*/
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("proveedores.create");
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
		//Proveedor::create($datos);
		//return  redirect('/proveedores');
		 $validatedData = $request->validate([
                'empresa' => 'required',
                'cargo_contacto' => 'required',
                'ciudad' => 'required|min:5'
            ], [
                'empresa.required' => 'Empresa is required',
                'cargo_contacto.required' => 'Cargo is required'
            ]);
		
		Proveedor::create($validatedData);
		return  redirect('/proveedores');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proveedor=Proveedor::find($id);
		
		return view("proveedores.show",compact("proveedor"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proveedor=Proveedor::find($id);

        return view("proveedores.create", compact("proveedor"));
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
		
		Proveedor::find($id)->update($datos);
		
		return  redirect('/proveedores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Proveedor::find($id)->delete();
		
		return  redirect('/proveedores');
    }
}
