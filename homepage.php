<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExamBuddy</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
</head>

<body>

    <?php 
    include './header.php' ;
    ?>
    <div class="nav">
        <span class="span1">Welcome To ExamBuddy</span>
        <div class="text">one Stop solution to all your competitve exams, Get an Competitive advantage over your peers
        </div>
        <div>
            <button class="btn2">Join Us</button>
        </div>
        <img src="image.png">
    </div>
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="bannerItems">
                    
                        <i class="fas fa-video icon"></i>
                        <p class="smallText"><span class="textHead">30,000 online courses</span><br>
                            Enjoy a variety of fresh topics
                        </p>
                </div>

                <div class="bannerItems">
                    
                    <i class="fas fa-chalkboard-teacher icon"></i>
                    <p class="smallText"><span class="textHead">Top Experts</span><br>
                        Find the right instructor for you
                    </p>
                </div>

                <div class="bannerItems">
                    
                    <i class="fas fa-book-reader icon"></i>
                    <p class="smallText"><span class="textHead">Lifetime access</span><br>
                        Learn at your own pace
                    </p>
                </div>
            </div>
        </div>
    </div>
<br><br>
<div class="courses">
    <div class="card">
        <a href="stShowVideos.php?cid=1"><img src="images/datastructure.png" alt="Data Structure"></a>
        <div class="container1">
            <h4><b>Introduction To Data structures</b></h4>
            <div class="time">
                <i class="far fa-light fa-clock iconCard"> </i>
                <span>10h 30m</span>
                <i class="fas fa-signal iconCard1"> </i>
                <span>Beginners</span>
            </div>
            <div class="stars">
                <i class="fas fa-star" aria-hidden="true"></i>
                <i class="fas fa-star" aria-hidden="true"></i>
                <i class="fas fa-star" aria-hidden="true"></i>
                <i class="fas fa-star" aria-hidden="true"></i>
                <i class="fas fa-star-half" ></i>
            </div>
            <div>
            Data Structure can be defined as the group of data elements which provides an efficient way of storing...
            </div>
            <div>
                <b>Educator: Anand Patel</b>
            </div>
        </div>
    </div>
    <div class="card">
        <img src="images/DBMS.png" alt="" >
        <div class="container1">
            <h4><b>Introduction To DBMS</b></h4>
            <div class="time">
                <i class="far fa-light fa-clock iconCard"> </i>
                <span>12h 30m</span>
                <i class="fas fa-signal iconCard1"> </i>
                <span>Beginners</span>
            </div>
            <div class="stars">
                <i class="fas fa-star" aria-hidden="true"></i>
                <i class="fas fa-star" aria-hidden="true"></i>
                <i class="fas fa-star" aria-hidden="true"></i>
                <i class="fas fa-star" aria-hidden="true"></i>
                <i class="fas fa-star-half" ></i>
            </div>
            <div>
                Educator: Nij Padariya
            </div>
        </div>
    </div>
    <div class="card">
        <img src="images/maths.png" alt="" >
        <div class="container1">
            <h4><b>Mathematics</b></h4>
            <div class="time">
                <i class="far fa-light fa-clock iconCard"> </i>
                <span>8h 30m</span>
                <i class="fas fa-signal iconCard1"> </i>
                <span>Advanced</span>
            </div>
            <div class="stars">
                <i class="fas fa-star" aria-hidden="true"></i>
                <i class="fas fa-star" aria-hidden="true"></i>
                <i class="fas fa-star" aria-hidden="true"></i>
                <i class="fas fa-star" aria-hidden="true"></i>
                <i class="fas fa-star-half" ></i>
            </div>
            <div>
                Educator: Het Patel
            </div>
        </div>
    </div>
    </div>
    
</div>
    
</body>

</html>