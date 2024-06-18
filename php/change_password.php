<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Change Password</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'db.php';
        
        $email = $_POST['email'];
        $currentPassword = $_POST['currentPassword'];
        $newPassword = $_POST['newPassword'];
        $confirmPassword = $_POST['confirmPassword'];
        
        // Check if new passwords match
        if ($newPassword !== $confirmPassword) {
            echo '<div class="alert alert-danger" role="alert">New passwords do not match.</div>';
        } else {
            // Check if current password is correct
            $sql = "SELECT * FROM usersignup WHERE email = '$email' AND pass = '$currentPassword'";
            $result = $con->query($sql);
            
            if ($result->num_rows > 0) {
                // Update the password
                $sql = "UPDATE usersignup SET pass = '$newPassword', cpass = '$newPassword' WHERE email = '$email'";
                
                if ($con->query($sql) === TRUE) {
                    echo "<script>alert('Password has been changed')</script>";
                    echo "<script>window.open('page.php','_self')</script>";

                } else {
                    echo '<div class="alert alert-danger" role="alert">Error updating password: ' . $con->error . '</div>';
                }
            } else {
                echo '<div class="alert alert-danger" role="alert">Current password is incorrect.</div>';
            }
        }
        
        $con->close();
    }
    ?>
    <form action="change_password.php" method="post">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="currentPassword">Current Password</label>
            <input type="password" class="form-control" id="currentPassword" name="currentPassword" required>
        </div>
        <div class="form-group">
            <label for="newPassword">New Password</label>
            <input type="password" class="form-control" id="newPassword" name="newPassword" required>
        </div>
        <div class="form-group">
            <label for="confirmPassword">Confirm New Password</label>
            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
        </div>
        <button type="submit" class="btn btn-primary">Change Password</button>
        <a href="page.php" class="btn btn-primary">Back</a>

    </form>
</div>
<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
