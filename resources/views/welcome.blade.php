<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    
    <title>E-learn</title>
    <style>
        img{
            opacity: 0.8;
        }
        .vertical-center {
            align-items: center;
            margin-left:440px;
            margin-top:55px;
          }
          body{
    background:lightgray;
}  
  


.fa-star,.fa-star-half{
    color: yellowgreen;
    padding: 3% 0;
}

#cart_count{
    text-align: center;
    padding: 0 0.9rem 0.1rem 0.9rem;
    border-radius: 3rem;
}

.shopping-cart{
    padding: 3% 0;
}  
.deleteform{
  display: inline;
 
}  
.trending-wrapper{
        margin: 30px;
    }
    .cart-list-devider{
        border-bottom: 1px solid black;
        margin-bottom: 20px;
        padding-bottom: 20px
    }
    .custom-product{
        height: 600px
    }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg  navbar-dark bg-secondary text-light">
  <div class="container-fluid">
  
    <a class="navbar-brand " href="#"><button class="btn btn-info  mx-2"><img src="{{ URL('images/phone-call.svg') }}"/> </button>01118545279</a>
    <a class="navbar-brand" href="#"><button class="btn btn-info  mx-2"><img src="{{ URL('images/mail.svg') }}"/> </button>info@Elearn.com</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-2 me-auto mb-2 mb-lg-0"> 
      </ul>
      <button class="btn btn-info mx-2">
      <img src="{{ URL('images/facebook.svg') }}"  /> 
      </button>
      <button class="btn btn-info  mx-2"><img src="{{ URL('images/twitter.svg') }}"/> </button>
      <button class="btn btn-info mx-2"><img src="{{ URL('images/github.svg') }}"/> </button>
      <button class="btn btn-info mx-2"><img src="{{ URL('images/youtube.svg') }}"/></button>
      
      
       
    </div>
  </div>
</nav>






<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">E-Learn</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about">About Us</a>
      </li>
      @can("isTeacher")<li class="nav-item">
        <a class="nav-link" href="/courses">Courses</a>
      </li>@endcan
      <li class="nav-item">
        <a class="nav-link" href="/">Contact Us</a>
      </li>
      
    </ul>
    <form action="/search" class="form-inline my-2 my-lg-0 mr-4">
      <input class="form-control mr-sm-2 search-box" type="text" name="query" placeholder="Search" aria-label="Search">
    
    </form>
    <ul class="navbar-nav navbar-right">
    @if(Session::has('user'))
    <div class="dropdown">
      <button class="btn  dropdown-toggle mr-lg-2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
      {{Session::get('user')['name']}}
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="/users">Myprofile</a></li>
        @elsecan("isStudent") <li><a class="dropdown-item" href="/available">Available Courses</a></li> 
      <li><a class="dropdown-item" href="/enrollment">My Enrollment</a></li> @endcan
        <li><a class="dropdown-item" href="/logout">logout</a></li>
     </ul>
    </div>
    @else
    <li class="nav-item">
        <a class="nav-link" href="/login">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/register">Register</a>
      </li>
     @endif
     </ul>
    
  
  </div>
</nav>


@yield('content')
<script>
function myFunction() {
  document.getElementById("panel").style.display = "none";
}
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>