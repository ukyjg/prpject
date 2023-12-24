<?php
 $user_name=$_REQUEST['user_name'];
 $email =$_REQUEST['email'];
 $password =$_REQUEST['pass'];



 if(isset($_post['btntest']))
 {

    $host="localhost";
    $user ="root";
    $password="";
    $db="customers";
    

    $conn = mysqli_connect($host,$user,$password,$db);

    $insert="insert into customers values ('user_name','email','password')";

    mysquli_query($conn,$insert);


    if($conn){
        echo("<h1 style='color:green;'>Your Registration is Done!</h1>");
    }
    else{
        echo("<h1 style='color:red;'>Your Registration is Falied!</h1>");
    }




 }
 
?>