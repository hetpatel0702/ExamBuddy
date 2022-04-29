<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<style>
  #showVideo{
    float: left;
    clear: left;
    width: 25%;
    padding: 15px;
    margin: auto;
    background: white;
    height: 100%;
  }
  #watch{
    float: right;
    width: 75%;
    height: 70%;
    padding: 10px;
    background: white; 
    text-align: center;
  }
  #linkName{
    padding: 5px;
    margin: 8px;
  }
  a{
    text-decoration: none;
    color: black;
    font-size: 18px;
  }
  a:hover{
    text-decoration: none;
  }
  a.myVideo:hover{
    color: brown;
    font-size: 18px;
    text-decoration: none;
    cursor: pointer;
  }
  a.myVideo:visited{
    color: blue;
    font-size: 18px;
  }
</style>

<script type="text/javascript">
    function fetch_video(val)
    {
        $.ajax({
        type: 'post',
        url: 'stWatchVideo.php',
        data: {
            id:val
        },
        success: function (response) {
            document.getElementById("new_video").innerHTML=response; 
        }
        });
    }
</script>
<link rel="stylesheet" href="style.css">

<?php
    if (isset($_POST['downloadFile'])) {

      include '../config.php';
      $id = $_POST['file_id'];
  
      echo "<script>alert($id)</script>";
  
      // fetch file to download from database
      $sql = "SELECT * FROM files WHERE id=$id";
      $result = mysqli_query($conn, $sql);
  
      $file = mysqli_fetch_assoc($result);
      $filepath = '../uploads/' . $file['name'];
      echo "<script>alert($filepath)</script>";
  
      if (file_exists($filepath)) {
          header('Content-Description: File Transfer');
          header('Content-Type: application/octet-stream');
          header('Content-Disposition: attachment; filename=' . basename($filepath));
          header('Expires: 0');
          header('Cache-Control: must-revalidate');
          header('Pragma: public');
          header('Content-Length: ' . filesize('../uploads/' . $file['name']));
          readfile('../uploads/' . $file['name']);
  
          // Now update downloads count
          $newCount = $file['downloads'] + 1;
          $updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
          mysqli_query($conn, $updateQuery);
          exit;
      }
      else{
          echo "<script>alert('File path is not Exist!!!')</script>";
      }
   }
  ?>


</head>
<body>
  
    <?php 
      include './header.php' ;
    ?>

  <div id="body">

    <div id="showVideo">
      <?php
      if(isset($_GET['cid'])){
          include './config.php';

          $cid = $_GET['cid'];
          $index=1;
          $result = mysqli_query($conn, "SELECT * FROM videos WHERE c_id='$cid' ORDER BY id");
          if (mysqli_num_rows($result) > 0) {
            echo "<button type='button' class='btn btn-info' data-toggle='collapse' data-target='#demo' style='background-color:white;border:none;color:black;font-size:18px;'> >Video Lectures</button>";
            echo "<div id='demo' class='collapse'>";
            while($row = $result->fetch_assoc()) {  
                echo "<div id='linkName'><a class='myVideo' onclick='fetch_video(".$row["id"].")'>($index) ".$row["name"]."</a></div>";
                // echo "<div id='linkName'>($index)  <a href='showVideos.php?id=".$row["id"]."'>".$row["name"]."</a></div>";
                $index++;
            }
            echo "</div><br>";

            $index=1;
            $result1 = mysqli_query($conn, "SELECT * FROM files WHERE course='$cid' ORDER BY id");
            if (mysqli_num_rows($result1) > 0) {
              echo "<button type='button' class='btn btn-info' data-toggle='collapse' data-target='#demo1' style='background-color:white;border:none;color:black;font-size:18px;'> >Lecture Materials</button>";
              echo "<div id='demo1' class='collapse'>";
              while($row1 = $result1->fetch_assoc()) {  //".$row1["id"]."
                  echo "<div id='linkName'><a class='myFile' href='/ExamBuddy/stDownloadFile.php?fid=".$row1["id"]."'>($index) ".$row1["name"]."</a></div>"; 
                  $index++;
              }
              echo "</div>";
            } 
          }
          else{
            echo "<script>alert('Videos are Not Available!!!')</script>";
            echo "<script>window.location.href='stOpenVideos.php';</script>";
          }
      }
      ?>
    </div>


    <div id="watch">
      <div id="new_video">
          <h1>Demo</h1>
          <iframe  width="85%" height="100%" src="https://www.youtube.com/embed/LbfMRnOhJGs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>

  </div>

</body>

</html>