@extends('layouts/layout')

@section('title')
    contact
@stop

@section('body')
   <h1>Contact us</h1>
   {!! Form::text('price') !!}
   {!! Form::text('price2', '', [
   		'class'			=> 'form-control btn',
   		'placeholder' 	=> 'This is the price'
   ]) !!}
   {!! Form::number('level',10,[
   	'max'	=> 10,
   	'min' 	=> 1
   ]) !!}
@stop