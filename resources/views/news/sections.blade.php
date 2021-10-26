@section('title') Раздел новостей "{{$section['title']}}" / @parent @stop
@extends('layouts.main')
@section('content')

<h1>Разделы новостей</h1>

<div id="sections">
@forelse($sections as $section)
 <a class="section" href="{{route('news.section', ['id' => $section['id']])}}">
  <h3>{{$section['title']}}</h3>
  <div>{!!$section['description']!!}</div>
 </a>
 @empty
 <i>Нет</i>
@endforelse
</div>

@endsection
