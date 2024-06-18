<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LegaEase - Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            padding-top: 56px;
        }

        .sidebar {
            height: 100vh;
            position: fixed;
            top: 56px;
            left: 0;
            width: 250px;
            background-color: #343A40;
            padding-top: 1rem;
        }

        .content {
            margin-left: 250px;
            padding: 1rem;
        }

        .sidebar .nav-link {
            color: #ffffff;
        }

        .sidebar .nav-link.active {
            background-color: #495057;
        }

        .sidebar .nav-link:hover {
            background-color: #495057;
        }

        .sidebar .nav-link i {
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <!-- Top Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark  fixed-top">
        <a class="navbar-brand" href="#">LegaEase</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="how_it_works.php">How It Works</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="legal_resources.php">Legal Resources</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="write_for_us.php">Write For Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Logout</a>
                </li>

            </ul>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="page.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="upload.php"><i class="fa-solid fa-upload"></i></i> Upload Document</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="my_documents.php"><i class="fas fa-file-alt"></i> My Documents</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-robot"></i> AI Legal Assistant</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="change_password.php"><i class="fas fa-cogs"></i> Settings</a>
            </li>
        </ul>
    </div>
    <!-- Main Content Area -->
    <div class="content">
        <div class="container-fluid">
            <h1 class="mt-4">Welcome back!</h1>
            <div class="row mt-4">
                <!-- Quick Actions -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Quick Actions</h5>
                            <a href="upload.php" class="btn btn-primary btn-block">Upload New Document</a>
                            <a href="#" class="btn btn-secondary btn-block">Generate Legal Document</a>
                            <a href="#" class="btn btn-info btn-block">Consult AI Assistant</a>
                        </div>
                    </div>
                </div>
                <!-- Recent Documents -->
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Recent Documents</h5>
                            <ul class="list-group list-group-flush">
                                <?php
                                $targetDir = "uploads/";
                                $files = scandir($targetDir);
                                $count = 0;
                                foreach ($files as $file) {
                                    if ($file !== '.' && $file !== '..' && $count < 2) {
                                        $filePath = $targetDir . $file;
                                        $fileDate = date("F d Y H:i:s.", filemtime($filePath)); // Get file modification date
                                ?>
                                        <li class="list-group-item">
                                            <?php echo $file; ?> - <small><?php echo $fileDate; ?></small>
                                            <div class="float-right">
                                                <a href="<?php echo $filePath; ?>" class="btn btn-sm btn-primary" target="_blank">View</a>
                                                <button class="btn btn-sm btn-danger" onclick="confirmDelete('<?php echo $filePath; ?>')">Delete</button>
                                            </div>
                                        </li>
                                <?php
                                        $count++;
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <h1 class="mt-4">Meet Our Expert Lawyers!</h1>

           

            <div class="container mt-4">
    <div class="row">
        <?php
        include 'db.php';  // Include the database connection
        $sql = "SELECT name, lawyer, years, description, phone, email FROM lawyersignup";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo '
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100">
                        <img src="profile.jpg" class="card-img-top rounded-circle mx-auto mt-3" alt="Lawyer Image" style="width: 100px; height: 100px;">
                        <div class="card-body text-center">
                            <h5 class="card-title">' . htmlspecialchars($row["name"]) . '</h5>
                            <p class="card-text"><strong>Specialization:</strong> ' . htmlspecialchars($row["lawyer"]) . '</p>
                            <p class="card-text"><strong>Experience:</strong> ' . htmlspecialchars($row["years"]) . ' years</p>
                            <p class="card-text"><strong>Contact:</strong> ' . htmlspecialchars($row["email"]) . '</p>
                            <p class="card-text"><strong>Phone:</strong> ' . htmlspecialchars($row["phone"]) . '</p>
                        </div>
                        <div class="card-footer text-center">
                        <a href="#" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#scheduleMeetingModal">Schedule Consultation</a>
                        </div>
                    </div>
                </div>';
            }
        } else {
            echo "<p>No lawyers found.</p>";
        }
        $con->close();
        ?>
    </div>
</div>

<!-- Schedule Meeting Modal -->
<div class="modal fade" id="scheduleMeetingModal" tabindex="-1" role="dialog" aria-labelledby="scheduleMeetingModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="scheduleMeetingModalLabel">Schedule a Meeting with Lawyer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="schedule.php" method="post">
                    <div class="form-group">
                        <label for="lawyerName">Lawyer Name</label>
                        <input type="text" class="form-control" id="lawyerName" name="lawyer_name" placeholder="Enter lawyer's name" required>
                    </div>
                    <div class="form-group">
                        <label for="clientName">Your Name</label>
                        <input type="text" class="form-control" id="clientName" name="client_name" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <label for="clientEmail">Your Email</label>
                        <input type="email" class="form-control" id="clientEmail" name="client_email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="clientPhone">Your Phone Number</label>
                        <input type="text" class="form-control" id="clientPhone" name="client_phone" placeholder="Enter your phone number" required>
                    </div>
                    <div class="form-group">
                        <label for="meetingDate">Preferred Meeting Date</label>
                        <input type="date" class="form-control" id="meetingDate" name="meeting_date" required>
                    </div>
                    <div class="form-group">
                        <label for="meetingTime">Preferred Meeting Time</label>
                        <input type="time" class="form-control" id="meetingTime" name="meeting_time" required>
                    </div>
                    <div class="form-group">
                        <label for="meetingNotes">Additional Notes</label>
                        <textarea class="form-control" id="meetingNotes" name="meeting_note" rows="3" placeholder="Enter any additional notes or information"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Schedule Meeting</button>
                </form>

            </div>
        </div>
    </div>
</div>


            <!-- Notifications -->
            <div class="row mt-4">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Notifications</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Notification 1: <small>Details</small></li>
                                <li class="list-group-item">Notification 2: <small>Details</small></li>
                                <!-- Add more notifications as needed -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Resources and Help -->
            <div class="row mt-4">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Resources and Help</h5>
                            <a href="how_it_works.php" class="btn btn-link">How to use LegaEase</a>
                            <a href="how_it_works.php" class="btn btn-link">FAQ</a>
                            <a href="contact.php" class="btn btn-link">Contact Support</a>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="container">
                <p class="float-right"><a href="page.php">Back to top</a></p>
                <p>© 2023-2024 LegaEase, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
            </footer>

        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function confirmDelete(filePath) {
            if (confirm("Are you sure you want to delete this document?")) {
                // Redirect to delete.php with the file path as parameter
                window.location.href = "delete.php?file=" + filePath;
            }
        }
    </script>

</body>

</html>