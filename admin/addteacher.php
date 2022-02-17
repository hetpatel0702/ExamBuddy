<!DOCTYPE html>
<html>
<title>Admin Panel</title>

<?php

// session_start();
// if (isset($_SESSION['SESSION_EMAIL'])) {
//     header("Location: welcome.php");
//     die();
// }

include '../config.php';
$msg = "";

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    $confirm_password = mysqli_real_escape_string($conn, md5($_POST['confirm-password']));
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $result = mysqli_query($conn, "SELECT * FROM teacher WHERE t_email='{$email}'");

    if (mysqli_num_rows($result) > 0) {
        echo "<div class='alert alert-danger'>{$email} - This email address has been already exists.</div>";
    } else {
        if ($password === $confirm_password) {
            $sql = "INSERT INTO teacher (t_name, t_email,t_mob, t_pass) VALUES ('{$name}', '{$email}',{$mobile} ,'{$password}')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "<div class='alert alert-info'>Teacher Added Successfully.</div>";
                
            } else {
                echo "<div class='alert alert-danger'>Something wrong went.</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Password and Confirm Password do not match</div>";
        }
    }
}


?>


<body>
    

</body>

</html>