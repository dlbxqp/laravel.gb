@section('title') Authorisation / @parent @stop
@extends('layouts.admin')
@section('content')
<h1>Представтесь</h1>

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
