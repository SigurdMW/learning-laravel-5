@extends('layouts.layout')
@section('title')
	Create new product
@stop

@section('body')
	{!! Form::open(['route' => 'product.store']) !!}
		{!! Form::label('name','Name') !!}
		{!! Form::text('name', null, [
			'class' 		=> 'form-control',
			'placeholder' 	=> 'name'
		]) !!}

		{!! Form::label('price','Price') !!}
		{!! Form::number('price',null, [
			'class' 		=> 'form-control',
			'placeholder' 	=> 'Price here'
		]) !!}

		{!! Form::submit('Create', [
			'class'			=> 'btn btn-success'
		]) !!}
	{!! Form::close() !!}
@stop