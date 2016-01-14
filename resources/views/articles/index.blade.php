@extends('layouts.layout')

@section('title')
	Articles
@stop

@section('body')
	<h1>Articles</h1>
	<hr>

	@foreach($articles as $article)
		<article>
			<h2>
				<a href="{{ url('articles', $article->id) }}">{{$article->title}} </a>
			</h2>
			<div class="article-body">{{$article->body}}</div>
		</article>
	@endforeach
@stop