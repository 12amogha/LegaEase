<?php
include 'db.php';
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $lawyer = $_POST['lawyer'];
    $years = $_POST['years'];
    $description = $_POST['description'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];   // variable name  = form me jo name field ke ander h
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];
    
    $sql="insert into lawyersignup(name,lawyer,years,description,phone,email,pass,cpass) values('$name','$lawyer','$years','$description','$phone','$email','$pass','$cpass')";
    if(mysqli_query($con,$sql))  
    {
        echo "<script>alert('new record inserted')</script>";
        echo "<script>window.open('lawyer_home.php','_self')</script>";
    }
    else
    {
        echo "error!".mysqli_error($con);
    }
    mysqli_close($con);  // closing the connection
}
?>
