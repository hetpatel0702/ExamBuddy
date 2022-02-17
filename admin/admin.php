<!DOCTYPE html>

<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<title>Admin Panel</title>

</head>

<!-- <style>

div.addTeacherPhp{

  visibility: hidden;

}

</style> -->

<body>

    <!-- <button onclick="showAddTeacher()"> ADD Teacher </button>
    <button > Delete Teacher </button> -->


    <!-- <div class="addTeacherPhp" >

       

    </div> -->
    <!-- <div class="deleteTeacherPhp" > -->
    <h2>Delete Teacher</h2>
    <!-- <form method="POST"> -->
        Email:<input type="text" id="email" name="email">
        <!-- <input type="submit" name="submit"> -->
        <button  id="submit" name="submit">Delete</button>
<!-- </form> -->
        

    <!-- </div> -->



    <script>

        $(document).ready(function(){
            $("#submit").click(function(e){
                e.preventDefault();
               
                $.ajax({
                    type:"POST",
                    url:"deleteteacher.php",
                    data:{
                        email: $("#email").val()
                    },
                    
                    success: function(result){
                        document.write(result);
                    }
                    error: function(result){
                        alert("error");
                    }
                });
                
            });
        });
        // function sendAjaxRequest() {
        //     var patientAdd = getCookie('address');
        //     var driverAdd = getCookie('destaddress');
        //     var res = '';
        //     $.ajax({
        //         url: 'DriverAssignedToPatient.php',
        //         type: 'POST',
        //         async: false,
                
        //         data: {
        //             patientAdd:patientAdd,
        //             driverAdd:driverAdd
        //         },
        //         success: function (response) {
        //             // document.write(response);
        //         },
        //         error: function (jqXHR, textStatus, errorThrown) {
        //             alert(textStatus, errorThrown);
        //             // alert('error');
        //         }
        //     });
            
        // };

        // function showAddTeacher(){

        //     element = document.querySelector('.addTeacherPhp');

        //     if(element.style.visibility == 'visible'){
        //         element.style.visibility = 'hidden';
        //     }

        //     else{

        //         element.style.visibility = 'visible';

        //     }

        // }

        // function showDeleteTeacher(){

        //     element = document.querySelector('.deleteTeacherPhp');
        //     if(element.style.visibility == 'visible'){
        //         element.style.visibility = 'hidden';
        //     }

        //     else{
        //         element.style.visibility = 'visible';
        //     }

        // }

       

    </script>



</body>



</html>