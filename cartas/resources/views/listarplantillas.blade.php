@extends('app')
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> Listado de plantillas </title>
    <link rel="stylesheet" href="{{ URL::asset('static/css/fonts.css') }}" media="screen" charset="utf-8">
    <link rel="stylesheet" href="{{ URL::asset('static/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('static/css/styles.css') }}">
    <script src="{{ URL::asset('static/js/jquery-2.2.3.min.js') }}"></script>
    <script src="{{ URL::asset('static/js/bootstrap.min.js')}}"></script>
        

</head>
@section('vista')
    <div class="container2">
        <div class="cabecera"> 
        
            <a href="{{ URL::to('crear_plantilla') }}" class="btn btn-warning pull-right">
            <span class=" glyphicon glyphicon-plus" title="Nueva"></span></a>         
        
            <h2><p style="color:orange;"> Plantillas</p></h2>       
                    <!--
        
                <form class="navbar-form navbar-left pull-right" role="search">
                    <div class="form-group">
                        <input type= "text" class="form-control" placeholder="search">
                    </div>
                    <button type="submit" class="btn btn-default">Buscar </button>
                </form>
                'route' => 'views.listar_plantillas',-->

                {!!Form::open(['method' =>'GET','class'=>'navbar-form navbar-left pull-right', 'role'=>'search'])!!}
                    <div class="form-group">

                        {!! Form::text ('nombre',null,['class' => 'form-control','placeholder'=>'Nombre plantilla'])!!}
                    </div>      
                    <button type="submit" class="btn btn-default">Buscar </button>
                {!!Form::close() !!}

            <div class="cabecera2">
                <table  class="table table-striped table-bordered table-condensed">
                   <thead>
                        <tr>
                            <th style="text-align:center;" width="4%"> ID </th>       
                            <th style="text-align:center;" width="15%"> Fecha</th>
                            <th style="text-align:center;" width="22%"> Nombre </th>       
                            <th> Descripcion </th>    
                            <th> Opciones </th>    
                        </tr>
                    </thead>
                    @foreach ($modelos as $modelo)
                    <?php
                        echo "<tr>";
                        echo "<td>".$modelo->id."</td>";
                        echo "<td>".$modelo->created_at."</td>";
                        echo "<td>".$modelo->nombre."</td>";
                        echo "<td>".$modelo->descripcion."</td>";
                        echo '<td> 
                        <a href="plantillas/'.$modelo->id.'" class="btn btn-sm btn-warning">
                        <span class="glyphicon glyphicon-pencil" title="Editar"></span></a>         
                        <a href="plantillas/'.$modelo->id.'/borrar" class="btn btn-sm btn-warning">
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