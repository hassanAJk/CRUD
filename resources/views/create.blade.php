


@extends('layouts.app')

@section('content')
<div class="mx-auto col-md-6 col-lg-6 col-sm-6 col-xl-6 bg-white">

<div class="text-center"><h3>New Details</h3></div>
<hr>
<form method="POST" action="{{route('books.createRecord')}}">
  @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Enter Title</label>
    <input type="text" name="title" class="form-control" id="exampleFormControlInput1">
  </div>

   <div class="form-group">
    <label for="exampleFormControlInput1">Enter pages</label>
    <input type="text" name="pages" class="form-control" id="exampleFormControlInput1">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example Description </label>
    <textarea class="form-control"  name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
</div>
@endsection