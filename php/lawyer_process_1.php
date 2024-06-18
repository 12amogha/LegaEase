<?php
    include('db.php');

    if (isset($_POST['submit'])) 
    {
        $email = $_POST['e'];
        $password = $_POST['p'];

    // Prepare the SQL statement
        $sql = "select * from lawyersignup where email = '$email' and pass = '$password'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count == 1)
        {
            header("Location:lawyer_home.php");
        }
        else{
            echo '<script>
            alert("Login failed. Invalid username or password")
            </script>';
            echo "<script>window.open('lawyer_signup.php','_self')</script>";
            
        }
    }
?>