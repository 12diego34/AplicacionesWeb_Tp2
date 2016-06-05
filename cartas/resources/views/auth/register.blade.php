<!-- resources/views/auth/register.blade.php -->
@extends('index')
@section('dynamic-content')

    <div class="col-lg-6 col-lg-offset-3 col-xs-12">

        <h2 class="text-center custom-header">Registrarse como usuario</h2>
        <hr>
        <!-- will be used to show any messages -->
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif
            @include('errors.errors')

        <form method="POST" action="register">
            {!! csrf_field() !!}
            <div class="form-group">
                {!! Form::label('nombre', 'Nombre:', ['class' => 'control-label']) !!}
                {!! Form::text('name', old('name'), array('placeholder'=>'Ingresa tu nombre', 'class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('apellido', 'Apellido:', ['class' => 'control-label']) !!}
                {!! Form::text('lastname', old('lastname'), array('placeholder'=>'Ingresa tu apellido', 'class' => 'form-control')) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email', 'Correo electrónico:', ['class' => 'control-label']) !!}
                {!! Form::email('email', old('email'), array('placeholder'=>'Ingresa tu correo electrónico', 'class' => 'form-control')) !!}
            </div>

            
            <div class="form-group">
                {!! Form::label('password', 'Contraseña:', ['class' => 'control-label']) !!}
                {!! Form::password('password', array('placeholder'=>'Ingesa tu contraseña', 'class'=>'form-control' ) ) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password_confirmation', 'Confirma tu contraseña:', ['class' => 'control-label']) !!}
                {!! Form::password('password_confirmation', array('placeholder'=>'Ingesa tu contraseña', 'class'=>'form-control' ) ) !!}
            </div>
            {!! Form::submit('Registrar', ['class' => 'btn btn-default btn-full-width lead']) !!}
            <br>
        </form>
    </div>
@endsection
