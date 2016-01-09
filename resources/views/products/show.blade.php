@extends('layouts.layout')

@section('title')
	{{ $product->name }}
@stop

@section('body')
	<h1>{{ $product->name }}</h1>
	<p>Spesialtilbud! Vår pris er {{ $product->price }}</p>
	{!! Form::open([
		'method'	=> 'delete',
		'route'		=> ['product.destroy', $product->id]
	]) !!}
	{!! Form::submit('delete') !!}
	{!! Form::close()!!}
	<a href="{{route('product.edit',$product->id)}}">Edit</a>
@stop