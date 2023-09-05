<?php
    include "db_conn.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from `issuedata` where id=$id";
        $conn->query($sql);
    }
    header('location: home.php');
    exit;
?>