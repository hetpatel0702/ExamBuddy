<?php


$conn = mysqli_connect("localhost", "root", "", "addvideo");

if (!$conn) {
    echo "Connection Failed";
}

$name = mysqli_real_escape_string($conn, $_POST['name']);
$type = mysqli_real_escape_string($conn, $_POST['type']);
$link = mysqli_real_escape_string($conn, $_POST['link']);

$newlink = substr($link,16);

$sql = "INSERT INTO videos (id,name, type, code)
VALUES ('','$name', '$type', '$newlink')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
header("location:form.php?added=$name");


?>