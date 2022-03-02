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
  height: 70%;
  width: 250px;
  position: absolute;
  z-index: 1;
  top: 100px;
  left: 0;
  background-color: #DADEDF;
  overflow-x: hidden;
  padding-top: 10px;
  word-break: break-all;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 15px;
  color: black;
  display: block;
  width: 200px;
  border: none;
  background: none;
  width: 100%;
  font-weight:bold;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  background-color: white;
}

/* Main content */
.main {
  
  margin-left: 150px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
 padding-top: 5px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: white;
  color: black;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #F2F3F4;
  padding-left: 8px;
  word-break: break-all;
}
.dropdown-container a{
 width: 210px;
  word-wrap: break-word;
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

h2
{
  text-align:center;
}
</style>
</head>
<body>


 
  <?php

    include 'config.php';

    $results_per_page=6;
    $page=1;
    $start_from=0;

#$sql = "SELECT * FROM videos WHERE type='Data Structure' LIMIT 3";

  $result = $conn->query("select * from videos");
  $count=$result->num_rows;

  echo '<div class="sidenav">';
  echo '<h2>Course Outline</h2>';
  echo "<hr>";
  
  while($start_from!=$count){
    $start_from = ($page-1) * $results_per_page;
    $sql = "SELECT * FROM videos ORDER BY id ASC LIMIT $start_from, ".$results_per_page;

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      echo '<button class="dropdown-btn">Week <i class="fa fa-book"></i></button>';
      
      echo "<div class='dropdown-container'>";
      echo "<hr></hr>";
      
      while($row = mysqli_fetch_assoc($result)) {
        $id=$row['id'];
        $name=$row['name'];
      
        echo "<a href='watch2.php?id=$id'><i class='fa fa-book'> $name </i><br> </a>";
    
      } 
      echo "</div>";  
    }
  
    $page++;
  }

?>

<div class="main">
<?php
$conn = mysqli_connect("localhost", "root", "", "addvideo");

if (!$conn) {
    echo "Connection Failed";
}
$id = $_GET['id'];
$sql = "SELECT * FROM videos WHERE id='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
   
    $name=$row['name'];
    $code = $row['code'];
}

} else {
  echo "0 results";
}
echo "<h2>$name</h2>";
$ccd =  $code;


?>
  <div class="main">
  <iframe  width="860" height="590" src="https://www.youtube.com/embed/<?php echo $code; ?>"></iframe>
   
  
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
