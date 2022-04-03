@extends('welcome')
@section('content')
 
 <h1 class="text-center text-info"> 
      My Profile 
    </h1>
    

    <div class="container " style="width: 800px,height:800px;">
    
        <div > <a href="/removeUser" class="btn btn-danger" style="float:right;"><img src="{{ URL('images/trash-2.svg') }}"></a> </div>
        <img src="{{ URL('images/profile.jpg') }}" class="" height="170px" width="170px"/>
            <div class=" text-left my-4" style="height:400px;">
                <h5 class="">Name : {{$data["name"]}} <a type="button" class="btn " href = "/edit/{{$data['id']}}">  <img src="{{ URL('images/pen.svg') }}"  /> </a></h5>
                <h5 class="">Email: {{$data["email"]}}</h5>
                <h5 class=" ">Role:{{$data["role"]}}</h5>
                
            </div>
      </div>

@endsection      