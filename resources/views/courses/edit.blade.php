@extends('welcome')
@section('content')
<h1 class="text-center text-success"> 
        Add Course
    </h1>

    <form class="container" action="/courses/{{$data['id']}}" method="post" >
        @method("put")
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" value="{{$data['name']}}"  class="form-control" name="name">
          <label class="text-danger">
            {{$errors->first('name')}}
          </label>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">description</label>
          <input type="text"  value="{{$data['description']}}" class="form-control" name="description" >
          <label class="text-danger">
            {{$errors->first('description')}}
          </label>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Duration</label>
          <input type="text"  value="{{$data['duration']}}" class="form-control" name="duration" >
          <label class="text-danger">
            {{$errors->first('duration')}}
          </label>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
      @endsection