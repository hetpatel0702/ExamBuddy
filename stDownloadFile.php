<?php
    if (isset($_GET['fid'])) {
      include './config.php';
      $id = $_GET['fid'];
  
      echo "<script>alert($id)</script>";
  
      // fetch file to download from database
      $sql = "SELECT * FROM files WHERE id=$id";
      $result = mysqli_query($conn, $sql);
  
      $file = mysqli_fetch_assoc($result);
      $filepath = './uploads/' . $file['name'];
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
          header('location: stShowVideos.php');
      }
      else{
          echo "<script>alert('File path is not Exist!!!')</script>";
        //   header('location: stDownloadPdf.php');
      }
   }
  ?>