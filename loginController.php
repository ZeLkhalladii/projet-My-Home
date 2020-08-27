<?php
 session_start();
    $_SESSION['postID'];
     $hostname = "localhost";
    $username = "root";
    $password = "mysql";
    $dbname = "meuble";

    $conn = mysqli_connect($hostname, $username, $password, $dbname);

    if(!$conn){
        die("Connection feiled" . mysqli_connect_error());
    }else {
        echo "Connected" . "<br>";
    }

      if(isset($_POST['register'])){
           if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['cpassword']) && !empty($_POST['image'])){
             $username = htmlspecialchars(trim($_POST['username']));
             $email = htmlspecialchars(trim($_POST['email']));
       $_SESSION['email'] = $email;
       $_SESSION['image'] = $image;
       
       $image = $_POST['image'];
             $password = md5($_POST['password']);
             $cpassword = md5($_POST['cpassword']);

             if($password == $cpassword){
               $sql = "INSERT INTO login  VALUES(NULL,'$username','$email', '$password','$cpassword', ' $image')";

               mysqli_query($conn, $sql);
               $_SESSION['login'] = 1;

               header("Location: login.php");

             } else{
               echo "The two password do not match";
             }
           }else{
               echo "you must enter all the fields";

           }

       }


?>