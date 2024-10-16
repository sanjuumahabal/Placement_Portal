<?php

// To Handle Session Variables on This Page
session_start();

if (empty($_SESSION['id_user'])) {
    header("Location: index.php");
    exit();
}

// Including Database Connection From db.php file to avoid rewriting in all files
require_once("db.php");

// If user Actually clicked apply button
if (isset($_GET)) {

    // Get user data
    $sql = "SELECT * FROM users WHERE id_user='$_SESSION[id_user]'";
    $result1 = $conn->query($sql);

    if ($result1->num_rows > 0) {
        $row1 = $result1->fetch_assoc();
        
        // Ensure the fields are treated as numbers
        $hsc = (float)$row1['hsc'] ?? 0;
        $ssc = (float)$row1['ssc'] ?? 0;
        $ug = (float)$row1['ug'] ?? 0;
        $pg = (float)$row1['pg'] ?? 0;
        
        $sum = $hsc + $ssc + $ug + $pg;
        $total = ($sum / 4);
        $course1 = $row1['qualification'];
    }

    // Get job data
    $sql = "SELECT maximumsalary, qualification FROM job_post WHERE id_jobpost='$_GET[id]'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $eligibility = $row['maximumsalary'];
        $course2 = $row['qualification'];

        if ($total >= $eligibility) {
            if ($course1 == $course2) {
                header("Location: view-job-post.php?id=$_GET[id]");
                $_SESSION['status'] = "You are eligible for this drive.";
                $_SESSION['status_code'] = "success";
                exit();
            }
        }
    }

    // Check eligibility & course criteria 
    if ($total >= $eligibility) {
        if ($course1 == $course2) {
            // Check if user has already applied for the job post
            $sql1 = "SELECT * FROM apply_job_post WHERE id_user='$_SESSION[id_user]' AND id_jobpost='$_GET[id]'";
            $result1 = $conn->query($sql1);

            // If not, then apply for the job post 
            if ($result1->num_rows == 0) {
                // Insert application into apply_job_post table
                $sql = "INSERT INTO apply_job_post(id_jobpost, id_company, id_user) VALUES ('$_GET[id]', '$_SESSION[id_company]', '$_SESSION[id_user]')";
                
                if ($conn->query($sql) === TRUE) {
                    $_SESSION['jobApplySuccess'] = true;
                    header("Location: user/index.php");
                    $_SESSION['status1'] = "Congrats!";
                    $_SESSION['status_code1'] = "success";
                    exit();
                } else {
                    echo "Error " . $sql . "<br>" . $conn->error;
                }

                $conn->close();
            } else {
                header("Location: view-job-post.php?id=$_GET[id]");
                $_SESSION['status'] = "You have already applied for this Drive.";
                $_SESSION['status_code'] = "success";
                exit();
            }
        } else {
            header("Location: view-job-post.php?id=$_GET[id]");
            $_SESSION['status'] = "You are not eligible for this drive due to the course criteria.";
            $_SESSION['status_code'] = "success";
            exit();
        }
    } else {
        header("Location: view-job-post.php?id=$_GET[id]");
        $_SESSION['status'] = "You are not eligible for this drive due to the overall percentage criteria. Update your marks in your profile, if you think you are eligible.";
        $_SESSION['status_code'] = "success";
        exit();
    }
} else {
    header("Location: user/index.php");
}
