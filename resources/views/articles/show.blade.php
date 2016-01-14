@extends('layouts.layout')

@section('title')
	{{$article->title}}
@stop

@section('body')
	<article>
		<h1>{{$article->title}}</h1>
		<div class="article-body">{{$article->body}}</div>
	</article>
@stop