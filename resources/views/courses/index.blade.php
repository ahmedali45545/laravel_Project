@extends('welcome')
@section('content')
<h1 class="text-left text-info"> 
        My Courses 
</h1>
<a class="btn btn-primary text-right" href="/courses/create"> Create New </a>
   <div class="container px-6 mx-auto">
        
           <div class="row">
                @foreach ($data as $item)
                        
                    <div class="mycart col-3 col-md-3 col-sm-6 my-md-0">
                        
                                <div class="card shadow">
                                    
                                    <div class="card-body">
                                        <h5 class="card-title">CourseName : {{$item['name']}}</h5>
                                        <p class="card-text"><span class="text-primary">description :</span>  
                                        {{$item['description']}}  
                                        </p>
                                        <h6>duration: 
                                        {{$item['duration']}}   
                                        </h6>
                                        <h6>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </h6>
                                        <div>

                                        
                                        <a type="button" class="btn btn-warning " href = "/courses/{{$item['id']}}/edit"> <img src="{{ URL('images/pen.svg') }}"  /> </a>
                                        <form class="deleteform text-left " action="/courses/{{$item['id']}}" method="post">
                                            @method("DELETE")
                                            @csrf
                                            <button type="submit" class=" btn btn-danger" ><img src="{{ URL('images/trash-2.svg') }}"></button>
                                        </form>
                                        </div>
                                      
                                    </div>
                                </div>
                            
                                       
                        
                    </div>
                    
                    @endforeach
             </div> 
    </div>







@endsection