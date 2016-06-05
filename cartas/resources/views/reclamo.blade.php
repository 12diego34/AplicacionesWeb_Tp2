@extends('editarplantilla')
@section('contenidoCarta')
    <style type="text/css">
        #editable {
          background-color: orange;
          border-radius: 2px;
          outline: none;
          border: 2px solid transparent;

        }
        #editable:focus{
            background-color: #FFF;
            border-color: black;
        }
        #contenido{
            display: block;
            width: 100%;            
            padding: 10px 15px;
            font-size: 15px;
            line-height: 1.42857143;
            color: #2c3e50;
            background-color: #ffffff;
            border: 1px solid #dce4ec;
            border-radius: 4px;
          -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
          box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
          -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
          -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
          transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            border-radius: 2px;
            padding: 20px;
        }
    </style>
   <div class="cabecera2" id="contenido">
    	<p align="right"> <span id ="editable" contenteditable="true">Trelew 17 de Junio de 2016</span></p>
        <p>Estimado <span id="editable"contenteditable="true">Atte. Ing. Luis Peréz </span></p>
        <p> <span id="editable" contenteditable="true">Gerente de Servicios</span></span>:</p>
        <p style="padding-left: 210px;">Por medio de la presente me quiero comunicar a fin de hacer saber mi problema en torno a <span id="editable"contenteditable="true">PROBLEMAS</span>, me ubico en el barrio: <span id="editable"contenteditable="true">BARRIOS</span> de la ciudad de <span id="editable"contenteditable="true">CIUDAD</span>.Espero una pronta respuesta, sin más me despido atte dejando mis datos para contacto.
        <p align="right"><span id="editable"contenteditable="true">APELLIDO Y NOMBRE</span></p>
        <p align="right">DNI:<span id="editable"contenteditable="true">NUMERODNI</span></p>
        <p align="right">Dirección:<span id="editable"contenteditable="true">DIRECCION</span></p>
        <p align="right"><span id="editable"contenteditable="true">TELEFONO</span></p>
        <p align="right">Email:<span id="editable"contenteditable="true">CORREOELECTRONICO</span></p>
    </div>
@endsection
