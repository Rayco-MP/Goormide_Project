<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\tb_cliente;
use App\Models\tb_mascota;
use App\Models\tb_reserva;

class HighchartController extends Controller
{
	public function __construct()
    {

        $this->middleware('auth');

        
    }
    public function handleChart()
    {
        $clientesData = tb_cliente::select(\DB::raw("COUNT(*) as count"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(\DB::raw("Month(created_at)"))
                    ->pluck('count');
		
		$mascotasData = tb_mascota::select(\DB::raw("COUNT(*) as count"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(\DB::raw("Month(created_at)"))
                    ->pluck('count');
		
		$reservasData = tb_reserva::select(\DB::raw("COUNT(*) as count"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(\DB::raw("Month(created_at)"))
                    ->pluck('count');
          
        return view('tb_highchart.chart', compact('clientesData','mascotasData','reservasData'));
    }
}
