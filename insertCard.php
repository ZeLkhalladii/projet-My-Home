<?php
 session_start();

     $hostname = "localhost";
    $username = "root";
    $password = "mysql";
    $dbname = "meuble";

    $conn = mysqli_connect($hostname, $username, $password, $dbname);

   $title = $_POST['title'];
   $image = $_POST['image'];
   $description = $_POST['description'];
   $id = $_SESSION['user_id'];
   $_SESSION['title'] = $title;
   $_SESSION['description'] = $description;
   $_SESSION['image'] = $image;

      $sql = "INSERT INTO card (title, image,  description, user_id)  VALUES('$title',  '$image', '$description', '$id')";
    echo $sql;
    mysqli_query($conn, $sql);
    header("Location: card.php?id=".$id);




?>