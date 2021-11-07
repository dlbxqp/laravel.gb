@section('title') Новость #{{$oneNews['id']}} / @parent @stop

@extends('layouts.main')

@push('css')
article{
 padding: 1vmax 2vmax
}
@endpush

@section('content')
<div class="breadcrumbs">
 <a href="{{route('news.allNews')}}">Все новости</a>
</div>

<h1>Новость #{{$oneNews['id']}}</h1>
@endsection
