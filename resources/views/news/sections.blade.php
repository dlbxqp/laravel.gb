@section('title') Все разделы новостей / @parent @stop

@extends('layouts.main')

@push('css')
#sections{
 display: flex; flex-direction: column
}

a.section{
 line-height: 1.6;
 text-decoration: none;
 padding: 10px
}
a.section:not(:last-of-type){
 border-bottom: 1px solid rgba(0, 0, 0, 0.2)
}
a.section:hover{
 background-color: rgba(0, 0, 0, 0.08)
}
@endpush

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
