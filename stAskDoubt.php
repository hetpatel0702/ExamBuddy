<html>
    <head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <title>ASK DOUBT</title>
    <style>
        #askDoubt{
            padding-top: 2%;
            padding-left: 5%;
        }
        .row{
          width: 80%;
          border: 1px solid #555;
        }
        .myForm{
          padding: 10px;
          min-height: 160px;
        }
        #exam, #new_select{
            padding: 5px 8px;
            margin: 2px 50px;
        }
        input {
          width: 90%;
          border: 1px solid silver;
          display: block;
          height: 8%;
          padding: 10px 8px;
          margin: 8px 5px;
          text-align: center;
        }
        button {
          border: 1px solid grey;
          letter-spacing: 2px;
          width: 20%;
          padding: 10px;
          border-radius: 5px;
          background-color: steelBlue;
          font-weight: 600;
        }
    </style>
    <link rel="stylesheet" href="style.css">

    <?php
        if (isset($_POST['askDbt'])) {
            // include './config.php';
            // $sql = "SELECT * FROM files";
            // $result = mysqli_query($conn, $sql);
          
            // $files = mysqli_fetch_all($result, MYSQLI_ASSOC);

            //   // name of the uploaded file
            //   $filename = $_FILES['myfile']['name'];
          
            //   // destination of the file on the server
            //   $destination = './uploads/' . $filename;
          
            //   // get the file extension
            //   $extension = pathinfo($filename, PATHINFO_EXTENSION);
          
            //   // the physical file on a temporary uploads directory on the server
            //   $file = $_FILES['myfile']['tmp_name'];
            //   $size = $_FILES['myfile']['size'];
          
            //   if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
            //     echo "<script>alert('You file extension must be .zip, .pdf or .docx')</script>";
            //   } elseif ($_FILES['myfile']['size'] > 10000000) { // file shouldn't be larger than 10Megabyte
            //       echo "<script>alert('File too large!!!')</script>";
            //   } else {
            //       // move the uploaded (temporary) file to the specified destination
            //       if (move_uploaded_file($file, $destination)) {
            //         $crse = $_POST["course"];
            //         $exm = $_POST["exam"];
            //          $sql = "INSERT INTO files (name, size, downloads, exam, course) VALUES ('$filename', $size, 0, $exm, $crse)";
            //           if (mysqli_query($conn, $sql)) {
            //               echo "<script>alert('File uploaded successfully')</script>";
            //           }
            //       } else {
            //           echo "<script>alert('Failed to upload file!!!')</script>";
            //       }
            //   }
          }  
    ?>
    

    <script type="text/javascript">
        function add_exam(val)
        {
            // console.log("ok, ok ");
            $.ajax({
            type: 'post',
            url: 'courseListForAskDoubt.php',
            data: {
                aEid:val
            },
            success: function (response) {
                document.getElementById("new_select").innerHTML=response; 
            }
            });
        }
    </script>
    </head>
    <body>

    <?php 
      include './header.php' ;
      if (!isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: login.php");
    }
    ?>

    <div id="askDoubt">
      <div class="container">
        <div class="row">
          <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?> class="myForm" method="post" enctype="multipart/form-data" >
          <h2 style="margin:15px 50px;letter-spacing:1px;">ASK DOUBT</h2>
          <div  id="myInput">
            <?php
                include './config.php';
                $result = mysqli_query($conn, "SELECT * FROM exam ORDER BY e_id");
                if (mysqli_num_rows($result) > 0) {
                    echo "<select name='exam' id='exam' onchange='add_exam(this.value);'>";
                    echo "<option>-Select Exam-</option>";
                    while($row = $result->fetch_assoc()) {
                        echo "<option value='".$row["e_id"]."'>".$row["e_name"]."</option>";
                    }
                    echo "</select>";
                }
            ?>
            </div>
            <br>
            <div  id="myInput">
              <select id="new_select" name='course'>
                  <option>first select the exam</option>
              </select>
            </div>
            <input type="file" name="myfile" style="margin:15px 44px; width:70%;"> <br>
            <button type="submit" name="askDbt" style="margin:2px 44px;">upload</button>
          </form>
        </div>
      </div>
    </div>

  </body>
</html>