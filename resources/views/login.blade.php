
@extends('welcome')
@section('content')
   


<style>
    body{
        background-color: lightgray;
        background-image:url("images/img8.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
    .vertical-center {
            align-items: center;
            margin-left:440px;
            margin-top:200px;
          }
</style>
    <div class="container-fluid">
        <div class="vertical-center">
            <div class="col-sm-4 col-sm-offset-4">
            <form action="login" method="post">
            @csrf
                <div class="form-group">
                    
                
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="text-info">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                   

                    <div class="form-group">
                        <label for="exampleInputPassword1" class="text-info">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <br>
                    
                        <button type="submit" class="btn btn-primary">Login</button>
                </div>              
            </form>

            </div>
        </div>
    
    </div> 

@endsection

