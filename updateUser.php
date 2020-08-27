<?php
session_start();
//require_one("loginController.php");

$hostname = "localhost";
$username = "root";
$password = "mysql";
$dbname = "meuble";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
// Get data from user
$image = $_POST['image'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$id = $_SESSION['user_id'];


$_SESSION['image'] = $image;
$_SESSION['email'] = $email;
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
$_SESSION['user_id'] = $id;

$sql = "UPDATE login SET username='$username', email='$email', password='$password', image='$image' WHERE user_id='$id';";

// Check user data

mysqli_query($conn, $sql) or die("Error: " .$conn);


// Redirect to posts page
header("Location: profil.php");


?>