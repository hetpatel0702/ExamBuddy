<?php

if(isset($_POST['submit']))
{
    include '../config.php';

    $question = $_POST['question'];
    $option1 = $_POST['option1'];
    $option2 = $_POST['option2'];
    $option3 = $_POST['option3'];
    $option4 = $_POST['option4'];
    $correctOption = $_POST['correctOption'];
    $questionTag = $_POST['questionTag'];

    if($question!=NULL && $option1!=NULL && $option2!=NULL && $option3!=NULL && $option4!=NULL && $correctOption!=NULL && $questionTag!=NULL){

        $sql = "INSERT INTO quiz (question,option1,option2,option3,option4,correctOption,questionTag) values 
                ('{$question}','{$option1}','{$option2}','{$option3}','{$option4}','{$correctOption}','{$questionTag}')";
        $result = mysqli_query($conn,$sql);
        if($result)
        {
            header("location:admin.php?$msg=QuestionAddedSuccessfully");
        }
        else{
            header("location:admin.php?$msg=Error");
        }
    }
    else{
        header("location:admin.php?$msg=Do Not Enter Null data!!!");
    }

}
else{
    header("location:admin.php?$msg=Submit-Error");
}
