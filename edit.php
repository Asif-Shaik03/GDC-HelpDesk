<!DOCTYPE html>
<html>
<head>
    <title>Edit Student Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header bg-warning">
                        <h1 class="text-white text-center">Update Member</h1>
                    </div>
                    <div class="card-body">
                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "studentdata";

                        $conn = new mysqli($servername, $username, $password, $dbname);

                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        if ($_SERVER["REQUEST_METHOD"] == 'GET') {
                            if (!isset($_GET['id'])) {
                                header("location: home.php");
                                exit;
                            }
                            $id = $_GET['id'];
                            $sql = "SELECT * FROM issuedata WHERE id=?";
                            $stmt = $conn->prepare($sql);
                            $stmt->bind_param("i", $id);
                            $stmt->execute();
                            $result = $stmt->get_result();
                            $row = $result->fetch_assoc();
                            if (!$row) {
                                header("location: home.php");
                                exit;
                            }
                            $student_name = $row["student_name"];
                            $email = $row["email"];
                            $gender = $row["gender"];
                            $group = $row["stdgroup"];
                            $year = $row["grp_year"];
                            $issue_category = $row["issue_category"];
                            $issue_description = $row["issue_description"];
                            $response = $row["Response"];
                            $message = $row["Response_msg"];
                        } else {
                            $id = $_POST["id"];
                            $student_name = $_POST['username'];
                            $email = $_POST['emailid'];
                            $gender = $_POST['gender'];
                            $group = $_POST['group-dropdown'];
                            $year = $_POST['year-dropdown'];
                            $issue_category = $_POST['problem-category-dropdown'];
                            $issue_description = $_POST['problem-description'];
                            $response = $_POST['Response'];
                            $message = $_POST["msg"];
                            

                            $sql = "UPDATE issuedata SET student_name=?, email=?, gender=?, stdgroup=?, grp_year=?, issue_category=?, issue_description=?, Response=?, Response_msg=? WHERE id=?";
                            $stmt = $conn->prepare($sql);
                            $stmt->bind_param("sssssssssi", $student_name, $email, $gender, $group, $year, $issue_category, $issue_description, $response, $message, $id);
                            $stmt->execute();
                            $conn->close();
                            header('location: home.php');
                            exit;

                            
                        }
                        $conn->close();
                        ?>

                        <form method="post" onsubmit="showSuccessMessage()">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <div class="form-group">
                                <label>Student Name:</label>
                                <input type="text" name="username" value="<?php echo $student_name; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" name="emailid" value="<?php echo $email; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Gender:</label>
                                <input type="text" name="gender" value="<?php echo $gender; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Group:</label>
                                <input type="text" name="group-dropdown" value="<?php echo $group; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Year:</label>
                                <input type="text" name="year-dropdown" value="<?php echo $year; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Issue category:</label>
                                <input type="text" name="problem-category-dropdown" value="<?php echo $issue_category; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Issue description:</label>
                                <input type="text" name="problem-description" value="<?php echo $issue_description; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Response:</label>
                            <select name="Response" class="form-control"> 
                                    <option  value="<?php echo $response; ?>" ><?php echo $response; ?></option>
                                    <option  value="Yes" >Yes</option>
                                    <option  value="No" >No</option>
                            </select>
                            </div>
                            <div class="form-group">
                                <label>Message:</label>
                                <input type="text" name="msg" value="<?php echo $message; ?>" class="form-control">
                            </div>
                            <button class="btn btn-success" type="submit" name="submit">Submit</button>
                            <a class="btn btn-info" type="submit" name="cancel" href="home.php">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function showSuccessMessage() {
            alert('Updated successfully.');
        }
    </script>
</body>
</html>
