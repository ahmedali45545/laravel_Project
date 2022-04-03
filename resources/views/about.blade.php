@extends('welcome')
@section('content')
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: white;
  color: black;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us</h1>
  <p>Some text about who we are and what we do.</p>
  <p>Resize the browser window to see that this page is responsive by the way.</p>
</div>

<h2 style="text-align:center">E-learn Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
    <img src="{{ URL('images/profile.jpg') }}" class="" height="170px" width="170px"/>
      <div class="container">
        <h2>Ali Hassan</h2>
        <p class="title">Web Developer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>AliHassan@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
    <img src="{{ URL('images/profile.jpg') }}" class="" height="170px" width="170px"/>
      <div class="container">
        <h2>Ahmed Ali</h2>
        <p class="title">software Engineer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>AhmedAli@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
    <img src="{{ URL('images/profile.jpg') }}" class="" height="170px" width="170px"/>
      <div class="container">
        <h2>Abo Elezz</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>AboElezz@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
@endsection