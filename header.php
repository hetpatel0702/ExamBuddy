<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
.navI:hover{
    background-color: darkgrey;
}

#myDIV {
  display:inline-block;
  color: brown;
  font-size: 50px;
  animation: mymove 4s infinite;
}

@keyframes mymove {
  0%   {transform: rotate(45deg)}
  50% {transform: rotate(-35deg)}
  100% {transform: rotate(45deg)}
}
</style>    
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="navbar-brand">Exam <sub><div id="myDIV">B</div></sub>uddy</div>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active navI"><a class="nav-link" href="#">Home</a>
        <li class="nav-item active navI"><a class="nav-link" href="#">Courses</a>
        <li class="nav-item active navI"><a class="nav-link" href="#">Notes</a>
        <li class="nav-item active navI"><a class="nav-link" href="#">About</a>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</body>
</html>