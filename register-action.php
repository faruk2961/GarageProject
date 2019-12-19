<?php
include("conn.php");
$user= $_POST["user"];
$password = md5($_POST["password"]);
$query = "INSERT INTO user (user_name,password) VALUES ('$user','$password')"; //put username and password into the database
if(mysqli_query($conn, $query)) {
    $_SESSION["user"] = $user;
    
    header("Location: index.php");
}else{
    
    session_destroy();
    header("Location: index.php");
}

?>