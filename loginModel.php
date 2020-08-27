<?php
 session_start();

     $hostname = "localhost";
    $username = "root";
    $password = "mysql";
    $dbname = "meuble";

    $conn = new mysqli($hostname, $username, $password, $dbname);

    if($conn->connect_error){
        die("Connection feiled" . mysqli_connect_error());
    }else {
        echo "Connected" . "<br>";

    }



     $email = htmlspecialchars(trim($_POST['email']));
     $password = md5($_POST['password']);


     $query = "SELECT * FROM login  WHERE email='$email' && password='$password'";
     $user = $conn->query($query);
// echo $query;

    // Check at least there's one row AKA user exists

    if ($user->num_rows > 0){

        while($row = $user->fetch_assoc()){
            // Check if data match
            if ($row['email'] == $email && $row['password'] == $password){

                // Set super global variables AkA session

                $_SESSION['image'] = $row['image'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['login'] = 1;
                //echo $_SESSION['email'];

                // Redirect to posts page
                header("Location: card.php");


            }
        }
    }

    echo $_SESSION['email'];

?>