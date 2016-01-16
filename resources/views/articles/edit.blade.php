@extends('layouts.layout')

@section('title')
	{{$article->title}}
@stop

@section('body')
	<h1>Edit: {{$article->title}}</h1>
	{!! Form::model($article, ['method'=>'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
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

@if($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
@endif
@stop