@extends('welcome')
@section('content')


<div class="container ">
<div class="custom-product ">
    <div class="col-sm-10 ">
        <div class="trending-wrapper ml-5">
            <h4 class="text-success">My Enrollments</h4>
            
            @foreach($courses as $item)
            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-4">
                    <div class="">
                      <h2 class="text-blue">{{$item->name}}</h2>
                      <h6>{{$item->description}}</h6>
                      <h5>Duration:{{$item->duration}}</h5>
                    </div>
             </div>
             <div class="col-sm-3 ml-2">
                <a href="/unenroll/{{$item->cart_id}}" class="btn btn-warning" >UnEnroll</a>
             </div>
            </div>
            @endforeach
          </div>
          

    </div>
</div>
</div>



@endsection