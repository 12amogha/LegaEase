<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Documents</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">My Documents</h2>
    <div class="list-group">
        <?php
        $targetDir = "uploads/";
        $files = scandir($targetDir);
        foreach ($files as $file) {
            if ($file !== '.' && $file !== '..') {
                echo '<div class="d-flex justify-content-between align-items-center list-group-item list-group-item-action">';
                echo '<a href="' . $targetDir . $file . '">' . $file . '</a>';
                echo '<a href="' . $targetDir . $file . '" class="btn btn-primary btn-sm" target="_blank">View</a>';
                echo '</div>';
            }
        }
        ?>
    </div>
</div>


<div class="container mt-5">
        <div class="row">
            <div class="col text-center">
                <a href="page.php" class="btn btn-primary btn-lg">Back to Home Page</a>
            </div>
        </div>
    </div>


<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
