
@extends('welcome')
@section('content')
   


<style>
    body{
        background-color: lightgray;
    }
</style>
    <div class="container-fluid">
        <div class="vertical-center">
            <div class="col-sm-4 col-sm-offset-4">
            <form action="register" method="post">
            @csrf
                <div class="form-group">
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="username" class="form-control" id="exampleInputEmail1"  placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Role</label><br>
  
                        <input class="form-check-input" type="radio" name="role" id="inlineRadio1" value="teacher">
                        <label class="form-check-label" for="inlineRadio1"> Teacher</label>
                   
                        <input class="form-check-input" type="radio" name="role" id="inlineRadio2" value="student">
                        <label class="form-check-label" for="inlineRadio2">Student</label>
                    
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    
                        <button type="submit" class="btn btn-primary">register</button>
                </div>              
            </form>

            </div>
        </div>
    
    </div> 

@endsection

