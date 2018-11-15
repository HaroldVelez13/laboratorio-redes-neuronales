@extends('layouts.app')

@section('content')

@if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <h1> Añadir nuevo usuario</h1>


    {!! Form::open(['route' => 'users.store']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Direccion', 'Dirección', ['class' => 'control-label']) !!}
        {!! Form::text('Direccion', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Crear un nuevo usuario', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}

@stop
