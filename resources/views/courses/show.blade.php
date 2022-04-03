@extends('welcome')
@section('content')


   <h1 class="text-center text-info"> 
        Course Details 
    </h1>
    

    <div class="card container" style="width: 50rem;">
        <div class="card-body text-left">
          <h5 class="card-title "><span class="text-info">Course Name : </span>{{$data["name"]}}</h5>
          <p class="card-text "><span class="text-info">Description: </span>{{$data["description"]}}</p>
          <p class="card-text "><span class="text-info">Duration: </span> {{$data["duration"]}}</p>
          <a href="/available" class="btn btn-primary ">Back</a>
        </div>
      </div>
      <div class="card container" style="width: 50rem;">
          <h6>FeedBack</h6>
          <form action="{{route('comments.store')}}" method="post">
          @csrf
          <textarea class="form-control" name="body">
          </textarea>
          <input type="text" name="course_id" hidden value="{{$data->id}}">
          <button class="btn btn-success">Add FeedBack</button>
          @include('courses.displaycomment',['comments'=>$data->comments,"course_id"=>$data->id])
    </form>
    </div>
   


 @endsection      