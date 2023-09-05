<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GDC HelpDesk</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <script defer src="javascript/activeani.js"></script>
  <style>
    .panel {
      max-width: 500px;
      margin: 0 auto;
      padding: 30px;
      border-radius: 15px;
      background-color: #f8f8f8;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .panel-title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 20px;
      color: #333;
    }

    .panel-content {
      font-size: 16px;
      line-height: 1.6;
      color: #555;
    }
    span{
        font-weight: bold;
    }

    .go-back-button {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 20px;
      background-color: #008CBA;
      color: #fff;
      border: none;
      border-radius: 5px;
      font-size: 18px;
      text-decoration: none;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .go-back-button:hover {
      background-color: #005580;
    }
  </style>
</head>
<body>
  <header>
  <a href="index.html" class="brand">GDC HelpDesk</a>
      <div class="menu">
        <div class="btn">
          <i class="fas fa-times close-btn"></i>
        </div>
        
        <a href="index.html">Home</a>
        <a href="issue.html" class="active">Issue</a>
        <a href="issuetracker.html">Issue Tracker</a>
        <a href="reslog.php">Result</a>
        <a href="aboutus.html">About Us</a>
      </div>
      <div class="btn">
        <i class="fas fa-bars menu-btn"></i>
  </header>
  <section class="section-main">
    <div class="container">
      <div class="panel">


<?php
// Start the session to access session variables
session_start();

// Check if the user ID and name are stored in the session
if (isset($_SESSION['user_id']) && isset($_SESSION['student_name'])) {
    // Get the user ID and name from the session variables
    $user_id = $_SESSION['user_id'];
    $student_name = $_SESSION['student_name'];

    // Display the success message
    echo '<div class="panel-title">Your issue has been submitted successfully</div>';
    echo '<div class="panel-content">';
    echo '<span>Your Name:</span> '. $student_name.'<br>';
    echo '<span>Your Complaint ID is:</span> '. $user_id.'<br>';
    echo 'Please remember the above ID for future reference';
    echo '</div>';
} else {
    // Handle the case when the user ID or name is not set in the session
    echo '<div class="panel-title" style="color:red" >User ID or Name not found.</div>';
}
?>



     <a href="issue.html" class="go-back-button">Go Back</a>


  </section>
  <script type="text/javascript" src="javascript/stickyresnav.js"></script>
</body>
</html>
