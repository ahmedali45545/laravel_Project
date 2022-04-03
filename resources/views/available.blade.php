@extends('welcome')
@section('content')
<h1 class="text-left text-success m-4">Available Courses</h1>

   <div class="container px-6 mx-auto">
        
           <div class="row">
                @foreach ($data as $item)
                        
                    <div class="mycart col-3 col-md-3 col-sm-6 my-md-0" >
                        
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

                                        
                                        <a type="button" class="btn btn-info " href = "/courses/{{$item['id']}}"> Take a View </a>
                                        <form action="/add_to_cart" method="post" class="deleteform">
                                            @csrf
                                            <input type="hidden" name="course_id" value="{{$item['id']}}">
                                            <button type="submit"  class="btn btn-success my-3" name="add"> Enroll</button>
                                        </form>
                                        
                                        </div>
                                      
                                    </div>
                                </div>
                            
                                       
                        
                    </div>
                    
                    @endforeach
             </div> 
    </div>

@endsection

