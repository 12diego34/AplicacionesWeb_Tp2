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
        <p>Estimado <span id="editable"contenteditable="true">NOMBRE, APELLIDO</span>:</p>
        <p style="padding-left: 210px;">Lo invito a pariticipar del evento <span id="editable"contenteditable="true">EVENTO</span> a realizarse el dia <span id="editable"contenteditable="true">DIA-DE-EVENTO</span> en <span id="editable"contenteditable="true">LUGAR-EVENTO</span>. <span id="editable"contenteditable="true">MOTIVO-EVENTO</span></p>
        <p>Coordialmente</p>
        <p><span id="editable"contenteditable="true">REMITENTE</span></p>
    </div>
 @endsection