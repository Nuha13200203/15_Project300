<?php
// Start a session
session_start();

// Check if the user is logged in, if not redirect to login page
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard_style.css">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <h1>Dashboard</h1>
        <h3> Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h3>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#courses">Courses</a></li>
                    <li><a href="main.php">Logout</a></li>
                </ul>
            </nav>
        </aside>
        <main class="main-content">
            <header class="header">
                <h1>Course Registration System</h1>
            </header>
            <section id="home" class="content-section">
                <h2>Welcome to the Dashboard</h2>
                <p>Select an option from the sidebar to get started.</p>
            </section>
            <section id="courses" class="content-section">
                <h2>Courses</h2> 
                <p><a href="retake.php">Retake</a></p>
                <p><a href="suppli.php">Supplementary</a></p>
                <p><a href="regular.php">Improvement</a></p>
            </section>
        </main>
    </div>
</body>
</html>
