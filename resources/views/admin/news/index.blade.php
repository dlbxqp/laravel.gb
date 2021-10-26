@section('title') Все новости / @parent @stop
@extends('layouts.admin')
@section('content')

<h1>Все новости:</h1>

<table>
 <thead>
  <tr>
   <th>Id</th>
   <th>Date</th>
   <th>Title</th>
   <th>Author</th>
   <th>Image</th>
   <th>Description</th>
   <th></th>
  </tr>
 </thead>
 <tbody>
 @forelse($allNews as $news)
  <tr>
   <td>{{$news['id']}}</td>
   <td>{{$news['date']}}</td>
   <td>{{$news['title']}}</td>
   <td>{{$news['author']}}</td>
   <td>{{$news['image']}}</td>
   <td>{!!$news['description']!!}</td>
   <td></td>
  </tr>
 @empty
  <tr>
   <td colspan="7">Новостей пока нет</td>
  </tr>
 @endforelse
 </tbody>
</table>
@endsection
