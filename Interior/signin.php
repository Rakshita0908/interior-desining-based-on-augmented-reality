<?php
require ('connection.php');
session_start();
  if(isset($_POST['email']))
           {
               $email= stripslashes($_REQUEST['email']);
               $email= mysqli_real_escape_string($con, $email);
               $password= stripslashes($_REQUEST['password']);
               $password= mysqli_real_escape_string($con, $password);
               $query2= "SELECT * FROM users WHERE Email='$email' AND Password= '".md5($password)."'";
               $res2= mysqli_query($con, $query2) or die($mysql_error());
               $rows= mysqli_num_rows($res2);
               if($rows==1)
               {
                   $_SESSION['email']=$email;
                   header("location: website.html");
               }
               else
               {
                   echo "Invalid username and password";
               }
           
           }
?>