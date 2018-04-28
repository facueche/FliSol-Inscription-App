{{--
/*
 * Copyright (c) 2017 Daniel Echenique <facueche@gmail.com>.
 *
 * This file is part of FliSol Inscription App.
 *
 * FliSol Inscription App is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * (at your option) any later version.
 *
 * FliSol Inscription App is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with FliSol Inscription App.  If not, see <http://www.gnu.org/licenses/>.
 */
 --}}

@extends('templates.mainView')

@section('Title', 'GNU/Linux Norte')

@section('Body')
    {!! Form::open(['route' => 'user.postForm', 'method' => 'POST',]) !!}
        @csrf
        <div class="form-group">
            {!! Form::label('first_name', 'Nombre') !!}
            {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'Ingresa tu nombre', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('last_name', 'Apellido') !!}
            {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Ingresa tu apellido', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('dni', 'DNI') !!}
            {!! Form::text('dni', null, ['class' => 'form-control', 'placeholder' => 'Ingresa tu DNI', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email') !!}
            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Ingresa tu E-Mail', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Registrarse', ['class' => 'btn btn-primary', 'onclick' => 'onSubmitClick()']) !!}
        </div>
    {!! Form::close() !!}
@endsection