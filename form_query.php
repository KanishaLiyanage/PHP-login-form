<?php

include_once 'inc/connection.php';

$uName = $_POST['username'];
$pwd = $_POST['password'];

$sql_query = "INSERT INTO login_details (userName, password) VALUES ('$uName', '$pwd')";

$result = mysqli_query($connection, $sql_query);

if($result){
    echo "record added";
}else{
    echo "Query failed!";
}

header("Location:index.php?signup=success");

mysqli_close($connection);

?>