<html>

<head>

<?php

// session_start();
// if (isset($_SESSION['SESSION_EMAIL'])) {
//     header("Location: welcome.php");
//     die();
// }

$msg="";
if (isset($_REQUEST['email'])) {

    include '../config.php';
    
    
    $email = $_REQUEST['email'];
    
    $result = mysqli_query($conn, "DELETE FROM teacher WHERE t_email='{$email}'");
    
    if ($result) {
        $msg =  "$email Successfully Deleted";     
    } 
    else 
    {
        $msg =  "*Error: $result";
    }
}
else{
    $msg =  "*Error";
}


header("location:admin.php");
?>

</head>

</html>