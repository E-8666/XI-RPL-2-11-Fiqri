@extends('layouts.main')

@section('container')
<div class="title-top mb-5">
    <h1 class="mb-3">Contact Us</h1>
  <form method="post" action="{{route('contacts.store')}}">
{{csrf_field()}}
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="Nama" name="nama">
    <label for="floatingInput">Nama</label>
  </div>
  <div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="Email" name="email">
    <label for="floatingInput">Email</label>
  </div>
  <div class="form-floating mb-3">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"
      style="height: 100px" name="message"></textarea>
  <label for="floatingTextarea">Message</label>
</div>
  </div>
  <button type="submit" class="btn btn-primary">Send</button>
</form>
@endsection