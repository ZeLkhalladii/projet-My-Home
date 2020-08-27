<?php
session_start();
$_SESSION['card_id'] = $_GET['id'];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="formUpdateCard.css">
    <title>Hello, world!</title>
  </head>
  <body>
  <nav class="navbar" style="background: rgb(246, 246, 246);">
    <a class="navbar-brand" href="#">
      <img src="img/tv.svg" width="70" height="50" alt="" loading="lazy">
    </a>
    <!-- <form  class="form-inline my-2 my-lg-0">
        <a class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</a>
      </form> -->
  </nav>

<div class="contact-clean" style="">
    <form action="updateCard.php" method="post">
        <h2 class="text-center">New Update Card</h2>
        <div class="form-group"><input class="form-control" type="text" value="<?php echo $_SESSION['title']?>" name="title" placeholder="title"></div>
        <div class="form-group"><input class="form-control" type="text"  value="<?php echo $_SESSION['image']?>" name="image" placeholder="image"></div>
        <div class="form-group"><textarea class="form-control" name="description"  value="<?php echo $_SESSION['description']?>" placeholder="description" rows="14"></textarea></div>
        <div class="form-group"><button class="btn btn-primary" type="submit" name="register">send </button></div>
    </form>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>