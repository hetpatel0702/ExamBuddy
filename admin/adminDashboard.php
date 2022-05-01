<html>
<head>
    <?php
        session_start();
        if (!isset($_SESSION['SESSION_EMAIL'])) {
                header("Location: ../login.php");
        }
    ?>
<title>Admin/DashBoard</title>
<style>
body{
    background-color: lightgrey;
}
.adminDash{
    position: relative;
    margin-left: 20%;
}
</style>
<?php
    include('sideMenu.php');
?>

<div> ADMIN Dashboard</div>
</head>
<body>
    
</body>
</html>