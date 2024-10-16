<?php
session_start();
require_once("../db.php");

if (isset($_POST['submit'])) {
    // Capture the values from the form
    $subject = $_POST['subject'];
    $notice = $_POST['input'];
    $audience = $_POST['audience'];

    // Directory for file uploads
    $folder_dir = "../uploads/resume/";
    
    // Initialize resume filename
    $file = null;

    // Check if file was uploaded
    if (isset($_FILES['resume']) && $_FILES['resume']['error'] === UPLOAD_ERR_OK) {
        // Get basename and extension
        $base = basename($_FILES['resume']['name']);
        $resumeFileType = pathinfo($base, PATHINFO_EXTENSION);
        $file = uniqid() . "." . $resumeFileType;
        $filename = $folder_dir . $file;

        // Move the uploaded file
        move_uploaded_file($_FILES['resume']['tmp_name'], $filename);
    }

    $hash = md5(uniqid());
    
    // Insert into database
    $sql = "INSERT INTO notice (subject, notice, audience, resume, hash, `date`) VALUES ('$subject', '$notice', '$audience', '$file', '$hash', NOW())";
    
    if ($conn->query($sql) === TRUE) {
        include 'sendmail.php';
        header("Location: postnotice.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Placement Portal</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/AdminLTE.min.css">
    <link rel="stylesheet" href="css/_all-skins.min.css">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body class="hold-transition skin-green sidebar-mini">
    <?php include 'header.php'; ?>

    <div class="row">
        <div class="col-xs-6 responsive">
            <section>
                <div class="alert alert-success alert-dismissible" style="display: none;" id="truemsg">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Success!</h4>
                    New Notice Successfully added
                </div>

                <form class="centre" action="" method="POST" enctype="multipart/form-data">
                    <div>
                        <h4><strong>Post a new notice</strong></h4>
                    </div>
                    <div>
                        <input id="subject" placeholder="Subject" type="text" name="subject" style="margin:auto" required>
                    </div>
                    <div id="file" class="form-group">
                        <input type="file" name="resume" class="btn btn-flat btn-primary" required>
                    </div>
                    <br>
                    <div class="form-group mt-3">
                        <textarea style="top:80px" class="input" name="input" id="input" placeholder="Notice" required></textarea>
                    </div>
                    <div class="form-group text-center option">
                        <label>Audience</label>
                        <select class="form-control select2" style="width: 100%" name="audience">
                            <option value="All Students">All Students</option>
                            <option value="Co-ordinators">Co-ordinators</option>
                        </select>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary btn-sm" id="submit" name="submit" type="submit">NOTIFY</button>
                    </div>
                    <br>
                </form>
            </section>
        </div>

        <div class="col-xs-5 responsive2">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Posted Notice</h3>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Subject</th>
                                <th>Notice</th>
                                <th>Audience</th>
                                <th>File</th>
                                <th>Date and Time</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM notice";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>
                                            <td>{$row['subject']}</td>
                                            <td>{$row['notice']}</td>
                                            <td>{$row['audience']}</td>
                                            <td>";
                                    if (!empty($row['resume'])) {
                                        echo "<a href='../uploads/resume/{$row['resume']}' download='{$row['resume']}'><i class='fa fa-file'></i></a>";
                                    } else {
                                        echo "No Resume Uploaded";
                                    }
                                    echo "</td>
                                            <td>{$row['date']}</td>
                                            <td><a id='delete' href='deletenotice.php?id={$row['id']}'><i class='fa fa-trash'></i></a></td>
                                        </tr>";
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <footer class="main-footer" style="margin:auto; padding:15px; width: 100%; height: 50px; position:absolute; background-color:#1f0a0a; color:white">
       
    </footer>
</body>
</html>
<style>
    body {
        background-color: white;
    }
    .centre {
        margin: 20px 30px 100px 20px;
        text-align: center;
        height: 450px;
        width: 700px;
        border: 2px solid black;
        border-radius: 10px;
        display: inline-block;
    }
    #subject {
        width: 86%;
    }
    .option {
        width: 30%;
        margin: auto;
    }
    .input {
        height: 200px;
        width: 600px;
        border-radius: 5px;
        background-color: white;
        text-align: center;
    }
    @media screen and (max-width: 1447px) {
        .input1 {
            width: auto;
            height: auto;
        }
        .centre {
            height: 105%;
            width: 105%;
            margin-left: 100px;
        }
        .responsive2 {
            margin: auto;
            display: block;
            height: 80%;
            width: 80%;
            margin: auto;
        }
        #subject {
            height: 60%;
            width: 60%;
            margin: auto;
        }
        .option {
            height: 60%;
            width: 60%;
            margin: auto;
        }
        .input {
            height: 80%;
            width: 60%;
            margin: auto;
        }
    }
</style>
