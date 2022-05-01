<html>
    <head>
    <?php
            session_start();
            include 'config.php';
            $msg = "";

            if (isset($_POST['submit'])) {
                $email = mysqli_real_escape_string($conn, $_POST['temail']);
                $password = mysqli_real_escape_string($conn, md5($_POST['tpassword']));
                // echo $email;
                // echo $password;

                $sql = "SELECT * FROM teacher WHERE t_email='{$email}' AND t_pass='{$password}'";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) == 1) {
                    $row = mysqli_fetch_assoc($result);
                        $_SESSION['type'] = 2;
                        $_SESSION['SESSION_EMAIL'] = $email;
                        $_SESSION['uid'] = $row['t_id'];
                        header("Location: teacherHomepage.php");
                } else {
                    $msg = "<div class='alert alert-danger'>Email or password do not match.</div>";
                }
            }
        ?>

        <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

        <!--/Style-CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
        <!--//Style-CSS -->

        <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>
    </head>
    <body>

    <section class="w3l-mockup-form">
        <div class="container">
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                    <div class="alert-close">
                        <span class="fa fa-close"></span>
                    </div>
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="images/image.svg" alt="">
                        </div>
                    </div>
                    <div class="content-wthree">
                        <h2>Teacher Login</h2>
                        <?php echo $msg; ?>
                        <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?> method="post">
                            <input type="email" class="email" name="temail" placeholder="Enter Your Email" required>
                            <input type="password" class="password" name="tpassword" placeholder="Enter Your Password" style="margin-bottom: 2px;" required>
                            <button name="submit" name="submit" class="btn" type="submit">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </body>
</html>