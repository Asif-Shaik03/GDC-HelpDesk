<?php

// Connect to the MySQL database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "studentdata";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Get the form data
    $student_name = $_POST['username'];
    $email = $_POST['emailid'];
    $gender = $_POST['gender'];
    $group = $_POST['group-dropdown'];
    $year = $_POST['year-dropdown'];
    $issue_category = $_POST['problem-category-dropdown'];
    $issue_description = $_POST['problem-description'];
    
    // Insert the data into the database
    $sql = "INSERT INTO issuedata (student_name, email, gender, stdgroup, grp_year, issue_category, issue_description)
    VALUES ('$student_name', '$email', '$gender', '$group', '$year', '$issue_category', '$issue_description')";
    
    if (mysqli_query($conn, $sql)) {
        
        $user_id = mysqli_insert_id($conn);
        mysqli_close($conn);

         // Start a session to store the user ID and name
    session_start();

    // Store the user ID and name in session variables
    $_SESSION['user_id'] = $user_id;
    $_SESSION['student_name'] = $student_name;

    // Redirect to the "submission_success.php" page
    header("Location: submission_success.php");
    exit(); // Ensure that the script stops executing after the redirect

        
    } else {
        echo "Error storing data: " . mysqli_error($conn);
    }
}

// Close the connection
mysqli_close($conn);

?>
