@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   @if(Auth::user()->hasRole('tester')) You are logged in! @endif
    




<div class="row m-3">
  <a   href="{{route('create.records','create')}}" class="btn btn-primary ml-2">Add Details</a>
  </div>
                    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Total pages</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th >Allowed Permission</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($books as $result)               
    <tr>
      <td>{{$result->pages}}</td>
      <td>{{$result->title}}</td>
      <td>{{$result->description}}</td>
      <td>     
    <a  href="{{route('show.records',$result->id) }}" class="btn btn-primary  btn-sm ml-2">View</a>
  </td>
      @if(Auth::user()->hasRole('admin')) 
      <td>
        <a   href="{{route('edit.records',$result->id,'edit')}}" class="btn  btn-sm btn-warning ml-2">Edit </a>
      </td>

      <td>
       <form method="POST" action="{{route('Delete.Record',$result->id,'delete')}}">
  @csrf
  @method('DELETE')
    <button class="btn btn-danger ml-2">Delete</button>
</form></td>
@endif
    </tr>
    @endforeach
    
  </tbody>
</table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

                    