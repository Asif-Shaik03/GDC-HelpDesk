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
        <a href="issue.html">Issue</a>
        <a href="issuetracker.html" class="active">Issue Tracker</a>
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
        // Connect to the database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "studentdata";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the user ID from the form
            $userId = $_POST['issue_id'];

            // Validate the user ID (you can use additional validation if needed)
            if (ctype_digit($userId)) {
                // Perform the database query to check if the ID exists
                $sql = "SELECT * FROM issuedata WHERE id = $userId";
                $result = mysqli_query($conn, $sql);

                // Check if the record is found
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $response = $row['Response'];
                    if ($response === 'Yes' || $response === 'yes' || $response === 'YES') {
                        $str = "Your issue has been responded.";
                    } elseif ($response === 'No' || $response === 'no' || $response === null) {
                        $str = "Your issue has not been responded yet.";
                    } else {
                        $str = "Invalid response status.";
                    }
                    
                    echo '<div class="panel-title">User ID: ' . $row['id'] . '</div>';
                    echo '<div class="panel-content">';
                    echo '<span>Student Name:</span> ' . $row['student_name'] . '<br>';
                    echo '<span>Group :</span> ' . $row['stdgroup'] . '<br>';
                    echo '<span> Year :</span> ' . $row['grp_year'] . '<br>';
                    echo '<span>Status :</span>' . $str . '<br>';
                    if ($response === 'Yes' || $response === 'yes' || $response === 'YES') {
                      echo '<span> Message :</span> ' . $row['Response_msg'] . '<br>';
                     } 
                    echo '</div>';
                } else {
                    echo '<div class="panel-title" style="color:red">User not found.</div>';
                }
            } else {
                // Invalid user ID (not a number)
                echo '<div class="panel-title">Please enter a valid user ID (numbers only).</div>';
            }
        }

        // Close the connection
        mysqli_close($conn);
        ?>

        <a href="issuetracker.html" class="go-back-button">Go Back</a>
      </div>
    </div>
  </section>
  <script type="text/javascript" src="javascript/stickyresnav.js"></script>
</body>
</html>
