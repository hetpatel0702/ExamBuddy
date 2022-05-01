<html>
    <head>
    <?php session_start();?>
    </head>
    <body>
        <nav class="navbar">
            <div class="logo">ExamBuddy</div>
            <input type="checkbox" id="click">
            <label for="click" class="menu-btn">
                <i class="fas fa-bars"></i>
            </label>
            <ul>
                <li><a class="head" href="homepage.php">Home</a></li>
                <li><a class="head" href="stOpenVideos.php">My courses</a></li>
                <li><a class="head" href="stAskDoubt.php">Ask Doubt</a></li>
                <li><a class="head" href="#">About Us</a></li>
                <?php 
                
                    if(!isset($_SESSION['SESSION_EMAIL'])){ 
                        
                        echo '<li><a class="head" href="login.php">Login</a></li>';
                    }
                    else{
                        echo '<li><a class="head" href="logout.php">Logout</a></li>'; 
                    }
                ?>
            </ul>
        </nav>
    </body>
</html>