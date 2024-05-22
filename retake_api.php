<?php
// Database configuration
$servername = "localhost";
$username = "root";  // Change this if necessary
$password = "";      // Change this if necessary
$dbname = "project300";  // Change this to your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form inputs
    $student_id = $conn->real_escape_string($_POST['student_id']);
    $full_name = $conn->real_escape_string($_POST['full_name']);
    $department = $conn->real_escape_string($_POST['department']);
    $batch_no = $conn->real_escape_string($_POST['batch_no']);
    $course_name = $conn->real_escape_string($_POST['course_name']);

    // Insert form data into database
    $sql = "INSERT INTO retake_students (student_id, full_name, department, batch_no, course_name) VALUES ('$student_id', '$full_name', '$department', '$batch_no', '$course_name')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
