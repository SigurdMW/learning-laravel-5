@extends('layouts.layout')

@section('body')
{!! Form::open(['url' => 'articles']) !!}
	<h1>New article</h1>
	@include('articles.form',['submitButtonText' => 'Add article'])
{!! Form::close() !!}
@include('errors.list')
@stop