
<?php

// session_start();
// if (isset($_SESSION['SESSION_EMAIL'])) {
//     header("Location: welcome.php");
//     die();
// }


if (isset($_REQUEST['email'])) {

    include '../config.php';
    
    $email = $_REQUEST['email'];
    echo $email;
    $result = mysqli_query($conn, "DELETE FROM teacher WHERE t_email='{$email}'");
    
    if ($result) {
        // echo json_encode("Teacher deleted");  
    //    echo "<p>done</p>";      
    } 
    else 
    {
        // echo json_encode("missing");
        // // echo $result;
    }
       
}


?>


<!-- <body>
    <h2>Delete Teacher</h2>
    <form method="POST" action="">
       
        Email:<input type="text" name="email">
        
        <input type="submit" name="submit">
    </form>

</body>

</html> -->