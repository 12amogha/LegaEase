<?php
include 'db.php';
if (isset($_POST['submit'])) {
    $lawyer_name = $_POST['lawyer_name'];
    $client_name = $_POST['client_name'];
    $client_email = $_POST['client_email'];
    $client_phone = $_POST['client_phone'];
    $meeting_date = $_POST['meeting_date'];
    $meeting_time = $_POST['meeting_time'];
    $meeting_note = $_POST['meeting_note'];
    
    $sql = "INSERT INTO schedule (lawyer_name, client_name, client_email, client_phone, meeting_date, meeting_time, meeting_note) VALUES ('$lawyer_name', '$client_name', '$client_email', '$client_phone', '$meeting_date', '$meeting_time', '$meeting_note')";
    
    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Meeting scheduled successfully!')</script>";
        echo "<script>window.open('page.php', '_self')</script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
    mysqli_close($con);  // closing the connection
}
?>
