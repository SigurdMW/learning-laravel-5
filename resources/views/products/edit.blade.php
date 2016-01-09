@extends('layouts.layout')

@section('title')
	Edit {{ $product->name }}
@stop

@section('body')
	{!! Form::model($product, [
		'method'	=> 'patch',
		'route'		=> ['product.update', $product->id]
	]) !!}

		{!! Form::label('name','Name') !!}
		{!! Form::text('name', $product->name, [
			'class' 		=> 'form-control',
			'placeholder' 	=> 'name'
		]) !!}

	
		{!! Form::label('price','Price') !!}
		{!! Form::number('price',$product->price, [
			'class' 		=> 'form-control',
			'placeholder' 	=> 'Price here'
		]) !!}

		{!! Form::submit('Update', [
			'class'			=> 'btn btn-info'
		]) !!}
	{!! Form::close()!!}
@stop