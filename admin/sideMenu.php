<!DOCTYPE html>

<html>
<head>

<title>Admin Panel</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
<link rel="stylesheet" href="adminCss.css">
</head>

<body>

    <ul>
        <li><div class="logo">Exam <sub><div id="myDIV">B</div></sub>uddy<div></li>
        <div id="menuHeading">Teachers:</div>
        <li><a href="teachers.php">Teachers</a></li>
        <li><a href="addteacher.php">ADD Teacher</a></li>
        <div id="menuHeading">Students:</div>
        <li><a href="">Show Students</a></li>
        <li><a href="">ADD Student</a></li>
        <div id="menuHeading">Video:</div>
        <li><a href="">Show Students</a></li>
        <li><a href="">ADD Students</a></li>
        <li><a href="">Delete Student</a></li>
    </ul>

    <!-- <div id="DIVID"> -->
        <?php
            // include('teachers.php');
        ?>
    <!-- </div> -->

<!-- <script type="text/javascript">
    function btnclick(_url){
        $.ajax({
            url : _url,
            type : 'post',
            success: function(data) {
             $('#DIVID').html(data);
            },
            error: function() {
             $('#DIVID').text('An error occurred');
            }
        });
    }
</script> -->


</body>

</html>