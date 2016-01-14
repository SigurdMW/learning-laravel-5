@extends('layouts.layout')

@section('body')
{!! Form::open(['url' => 'articles']) !!}
	<div class="form-group">
		{!! Form::label('title', 'Name:') !!}
		{!! Form::text('title', null, ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('body', 'Body:') !!}
		{!! Form::textarea('body', null, ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('publish_at', 'Publish on:') !!}
		{!! Form::input('date', 'published_at', date('Y-m-d'), ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Add article', ['class'=>'btn btn-primary']) !!}
	</div>
{!! Form::close() !!}
@stop