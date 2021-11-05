@section('title') Главная страница / @parent @stop

@extends('layouts.main')

@push('css')
article{
 padding: 1vmax 2vmax
}
@endpush

@section('content')
 <h1>Главная страница</h1>
@endsection

@push('js')
console.log('Главная страница')
@endpush
