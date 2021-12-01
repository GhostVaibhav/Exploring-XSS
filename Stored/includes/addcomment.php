<?php
    include_once './dbh.php';

$name = $_POST['name'];
$comment = $_POST['comment'];

$sql = "INSERT INTO posts (username, comment_content) VALUES ('$name', '$comment');";

mysqli_query($conn, $sql);

header("Location: ../");
?>