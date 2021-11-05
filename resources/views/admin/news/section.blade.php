@section('title') Раздел новостей "{{$section['title']}}" / @parent @stop

@extends('layouts.main')

@push('css')
article{
 padding: 1vmax 2vmax
}
@endpush

@section('content')
<h1>Раздел новостей #{{$section['id']}}</h1>
@endsection
