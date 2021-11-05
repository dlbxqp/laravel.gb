@section('title') Все новости / @parent @stop

@extends('layouts.admin')

@push('css')
table{
 margin: 0 10px
}
tr > *{
 padding: 1vmax 2vmax
}
td{
 border-top: 1px solid rgba(0, 0, 0, 0.2)
}
@endpush

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
 @forelse($allNews as $oneNews)
  <tr>
   <td>{{$oneNews['id']}}</td>
   <td>{{$oneNews['date']}}</td>
   <td>{{$oneNews['title']}}</td>
   <td>{{$oneNews['author']}}</td>
   <td>{{$oneNews['image']}}</td>
   <td>{!!$oneNews['description']!!}</td>
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
