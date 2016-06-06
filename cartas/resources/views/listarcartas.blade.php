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

                        <a href="descargar/'.$carta->nombrearchivo.'" class="btn btn-sm btn-warning">
                        <span class="glyphicon glyphicon-download-alt" title="Descargar"></span></a>
                        
                        <a href="#" type="button" id='.$carta->id.' class="btn btn-sm btn-warning">
                        <span class="glyphicon glyphicon-send" title="Enviar por mail"></span></a>

                        <a href="cartas/'.$carta->id.'/borrar" class="btn btn-sm btn-danger">
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

    <!--Modal-->
    <div class="modal fade" id="modal">
        <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title"></h4>
          </div>
          <div class="modal-body">
            <p></p>
          </div>
        </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Modal -->
    <div class="modal fade" id="mails" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h2 class="modal-title"> Enviar mail</h2>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group input-group-lg">
                                <input id="destinatario" type="text" class="form-control" placeholder="Enviar a..." aria-describedby="sizing-addon1">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <button id="btnEnviarModal" class="btn btn-success pull-right"> Enviar</button> 
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--- Scripts -->    
    <script src="{{ URL::asset('static/js/jquery-2.2.3.min.js') }}"></script>
    <script src="{{ URL::asset('static/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('static/js/miscartas.js') }}"></script>

@endsection