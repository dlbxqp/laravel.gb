@section('title') Новость #{{$oneNews['id']}} / @parent @stop
@extends('layouts.main')
@section('content')

<h1>Новость #{{$oneNews['id']}}</h1>

@endsection
