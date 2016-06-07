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
        <p align="right"><span id ="editable" contenteditable="true">Trelew, 17 de junio de 2016</span></p>
    	<b align="left"><span id ="editable" contenteditable="true">Nombre de la empresa</span></b>
        <b align ="left">Sr.(a)<span id="editable" contenteditable="true">Apellido y nombre</span>:</b>          
        <p style="padding-left: 210px;">La dirección de la empresa en conformidad en el artículo N°<span id="editable"contenteditable="true">ARTICULO</span>, del estatuto de trabajadores le comunica la extinción de la relación laboral que nos vincula, con efectos del día (<span id="editable"contenteditable="true">DIA</span>) de mes (<span id="editable"contenteditable="true">MES</span>) de año (<span id="editable"contenteditable="true">AÑO</span>) por alguna de las causas previstas en el artículo N°<span id="editable"contenteditable="true">ARTICULO</span> y en concreto por lo que a continuación se dirá.
        <p style="padding-left: 210px">Hemos de indicarle que, como usted conoce, nuestra empresa viene sufriendo una situación económica negativa en los últimos años.</p>
        <p style="padding-left: 210px">Con la amortización de su puesto de trabajo se reducen los costes de personal, lo que conduce a una mejora en la competitividad de la empresa.</p>
        <p style="padding-left: 210px">Cumpliendo con lo señalado en el art.(<span id="editable"contenteditable="true">NUMEROARTICULO-inciso</span>) del Estatuto de los Trabajadores, se le indemniza con 20 días de salario por año de servicio en la empresa.</p>
        <p style="padding-left: 210px">Los efectos del presente despido por causas objetivas tendrán lugar el próximo día (<span id="editable"contenteditable="true">DIA</span>) de (<span id="editable"contenteditable="true"><strong> MES </strong></span>) de (<span id="editable"contenteditable="true">AÑO</span>).
        </p>
        <p align="center"> Atentamente, </p>
        <br><br>
        <p align="center"> FIRMA Y SELLO DE LA EMPRESA </p>
    </div>
 @endsection