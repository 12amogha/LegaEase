<?php
include 'db.php';
if(isset($_POST['submit']))
{
    $e = $_POST['email_input'];   // variable name  = form me jo name field ke ander h
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];
    
    $sql="insert into usersignup(email,pass,cpass) values('$e','$pass','$cpass')";
    if(mysqli_query($con,$sql))  
    {
        echo "<script>alert('new record inserted')</script>";
        echo "<script>window.open('page.php','_self')</script>";
    }
    else
    {
        echo "error!".mysqli_error($con);
    }
    mysqli_close($con);  // closing the connection
}
?>
