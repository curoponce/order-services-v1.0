<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Orden;
use App\User;
use App\Http\Controllers\Controller;

class ReporteController extends Controller
{
    public function generarPdfOrdenes()
    {
        $ordenes = Orden::orderBy('id', 'ASC')->get();

        $view = view('backend.ordenes.reporte-pdf')->with(compact(['ordenes']))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream();
    }

    public function generarPdfUsuarios(Request $request)
    {
        $usuarios = User::orderBy('id', 'ASC')->get();

        $view = view('backend.usuarios.reporte-pdf')->with(compact(['usuarios']))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream();
    }
}
