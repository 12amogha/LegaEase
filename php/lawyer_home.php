<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
<!--nav bar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">LegaEase</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Features
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="how_it_works.php">How It Works</a>
                        <a class="dropdown-item" href="legal_resources.php">Legal Resources</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="contact.php">Contact Us</a>
                        <a class="dropdown-item" href="write_for_us.php">Write for us</a>
                        <a class="dropdown-item" href="blog.php">Blog</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
<!--Scheduled meeting-->

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



<footer class="container">
    <p class="float-right"><a href="lawyer_home.php">Back to top</a></p>
    <p>© 2023-2024 LegaEase, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
  </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>

</html>