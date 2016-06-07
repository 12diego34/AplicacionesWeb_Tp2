<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModeloUsuario extends Model
{
    protected $table = 'modelo_usuarios';
  	protected $fillable = ['contenido', 'usuario','descripcion','nombre'];
  	protected $guarded = ['id'];

 	public function scopeNombre($query, $nombre)
 	{
 		dd("scope:" . $nombre);
 		$query->where('nombre',$nombre);
 		$modelos = Modelo::nombre($request->get('nombre'));
        return view("listarplantillas",['modelos'=>$modelos]);
    	
 	}
}
