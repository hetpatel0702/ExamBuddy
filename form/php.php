
    <?php
    $results_per_page=2;
    $page=1;
    $start_from=0;
$conn = mysqli_connect("localhost", "root", "", "addvideo");

if (!$conn) {
    echo "Connection Failed";
}

#$sql = "SELECT * FROM videos WHERE type='Data Structure' LIMIT 3";

$result = $conn->query("select * from videos");
$count=$result->num_rows;

  echo '<div class="sidenav">';
  echo "<h3>Course Outline</h3>";
 

  
  while($start_from!=$count){

  $start_from = ($page-1) * $results_per_page;
$sql = "SELECT * FROM videos ORDER BY id ASC LIMIT $start_from, ".$results_per_page;


$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row

  
    # code..
  
  echo '<button class="dropdown-btn">Week <i class="fa fa-book"></i></button>';
   echo "<div class='dropdown-container'>";
   
   
  while($row = mysqli_fetch_assoc($result)) {
    $id=$row['id'];
    $name=$row['name'];
    
   
    echo "<a href='watch.php?id=$id'><i class='fa fa-book'> $name </i><br> </a>";
 
  } echo "</div>";
  
 }
  

$page++;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: "Lato", sans-serif;
}

/* Fixed sidenav, full height */
.sidenav {
  height: 50%;
  width: 300px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #F2F3F4;
  overflow-x: hidden;
  padding-top: 40px;

}



/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 15px;
  color: black;
  font-weight:bold;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
  
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: black;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: #F2F3F4;
  color: red;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #F2F3F4;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>
<!--
<div class="sidenav">
  <a href="#about">About</a>
  <a href="#services">Services</a>
  <a href="#clients">Clients</a>
  <a href="#contact">Contact</a>
  <button class="dropdown-btn">Dropdown 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
  <a href="#contact">Search</a>
</div>-->


<div class="main">
  <h2>Sidebar Dropdown</h2>
  <p>Click on the dropdown button to open the dropdown menu inside the side navigation.</p>
  <p>This sidebar is of full height (100%) and always shown.</p>
  <p>Some random text..</p>
  <iframe  width="560" height="315" src="https://www.youtube.com/embed/LbfMRnOhJGs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>;

</div>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>



</body>
</html> 

