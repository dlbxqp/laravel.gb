@section('title') Все разделы новостей / @parent @stop
@extends('layouts.main')
@section('content')

<h1>Раздел новостей #{{$section['id']}}</h1>

@endsection
