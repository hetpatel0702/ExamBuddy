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

?>

<html>

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<h1><?php echo $name; ?></h1>
<iframe cla width="560" height="315" src="https://www.youtube.com/embed/<?php echo  $code ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>;


</body>
</html>


