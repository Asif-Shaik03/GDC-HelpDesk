
<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>


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

// Retrieve data from the table
$sql = "SELECT * FROM issuedata";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>Student Data</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/holog.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<header class="sticky">
        <a href="index.html" class="brand">GDC HelpDesk</a>       
        <a class="logoutbtn" href="logout.php">Logout</a>
</header>

     <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Student Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>group</th>
                <th>Year</th>
                <th>Issue catergory</th>
                <th>Decription</th>
                <th>Response</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["student_name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["gender"]; ?></td>
                <td><?php echo $row["stdgroup"]; ?></td>
                <td><?php echo $row["grp_year"]; ?></td>
                <td><?php echo $row["issue_category"]; ?></td>
                <td><?php echo $row["issue_description"]; ?></td>
                <td><?php echo $row["Response"]; ?></td>
                <td><?php echo $row["Response_msg"]; ?></td>
                <td>
    <a class='btn btn-success' href='edit.php?id=<?php echo urlencode($row["id"]); ?>'>Edit</a>
    <a class='btn btn-danger' href='delete.php?id=<?php echo urlencode($row["id"]); ?>'>Delete</a>
</td>

            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>

<?php
// Close the connection
mysqli_close($conn);
?>

<?php 

}else{

     header("Location: reslog.php");

     exit();

}

 ?>