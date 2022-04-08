 
@extends('layouts.app')
@section('content')
<div class="mx-auto col-md-6 col-lg-6 col-sm-6 col-xl-6">
<div class="card mx-auto" style="width: 18rem;">
  <div class="card-body">
        
    <h5 class="card-title"><h3>Title Of Book:</h3> {{$detail->title}}</h5>
     <p class="card-text"><h3>Total No Of pages:</h3> {{$detail->pages}}</p>
     <p class="card-text"><h3>Book Summary: </h3>{{$detail->description}}</p>
   
  </div>
  </div>
</div>
@endsection
