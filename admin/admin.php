<!DOCTYPE html>

<html>
<head>

<title>Admin Panel</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
<style>
    div.deleteForm {
        position: fixed;
        right: 40px;
        top: 470px;
        width: 300px;
        padding: 0 10px 20px 10px;
        border: 3px solid #73AD21;
        background-color: lightblue;
        font-family: "Trirong", serif;
    }
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
        right: 40px;
        width: 350px;
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
</style>
</head>

<body>

    <div class="deleteForm">
        <h2 class="dTest">Delete Teacher</h2>
        <form method="POST" action="deleteteacher.php">
            Email : <input type="text" id="email" name="email"><br><br>
            <div class="btn"> <button type="submit" name="submit">Delete Teacher</button> </div>
        </form>
    </div>

    <div class="addForm">
        <h2 class="dTest">ADD Teacher</h2>
        <form method="POST" action="addteacher.php">
            Name : <input type="text" id="name" name="name"><br><br>
            Email : <input type="text" id="email" name="email"><br><br>
            Mobile No. : <input type="text" id="mobile" name="mobile"><br><br>
            Password : <input type="text" id="password" name="password"><br><br>
            Conform-Password : <input type="text" id="confirm-password" name="confirm-password"><br><br>
            <div class="btn"> <button type="submit" name="submit">ADD Teacher</button> </div>
        </form>
    </div>

</body>

</html>