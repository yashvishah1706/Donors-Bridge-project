<?php
session_start();
include 'database.php';

if(isset($_POST['submit'])) {
    // Sanitize and validate user inputs
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $number = mysqli_real_escape_string($con, $_POST['number']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    // Create a prepared statement to prevent SQL injection
    $sql = "INSERT INTO contact (name, email, number, message) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $sql);

    if ($stmt) {
        // Bind the parameters and execute the statement
        mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $number, $message);
        if (mysqli_stmt_execute($stmt)) {
            // The query was successful
            echo "Data inserted successfully!";
        } else {
            // An error occurred
            echo "Error: " . mysqli_error($con);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        // An error occurred in preparing the statement
        echo "Error: " . mysqli_error($con);
    }
}

// Close the database connection when you're done
mysqli_close($con);
?>
