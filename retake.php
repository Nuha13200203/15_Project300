<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retake Student Registration</title>
    <link rel="stylesheet" href="retakestyle.css">
</head>
<body>
    <div class="container">
        <h1 class="form-title">Retake Student Registration</h1>
        <form method="post" action="retake_api.php">
            <div class="user-input-box">
                <label for="student_id">Student ID</label>
                <input type="text" id="student_id" name="student_id" placeholder="Enter Student ID" required>
            </div>

            <div class="user-input-box">
                <label for="full_name">Full Name</label>
                <input type="text" id="full_name" name="full_name" placeholder="Enter Full Name" required>
            </div>

            <div class="user-input-box">
                <label for="department">Department</label>
                <select id="department" name="department" required>
                    <option value="">Select Department</option>
                    <option value="CSE">CSE</option>
                    <option value="LLB">LLB</option>
                    <option value="BBA">BBA</option>
                    <option value="English">English</option>
                    <option value="EEE">EEE</option>
                    <option value="Software">Software</option>
                </select>
            </div>

            <div class="user-input-box">
                <label for="batch_no">Batch No.</label>
                <input type="text" id="batch_no" name="batch_no" placeholder="Enter Batch No." required>
            </div>

            <div class="user-input-box">
                <label for="course_name">Course Name</label>
                <input type="text" id="course_name" name="course_name" placeholder="Enter Course Name" required>
            </div>

            <div class="form-submit-btn">
                <input type="submit" name="submit" value="Register">
            </div>
        </form>
    </div>
</body>
</html>
