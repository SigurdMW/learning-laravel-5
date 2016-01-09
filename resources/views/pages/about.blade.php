@extends('layouts/layout')

@section('title')
    about
@stop

@section('body')
    This is about page - {{$name}}</div>
    @if($isUserRegistred)
        Hello friend!
    @else
        Hello foe
    @endif

    @for ($i=0;$i<10;$i++)
        <p>The current value is {{ $i }}</p>
    @endfor

    @foreach ($users as $user)
        <p>{{ $user }}</p>
    @endforeach
@stop