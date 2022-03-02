<?php
    session_start();
    if (!isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: index.php");
        die();
    }

    include 'config.php';

    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
    }
?>

<html>
<head>
    <title>Home Page</title>
    <style>


/*dfdfd*/

body { 
  margin: 0;
 
  font-family: Arial, Helvetica, sans-serif;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 20px 16px;
  text-decoration: none;
  border-radius:20px;
  
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}

.column {
  
  width: 30%;
  
  padding: 5px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}



    </style>
</head>
<body>
  


<ul>
    <li><a href="#default" id="logo">Exam Buddy</a></li>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">Test Series</a></li>
  <li><a href="#contact">Live Lectures</a></li>
  <li><a href="#contact">About</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>


<h1 style="float:center;">Free Video</h1>
<div class="row">
  
   
    
    <iframe class="column"  src="https://www.youtube.com/embed/fG1oNm2tCro" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  
        <iframe class="column"  src="https://www.youtube.com/embed/fG1oNm2tCro" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe class="column"  src="https://www.youtube.com/embed/fG1oNm2tCro" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe class="column"  src="https://www.youtube.com/embed/fG1oNm2tCro" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  
  <iframe class="column"  src="https://www.youtube.com/embed/fG1oNm2tCro" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <iframe class="column"  src="https://www.youtube.com/embed/fG1oNm2tCro" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe class="column"  src="https://www.youtube.com/embed/fG1oNm2tCro" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  
  <iframe class="column"  src="https://www.youtube.com/embed/fG1oNm2tCro" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <iframe class="column"  src="https://www.youtube.com/embed/fG1oNm2tCro" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe class="column"  src="https://www.youtube.com/embed/fG1oNm2tCro" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  
  <iframe class="column"  src="https://www.youtube.com/embed/fG1oNm2tCro" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <iframe class="column"  src="https://www.youtube.com/embed/fG1oNm2tCro" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</div> 
<script>
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size



</script>

</body>
<footer>
            </footer>

</html>