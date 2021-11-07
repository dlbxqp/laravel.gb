@section('title') Добавление новости / @parent @stop

@extends('layouts.admin')

@push('css')
article{
 padding: 1vmax 2vmax
}
@endpush

@section('content')
<div class="breadcrumbs">
 <a href="{{route('admin.news.sections')}}">Все разделы новостей</a>
</div>

<h1>Добавление раздела новостей</h1>
@include('includes.messages')
<form method="post" action="{{route('admin.news.store')}}">
 @csrf
 <input type="hidden" name="type" value="section">
 <label>
  <input name="title" placeholder="Заголовок" value="{{old('title')}}">
 </label>
 <label>
  <textarea name="description" placeholder="Содержание новости">{!!old('description')!!}</textarea>
 </label>

 <button type="submit">Enter</button>
</form>
@endsection
