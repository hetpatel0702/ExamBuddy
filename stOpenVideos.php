<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link rel="stylesheet" href="style.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<style>
  #body{
    padding: 40px 80px;
  }
  #courseList{
    display: grid;
    grid-template-columns: auto auto auto auto;
    padding: 10px;
  }
  #courseBox{
    background-color: rgba(255, 255, 255, 0.8);
    border: 1px solid rgba(0, 0, 0, 0.8);
    padding: 20px;
    font-size: 30px;
    margin: 4px;
    text-align: center;
  }
  #courseBox a{
    color: black;
    text-decoration: none;
  }
  #courseBox:nth-of-type(odd){background-color: lightgreen;}
  #courseBox:nth-of-type(even){background-color: lightblue;}
</style>

<script type="text/javascript">
    function selectCourse(val)
    {
      $.ajax({
        type: 'post',
        url: 'stOpenCourseList.php',
        data: {
            eid: val
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

  <div id="body">

    <label for="exam" style="font-size: 18px;">Choose a Exam:</label>
    <?php
    // echo $_SERVER['REQUEST_URI'];
        include './config.php';
        $result = mysqli_query($conn, "SELECT * FROM exam ORDER BY e_id");
        if (mysqli_num_rows($result) > 0) {
          echo "<div><select name='exam' id='exam' onchange='selectCourse(this.value);'>";
          echo "<option>-Select Exam-</option>";
          while($row = $result->fetch_assoc()) {
              echo "<option value='".$row["e_id"]."'>".$row["e_name"]."</option>";
            //   echo "<option value='openVideos.php?eid=".$row["e_id"]."' onclick='changeSelected(this.".$row["e_id"].")'>".$row["e_name"]."</option>";
          }
          echo "</select></div>";
        }
    ?>

    <label for="course" style="font-size: 18px;">Choose a course:</label>
    <div id="new_select">
    </div>

  </div>

</body>

</html>