@section('title') Authorisation / @parent @stop

@extends('layouts.authorisation')

@push('css')
form{
 display: flex; flex-direction: column;
 padding: 1vmax 2vmax
}
form > *:not(:last-child){
 margin-bottom: 2px
}
@endpush

@section('content')
<form>
 <label>
  <input name="login" placeholder="login">
 </label>
 <label>
  <input type="password" name="password" placeholder="password">
 </label>

 <button>Enter</button>
</form>
@endsection
