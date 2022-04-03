@extends('welcome')
@section('content')
<h1 class="text-center text-success"> 
        update UserName
    </h1>

    <form class="container" action="/update/{{$data['id']}}" method="post" >
        @method("put")
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" value="{{$data['name']}}"  class="form-control" name="name">
          <label class="text-danger">
            {{$errors->first('name')}}
          </label>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
      @endsection