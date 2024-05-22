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
    $fullName = $conn->real_escape_string($_POST['fullName']);
    $user = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $pass = $conn->real_escape_string($_POST['password']);
    $confirmPass = $conn->real_escape_string($_POST['confirmPassword']);

    // Validate password confirmation
    if ($pass !== $confirmPass) {
        echo "Passwords do not match.";
        exit();
    }

    // Hash the password for security
    $hashed_pass = password_hash($pass, PASSWORD_BCRYPT);

    // Insert form data into database
    $sql = "INSERT INTO users (fullName, username, email, password) VALUES ('$fullName', '$user', '$email', '$hashed_pass')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to a thank you page or another appropriate page
        header("Location: success.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
