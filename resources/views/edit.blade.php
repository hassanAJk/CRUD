

@extends('layouts.app')
@section('content')
<div class="row">
  <div class="mx-auto col-md-6 col-lg-6 col-sm-6 col-xl-6 bg-white">
<form method="POST" action="{{route('updatedRecords',$Books->id)}}">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="exampleFormControlInput1">Enter Title</label>
    <input type="text" name="title" value="{{$Books->title}}" class="form-control" id="exampleFormControlInput1">
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">Enter Pages</label>
    <input type="text" name="pages" value="{{$Books->pages}}" class="form-control" id="exampleFormControlInput1">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example Description About company</label>
    <textarea class="form-control" value="{{$Books->description}}"  name="description" id="exampleFormControlTextarea1" rows="3">{{$Books->description}}</textarea>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-warning">update</button>
    </div>
</form>
</div>
</div>
@endsection