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

   $id = $_SESSION['card_id'];

   $_SESSION['title'] = $title;
   $_SESSION['image'] = $image;
   $_SESSION['description'] = $description;


      $sql = "UPDATE card SET title='$title', image='$image', description='$description' WHERE card_id='$id' ";
    echo $sql;
    mysqli_query($conn, $sql);
    header("Location: card.php");


?>