<?php 
require_once('db-connect.php'); 

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data
    $title = $_POST['title'];
    $description = $_POST['description'];
    $start_datetime = $_POST['start_datetime'];
    $end_datetime = $_POST['end_datetime'];

    // Insert into the database
    $stmt = $conn->prepare("INSERT INTO `schedule_list` (title, description, start_datetime, end_datetime) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $title, $description, $start_datetime, $end_datetime);
    
    if ($stmt->execute()) {
        // Redirect back to the calendar page
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}

$schedules = $conn->query("SELECT * FROM `schedule_list`");
$sched_res = [];
foreach($schedules->fetch_all(MYSQLI_ASSOC) as $row){
    $row['sdate'] = date("F d, Y h:i A",strtotime($row['start_datetime']));
    $row['edate'] = date("F d, Y h:i A",strtotime($row['end_datetime']));
    $sched_res[$row['id']] = $row;
}
if (isset($conn)) $conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scheduling</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../fullcalendar/lib/main.min.css">
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../fullcalendar/lib/main.min.js"></script>
    <style>
        :root {
            --bs-success-rgb: 71, 222, 152 !important;
        }

        html,
        body {
            height: 100%;
            width: 100%;
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }

        .header {
            border-bottom: 1px solid #E2E8F0;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 1.5rem;
            background-color: #343a40;
        }

        .nav-menu {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-item {
            margin-left: 1rem;
        }

        .nav-link {
            font-size: 1.2rem;
            color: #b3c6e0;
        }

        .nav-link:hover {
            color: #ffffff;
        }

        .cardt {
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
        }

        .modal-header, .modal-footer {
            border: none;
        }
    </style>
</head>

<body>
<header class="header">
    <nav class="navbar">
        <a href="#" class="nav-logo text-light">Placement Portal</a>
        <ul class="nav-menu">
            <li class="nav-item"><a href="index.php" class="nav-link">Dashboard</a></li>
            <li class="nav-item"><a href="postnotice.php" class="nav-link">Post Notice</a></li>
            <li class="nav-item"><a href="database.php" class="nav-link">Database</a></li>
            <li class="nav-item"><a href="placed.php" class="nav-link">Placed Students</a></li>
            <li class="nav-item"><a href="../logout.php" class="nav-link">Log Out</a></li>
        </ul>
    </nav>
</header>

<div class="container py-5" id="page-container">
    <div class="row">
        <div class="col-md-9">
            <div id="calendar"></div>
        </div>
        <div class="col-md-3">
            <div class="cardt shadow">
                <div class="card-header bg-primary text-light">
                    <h5 class="card-title">Schedule Form</h5>
                </div>
                <div class="card-body">
                    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" id="schedule-form">
                        <div class="form-group mb-2">
                            <label for="title" class="control-label">Title</label>
                            <input type="text" class="form-control form-control-sm rounded-0" name="title" id="title" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="description" class="control-label">Description</label>
                            <textarea rows="3" class="form-control form-control-sm rounded-0" name="description" id="description" required></textarea>
                        </div>
                        <div class="form-group mb-2">
                            <label for="start_datetime" class="control-label">Start</label>
                            <input type="datetime-local" class="form-control form-control-sm rounded-0" name="start_datetime" id="start_datetime" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="end_datetime" class="control-label">End</label>
                            <input type="datetime-local" class="form-control form-control-sm rounded-0" name="end_datetime" id="end_datetime" required>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="text-center">
                        <button class="btn btn-primary btn-sm rounded-0" type="submit" form="schedule-form"><i class="fa fa-save"></i> Save</button>
                        <button class="btn btn-default border btn-sm rounded-0" type="reset" form="schedule-form"><i class="fa fa-reset"></i> Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var scheds = $.parseJSON('<?= json_encode($sched_res) ?>');
</script>
<script src="../js/script_cal.js"></script>
</body>
</html>
