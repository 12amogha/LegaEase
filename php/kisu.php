<?php
// db.php - Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "ipl";

$con = mysqli_connect($servername, $username, $password, $database);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h2 class="text-center mb-4">Scheduled Meetings</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Lawyer Name</th>
                <th>Client Name</th>
                <th>Client Email</th>
                <th>Client Phone</th>
                <th>Meeting Date</th>
                <th>Meeting Time</th>
                <th>Additional Notes</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT lawyer_name, client_name, client_email, client_phone, meeting_date, meeting_time, meeting_note FROM schedule";
            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>{$row['lawyer_name']}</td>
                            <td>{$row['client_name']}</td>
                            <td>{$row['client_email']}</td>
                            <td>{$row['client_phone']}</td>
                            <td>{$row['meeting_date']}</td>
                            <td>{$row['meeting_time']}</td>
                            <td>{$row['meeting_note']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='7' class='text-center'>No scheduled meetings found.</td></tr>";
            }

            mysqli_close($con);
            ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
