@section('title') Главная страница / @parent @stop
@extends('layouts.main')
@section('content')
 <h1>Главная страница</h1>
@endsection

@push('js')
<script>
console.log('Главная страница')
</script>
@endpush
