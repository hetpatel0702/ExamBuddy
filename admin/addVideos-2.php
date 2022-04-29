<!-- <html>
<head>
    <title>ADD videos from link </title>
    <?php 
    // include 'sideMenu.php'; ?>
    <link rel="stylesheet" href="adminCss.css">
    <style>
        #addVideo{
            position: relative;
            margin-left: 20%;
            text-align: center;
        }
        .fileInput{
          margin-left: 12px;
          width: 73%;
          padding: 5px;
          border: 1px solid grey;
        }
    </style>
    <?php
     
    //  require '../vendor/autoload.php';
       
    //      use Aws\S3\S3Client;
    //      use Aws\S3\Exception\S3Exception;
       
    //      // AWS Info
    //      if(isset($_POST['submit']))
    //      {
    //       include '../config.php';

    //      $name =  mysqli_real_escape_string($conn, $_POST['name']);
    //      $courseId = mysqli_real_escape_string($conn, $_POST['course']);
    //      $examID =  mysqli_real_escape_string($conn, $_POST['exam']);
         
    //     if($name!=null && $courseId!=null && $examID!=null){

    //         $bucketName = '';
    //         $IAM_KEY = '';
    //         $IAM_SECRET = '';
          
    //         // Connect to AWS
    //         try {
              
    //           $s3 = S3Client::factory(
    //             array(
    //               'credentials' => array(
    //                 'key' => $IAM_KEY,
    //                 'secret' => $IAM_SECRET
    //               ),
    //               'version' => 'latest',
    //               'region'  => 'ap-south-1'
    //             )
    //           );
    //         } catch (Exception $e) {
    //           // We use a die, so if this fails. It stops here. Typically this is a REST call so this would
    //           // return a json object.
    //           die("Error: " . $e->getMessage());
    //           echo "<script>alert('Error:' . $e->getMessage())</script>";
    //         }
          
            
    //         // For this, I would generate a unqiue random string for the key name. But you can do whatever.
    //         $keyName = 'Videos/' .$examID. '/' .$courseId. '/' .$name;
    //         $pathInS3 = 'https://s3.ap-south-1.amazonaws.com/' . $bucketName . '/' . $keyName;
          
    //         // Add it to S3
    //         echo "<script>alert(basename(". $_FILES['myvideo']['name'] ."))</script>";
    //         try {
    //           // Uploaded:
    //               $file = $_FILES["myvideo"]['name'];
                  

    //               $s3->putObject(
    //                 array(
    //                   'Bucket'=>$bucketName,
    //                   'Key' =>  $keyName,
    //                   'SourceFile' => $file,
    //                   'StorageClass' => 'REDUCED_REDUNDANCY'
    //                 )
    //               );
    //               echo "<script>alert('File uploaded successfully')</script>";
    //         } catch (S3Exception $e) {
    //           die('Error:' . $e->getMessage());
    //           echo "<script>alert('Error:' . $e->getMessage())</script>";
    //         } catch (Exception $e) {
    //           die('Error:' . $e->getMessage());
    //           echo "<script>alert('Error:' . $e->getMessage())</script>";
    //         }
    //       }
       
    //    }
       
     ?>
<script type="text/javascript">
    function add_exam(val)
    {
        $.ajax({
        type: 'post',
        url: 'courseListForAddVideo.php',
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
    <div id="addVideo">

        <h2 class="heading">UPLOAD VIDEO</h2>
        <form method="POST" action= <?php 
        // echo htmlspecialchars($_SERVER['PHP_SELF']) ?>>
            <div id="myInput"><input type="text" id="name" name="name" placeholder="Enter video Name"></div><br>

            <div  id="myInput">
            <?php
                // include '../config.php';
                // $result = mysqli_query($conn, "SELECT * FROM exam ORDER BY e_id");
                // if (mysqli_num_rows($result) > 0) {
                //     echo "<div><select name='exam' id='exam' onchange='add_exam(this.value);'>";
                //     echo "<option>-Select Exam-</option>";
                //     while($row = $result->fetch_assoc()) {
                //         echo "<option value='".$row["e_id"]."'>".$row["e_name"]."</option>";
                //     }
                //     echo "</select></div>";
                // }
            ?>
            </div>
            <br>
            <div  id="myInput">
            <select id="new_select" name='course'>
                <option>first select the exam</option>
            </select>
            </div>
            <br>
            <input type="file" class="fileInput" name="myvideo" id="myvideo"><br><br>
            <div class="btn"><button type="submit" id="addBtn"  name="submit">ADD Video</button> </div>
        </form>
    </div>

</body>

</html>
 -->
