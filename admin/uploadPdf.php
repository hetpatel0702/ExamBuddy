<!DOCTYPE html>m
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <title>Upload Pdf</title>
    <?php include 'sideMenu.php'; ?>
    <link rel="stylesheet" href="adminCss.css">
    <style>
        #uploadPdfPage{
          position: relative;
          margin-left: 20%;
          height: 80%;
        }
        .container {
          margin: auto;
          padding: 5%;
        }
        .row{
          width: 80%;
          border: 1px solid #555;
        }
        .myForm{
          padding: 10px;
          min-height: 160px;
        }
        input {
          width: 90%;
          border: 1px solid silver;
          display: block;
          height: 20%;
          padding: 5px 8px;
          margin: 10px 5px;
        }
        button {
          border: 1px solid grey;
          letter-spacing: 2px;
          width: 20%;
          border-radius: 5px;
          background-color: steelBlue;
          font-weight: 600;
        }
    </style>
    <?php
     
     require '../vendor/autoload.php';
       
         use Aws\S3\S3Client;
         use Aws\S3\Exception\S3Exception;
       
         // AWS Info
         if(isset($_POST['save']))
         {
         $bucketName = 'exambuddy28';
         $IAM_KEY = 'AKIARZEIHB47WDPLNK7M';
         $IAM_SECRET = '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';
       
         // Connect to AWS
         try {
           
           $s3 = S3Client::factory(
             array(
               'credentials' => array(
                 'key' => $IAM_KEY,
                 'secret' => $IAM_SECRET
               ),
               'version' => 'latest',
               'region'  => 'ap-south-1'
             )
           );
         } catch (Exception $e) {
           // We use a die, so if this fails. It stops here. Typically this is a REST call so this would
           // return a json object.
           die("Error: " . $e->getMessage());
           echo "<script>alert('Error:' . $e->getMessage())</script>";
         }
       
         
         // For this, I would generate a unqiue random string for the key name. But you can do whatever.
         $keyName = 'Uploads/' . basename($_FILES["myfile"]['name']);
         $pathInS3 = 'https://s3.ap-south-1.amazonaws.com/' . $bucketName . '/' . $keyName;
       
         // Add it to S3
         try {
           // Uploaded:
           $file = $_FILES["myfile"]['tmp_name'];
       
           $s3->putObject(
             array(
               'Bucket'=>$bucketName,
               'Key' =>  $keyName,
               'SourceFile' => $file,
               'StorageClass' => 'REDUCED_REDUNDANCY'
             )
           );
           echo "<script>alert('File uploaded successfully')</script>";
         } catch (S3Exception $e) {
           die('Error:' . $e->getMessage());
           echo "<script>alert('Error:' . $e->getMessage())</script>";
         } catch (Exception $e) {
           die('Error:' . $e->getMessage());
           echo "<script>alert('Error:' . $e->getMessage())</script>";
         }
       
       }
       
     ?>
  </head>

  <body>

    <div id="uploadPdfPage">
      <div class="container">
        <div class="row">
          <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?> class="myForm" method="post" enctype="multipart/form-data" >
            <h3 style="margin-left:5px;letter-spacing:1px;">Upload File</h3>
            <input type="file" name="myfile"> <br>
            <button type="submit" name="save" style="margin-left:4px;">upload</button>
          </form>
        </div>
      </div>
    </div>

  </body>

</html>
