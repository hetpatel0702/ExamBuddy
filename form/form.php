<?php





?>
<html>
    <head>
    <title>Embed videos from link </title>
</head>

<body>
    <h1>UPLOAD VIDEOS BASED ON COURSE</h1>
    <p><a href="ds.php">Data Structure Videos</a>|| <a href="js.php">Javascript videos</a></p>

<p>
    <form action="addvideos.php" method="POST">
        <input type="text" name="name" placeholder="Vdeos NAme..."/><br />
        <select name="type">
            <option>Data Structure</option>
            <option>Database Managment System</option>
            <option>C Programming</option>
            <option>Computer Network</option>
            <option>Compiler Design</option>
            <option>Theory of Computation</option>
            <option>Computer Organization and Architecture</option>
            <option>Descrete Maths</option>
            
        </select><br>
        <input type="text" name="link" placeholder="share Link"><br>
        <input type="submit" value="share">
    </form>

    <?php

?>
</p>




</body>




    </html>

