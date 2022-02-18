<html>

<head>

<?php

// session_start();
// if (isset($_SESSION['SESSION_EMAIL'])) {
//     header("Location: welcome.php");
//     die();
// }

$tid = $_GET['tid'];
    include '../config.php';
    $result = mysqli_query($conn, "DELETE FROM teacher WHERE t_id='{$tid}'");

    if ($result) {
        header("location:admin.php");
    }
    else
    {
        echo "<script>alert('Can't delete Teacher!')</script>";
    }
    mysqli_close($conn);


// $msg="";
// if (isset($_REQUEST['email'])) {
//     include '../config.php'; 
//     $email = $_REQUEST['email']; 
//     $result = mysqli_query($conn, "DELETE FROM teacher WHERE t_email='{$email}'");
//     if ($result) {
//         $msg =  "$email Successfully Deleted";     
//     } 
//     else 
//     {
//         $msg =  "*Error: $result";
//     }
// }
// else{
//     $msg =  "*Error";
// }
// header("location:admin.php");
?>

</head>

</html>
