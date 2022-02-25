<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Download files</title>
  <style>
    a
    {
      text-decoration:none;
      color:black;
      background-color:gray;
      padding: 10px;
    }
    td
    {
      padding: 20px;
    }
  </style>
</head>
<body>

<table>
<thead>
    <th>ID</th>
    <th>Filename</th>
    <th>size (in mb)</th>
    <th>Downloads</th>
    <th>Action</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    
    <tr>
      
      <td><?php echo $file['name']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['downloads']; ?></td>
      <td><a href="downloads.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
      <td><a href="delete.php?file_id=<?php echo $file['id'] ?>">Delete</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>
<button><a href="index.php" style="text-decoration:none;">Upload</a></button>
</body>
</html>