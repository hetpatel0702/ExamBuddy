<!DOCTYPE html>

<html>
<head>

<title>Admin Panel</title>
<?php 
    include '../header.php';
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
<style>
    /* div.deleteForm {
        position: fixed;
        right: 2%;
        top: 64%;
        width: 12%;
        padding: 0 10px 20px 10px;
        border: 3px solid #73AD21;
        background-color: lightblue;
        font-family: "Trirong", serif;
    } */ 

    h2.dTest{
        text-decoration-line: underline;
        text-align: center;
        color: white;
        text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
    }
    .btn{
        text-align: center;
    }

    div.addForm {
        position: fixed;
        right: 2%;
        top: 10%;
        width: 16%;
        padding: 0 10px 20px 10px;
        border: 3px solid #73AD21;
        background-color: lightblue;
        font-family: "Trirong", serif;
    }

    div.addQuestion{
        position: fixed;
        right: 18.5%;
        top: 10%;
        width: 16%;
        padding: 0 10px 20px 10px;
        border: 3px solid #73AD21;
        background-color: lightblue;
        font-family: "Trirong", serif;
    }

    #errd{
        position: fixed;
        right: 40px;
        top: 440px;
        color: red;
    }

    table{
    	width: 50%;
        margin-left: 2%;
        margin-top: 2%;
    	border-collapse: collapse;
	}
    table th{
    	background-color: #1cc3b2;
    	padding-top: 10px;
    	padding-bottom: 10px;
    	text-align: left;
    }
    table tr:nth-child(even){background-color: #f2f2f2;}d
    table tr:hover {background-color: #d1f1ed;}
    #a:hover {color: red;}
    table td,table th{
		border: 1px solid grey;
    	padding: 8px;
	}
</style>
</head>

<body>

<div>
    
</div>

    <?php 
        include '../config.php';

        $tName="";
        $tEmail="";
        $tMobile="";
        $result = mysqli_query($conn, "SELECT t_id, t_name, t_email,t_mob FROM teacher");
        if (mysqli_num_rows($result) > 0) {
            echo "<div style='overflow-x: auto;'><table><tr><th>ID</th><th>Name</th><th>Email</th><th>Mobile</th></tr>";

            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["t_id"]. "</td>
                        <td>"."<a id='a' onClick=\"javascript: return confirm('Are you sure you want to delete Teacher whose name is ". $row["t_name"]."?');\" href="."deleteteacher.php?tid=".$row['t_id'].">" . $row["t_name"]. "</a>"."</td>
                        <td>" . $row["t_email"]. "</td>
                        <td>" . $row["t_mob"]. "</td>
                    </tr>";
            }
            echo "</table></div>";
        }
    ?>

    <!-- Delete Teacher -->
    <!-- <div class="deleteForm">
        <h2 class="dTest">Delete Teacher</h2>
        <form method="POST" action="deleteteacher.php">
            Email : <br><input type="text" id="email" name="email"><br><br>
            <div class="btn"> <button type="submit" id="deleteBtn" name="submit">Delete Teacher</button> </div>
        </form>
    </div> -->

    <!-- ADD Teacher -->
    <div class="addForm">
        <h2 class="dTest">ADD Teacher</h2>
        <form method="POST" action="addteacher.php">
            Name : <br> <input type="text" id="name" name="name"><br>
            Email : <br><input type="text" id="temail" name="email"><br>
            Mobile No. : <br><input type="text" id="mobile" name="mobile"><br>
            Password : <br><input type="text" id="password" name="password"><br>
            Conform-Password : <br><input type="text" id="confirm-password" name="confirm-password"><br><br>
            <div class="btn"> <button type="submit" id="addBtn" name="submit">ADD Teacher</button> </div>
        </form>
    </div>

    <!-- ADD Question -->
    <div class="addQuestion">
        <h2 class="dTest">Add New Question</h2>
        <form method="POST" action="addQuestion.php">
            Question : <br><input type="text" id="name" name="question"><br>
            Option1 : <br><input type="text" id="temail" name="option1"><br>
            Option2 : <br><input type="text" id="mobile" name="option2"><br>
            Option3 : <br><input type="text" id="password" name="option3"><br>
            Option4 : <br><input type="text" id="confirm-password" name="option4"><br>
            Correct Option : <br><select id="cars" name="correctOption">
                                <option></option>
                                <option value="option1">option1</option>
                                <option value="option2">option2</option>
                                <option value="option3">option3</option>
                                <option value="option4">option4</option>
                             </select><br><br>
            Question Tag : <br><input type="text" id="mobile" name="questionTag"><br><br>
            <div class="btn"> <button type="submit" id="addBtn" name="submit">Add Question</button> </div>
        </form>
    </div>

   


</body>

</html>