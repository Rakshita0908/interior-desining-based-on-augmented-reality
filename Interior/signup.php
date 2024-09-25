<?php
require ('connection.php');
if(isset($_REQUEST['email']))
{
        $name= stripslashes($_REQUEST['name']);
        $name= mysqli_real_escape_string($con, $name);
        $email= stripslashes($_REQUEST['email']);
        $email= mysqli_real_escape_string($con, $email);
        $password= stripslashes($_REQUEST['password']);
        $password= mysqli_real_escape_string($con, $password);
        $phonenum= stripslashes($_REQUEST['phonenum']);
        $phonenum= mysqli_real_escape_string($con, $phonenum);
          $query1= "insert into users (name, email, password, phonenum) VALUES ('$name', '$email', '$password', '$phonenum')";
               $res1=mysqli_query($con,$query1);
                   if($res1 == TRUE)
                   {
                      header("location: main.html");
                       
                   }
                   else
                   {
                       exit();
                   }
}
?>