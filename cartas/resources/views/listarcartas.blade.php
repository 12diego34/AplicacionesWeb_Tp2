@extends('app')
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> Listado de cartas </title>
    <link rel="stylesheet" href="{{ URL::asset('static/css/fonts.css') }}" media="screen" charset="utf-8">
    <link rel="stylesheet" href="{{ URL::asset('static/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('static/css/styles.css') }}">
    <script src="{{ URL::asset('static/js/jquery-2.2.3.min.js') }}"></script>
    <script src="{{ URL::asset('static/js/bootstrap.min.js')}}"></script>
</head>
@section('vista')
    <div class="container2">
        <div class="cabecera">
            <h2><p style="color:orange;"> Cartas </p></h2>
            <div class="cabecera2">
                <table  class="table table-striped table-bordered table-condensed">
                   <thead>
                        <tr>
                            <th style="text-align:center;" width="6%"> ID </th>       
                            <th style="text-align:center;" width="35%"> Nombre </th>
                            <th style="text-align:center;" width="35%"> Usuario </th>       
                            <th> Opciones </th>    
                        </tr>
                    </thead>
                    @foreach ($cartas as $carta)
                    <?php
                        echo "<tr>";
                        echo "<td>".$carta->id."</td>";
                        echo "<td>".$carta->nombrearchivo."</td>";
                        echo "<td>".$carta->usuario."</td>";
                        echo '<td> 
                        <a href="#" type="button" id='.$carta->id.' class="btn btn-sm btn-warning">
                        <span class="glyphicon glyphicon-send" title="Enviar por mail"></span></a>

                        <a href="descargar/'.$carta->id.'" class="btn btn-sm btn-warning">
                        <span class="glyphicon glyphicon-download-alt" title="Descargar"></span></a>
                        
                        <a href="cartas/'.$carta->id.'/borrar" class="btn btn-sm btn-warning">
                        <span class="glyphicon glyphicon-trash" title="Eliminar"></span></a>
                        </td>';
                        echo "</tr>";
                    ?>
                    @endforeach
                </table>
            </div>
        </div>          
    </div>
    <script src="{{ URL::asset('static/js/jquery-2.2.3.min.js') }}"></script>
    <script src="{{ URL::asset('static/js/bootstrap.min.js') }}"></script>
@endsection