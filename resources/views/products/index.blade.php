@extends('layouts.layout')
@section('title')
	All products
@stop

@section('body')
	<h1>Våre produkter</h1>
	@foreach($products as $product)
		<h2>{{$product->name}}</h2>
		<p>Denne varen koster kr {{$product->price}}.</p>
	@endforeach
@stop