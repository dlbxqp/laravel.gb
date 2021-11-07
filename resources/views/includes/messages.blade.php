@if($errors->any())
 @foreach($errors->all() as $error)
  <div class="alert">{{$error}}</div>
 @endforeach
@endif
