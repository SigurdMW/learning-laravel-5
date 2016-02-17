@extends('layouts.layout')

@section('title')
	{{$article->title}}
@stop

@section('body')
	<article>
		<h1>{{$article->title}}</h1>
		<div class="article-body">{{$article->body}}</div>
		
		@unless ($article->tags->isEmpty())
			<h5>Tags:</h5>
			<ul>
				@foreach($article->tags as $tag)
					<li>{{ $tag->name }}</li>
				@endforeach
			</ul>
		@endunless

	</article>
	<a href="{{ $article->id }}/edit">Edit this article</a>
@stop