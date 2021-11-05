@section('title') Все разделы новостей / @parent @stop

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
<h1>Все разделы новостей:</h1>

<table>
 <thead>
  <tr>
   <th>Id</th>
   <th>Title</th>
   <th>Description</th>
   <th></th>
  </tr>
 </thead>
 <tbody>
@forelse($sections as $section)
  <tr>
   <td>{{$section['id']}}</td>
   <td>{{$section['title']}}</td>
   <td>{!!$section['description']!!}</td>
   <td></td>
  </tr>
@empty
  <tr>
   <td colspan="7">Разделов новостей пока нет</td>
  </tr>
@endforelse
 </tbody>
</table>
@endsection
