<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests;
use App\CartaUsuario as Carta;
use Storage;
use PDF;
use Response;

class PdfController extends Controller
{    
	public function guardar(Request $request){
		$datos = $request->all();
		$usuario = $request->user()->email;
	    $pdf = PDF::loadHTML($datos["contenido"]);
	    $carta = new Carta;
	    $carta->usuario = $usuario;
	    $carta->nombrearchivo = $datos["nombre_archivo"];
	    $carta->patharchivo = storage_path('app/public/'. $carta->nombrearchivo . '.pdf');
		Storage::disk('public')->put($carta->nombrearchivo . ".pdf",$pdf->output());
	    $carta->save();
		return "1";
	}

	public function descargar($nombre){
		$file= storage_path('app')."/".$nombre.".pdf";
        $headers = array(
              'Content-Type: application/pdf',
            );
        return Response::download($file, 'carta.pdf', $headers);
	}
}