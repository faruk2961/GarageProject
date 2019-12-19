<?php


include ("conn.php");
$user= $_POST["user"];
$password = md5($_POST["password"]); //md5 to encyrpte the password
echo $password;
$query = "SELECT * FROM user WHERE user_name='$user' and password='$password' ";
if($result = mysqli_query($conn, $query)){
$row = mysqli_fetch_assoc($result);
$rowcount=mysqli_num_rows($result); // to give us how many row over there
if ($rowcount === 1) 
{ 
    $_SESSION["user"] =$row["user_name"]; //we get user name from user table
    $_SESSION["id"] =$row["id"];
    header("Location: index.php"); // it is gonna show location of index to session
    
} 
else 
{
    
    session_destroy();
    header("Location: index.php");
}
}
mysqli_close($conn); //to close the connection other wise everything is gonna be mess
?>