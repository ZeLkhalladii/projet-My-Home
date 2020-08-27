<?php
session_start();

if (isset($_SESSION['login'])){


$hostname = "localhost";
$username = "root";
$password = "mysql";
$dbname = "meuble";

$conn = mysqli_connect($hostname, $username, $password, $dbname);

$id = $_SESSION['user_id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="card.css">
</head>
<body>
<!-- Just an image -->
<nav class="navbar" style="background: rgb(246, 246, 246);">
    <a class="navbar-brand" href="index.php">
      <img src="img\tv.svg" width="70" height="50" alt="" loading="lazy">
    </a>
    <form class="form-inline my-2 my-lg-0">
        <a href="logout.php" class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</a>
        <a href="profil.php" class="btn btn-outline-success my-2 my-sm-0" type="submit">Profil</a>

      </form>
  </nav>
    
 
<div class="container" >
<button class="btn open-form">ADD NEW</button>
  <div class="row" style="margin-top:30px">
     

      <?php
         $id = $_SESSION['user_id'];
         $user_id = $_SESSION['user_id'];

        $posts = "SELECT * FROM card";
        $all_posts = mysqli_query($conn, $posts);
        while ($row = mysqli_fetch_array($all_posts)) {
          if ($row['user_id'] == $_SESSION['user_id']) {
            echo "
            <div class='col-12 col-md-12 col-xl-4' style='margin-top:8px;'>
            <div class='card' style='border-radius: 20px;'>
                <div class='multi-a'>
                <a href='detailsCard.php?id=".$row['card_id']."' class='fa fa-share'></a>
                <a href='formUpdateCard.php?id=".$row['card_id']."' class='fa fa-edit'></a>
                <a href='formDeleteCard.php?id=".$row['card_id']."' class='fa fa-trash'></a>
                </div>
                <div class='container1'>
                    <img src=".$row['image']." style='height: 193px;
                    width: 349px;
                    border-radius: 20px;'>
                </div>
            </div>
          </div>";
       }

      }
      ?>

 

  </div>
</div>

<div class="form-popup">
            <div class="container form-wrapper">
                <button class="btn close-form">Close</button>
                <form action="insertCard.php" method="post" id="my-form" novalidate="novalidate">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="form-title">Add Post</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="name" name="title" required="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="image">image</label>
                            <input type="text" class="form-control" id="email" name="image" required="">
                        </div>
                    </div>
          <div class="row">
            <div class="form-group col-md-12">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" id=""></textarea>
                        </div>
          </div>

                    <button type="submit" class="btn send-form">Send</button>
                </form>
            </div>
        </div>
   
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
        $(document).ready(function() {

$('.open-form').click(function() {
    $('.form-popup').show();
});
$('.close-form').click(function() {
    $('.form-popup').hide();
});

$('.reset-form').click(function() {
    $('.success-message').show();
$('#my-form').trigger( 'reset' );

setTimeout(function() {
    $('.success-message').hide()
}, 1500);
});

$(document).mouseup(function(e) {
    var container = $(".form-wrapper");
    var form = $(".form-popup");

    if (!container.is(e.target) && container.has(e.target).length === 0) {
        form.hide();
    }
});


});

</script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
<?php

}else{
  header("Location: login.php");
}
?>