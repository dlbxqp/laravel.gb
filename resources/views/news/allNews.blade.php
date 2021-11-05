@section('title') Все новости / @parent @stop

@extends('layouts.main')

@push('css')
#news{
 display: flex; flex-direction: column
}

a.oneNews{
 line-height: 1.6;
 text-decoration: none;
 padding: 10px
}
a.oneNews:not(:last-of-type){
 border-bottom: 1px solid rgba(0, 0, 0, 0.2)
}
a.oneNews:hover{
 background-color: rgba(0, 0, 0, 0.08)
}
@endpush

@section('content')
<h1>Новости</h1>

<div id="news">
@forelse($allNews as $news)
 <a class="oneNews" href="{{route('news.oneNews', ['id' => $news['id']])}}">
  <h3>{{$news['title']}}</h3>
  <p>{{$news['author']}}</p>
  <div>{!!$news['description']!!}</div>
 </a>
 @empty
 <i>Нет</i>
@endforelse
</div>
@endsection
