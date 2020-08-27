<?php
session_start();


    $image = '';
    if(isset($_SESSION['image'])) $image = $_SESSION['image'];

    $username = '';
    if(isset($_SESSION['username'])) $username = $_SESSION['username'];

    $email = '';
    if(isset($_SESSION['email'])) $email = $_SESSION['email'];

    $password = '';
    if(isset($_SESSION['password'])) $password = $_SESSION['password'];


?>

<!DOCTYPE html>
<html>
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="profil.css"/>
<title>Profil</title>
</head>
<body>

<nav class="navbar" style="background: rgb(246, 246, 246);">
    <a class="navbar-brand" href="index.php">
      <img src="img\tv.svg" width="70" height="50" alt="" loading="lazy">
    </a>
    <form class="form-inline my-2 my-lg-0">
        <a href="logout.php" class="btn btn-outline-success my-2 my-sm-0" type="submit">logout</a>
        <a href="card.php" class="btn btn-outline-success my-2 my-sm-0" type="submit">account</a>

      </form>
  </nav>

<section class="profile" style="padding-top:30px;">
<div class="container">


  <div class="row justify-content-center" >
    <div class="col-sm-12">
      <form action="updateUser.php" method="POST">
              <img src="<?php echo $_SESSION['image'] ?>" id="image" name="image" style="width: 200px;height: 200px;border-radius: 50%;margin:auto;display: flex;" />
              <div class="form-group">
                <label for="inputAddress" >Image</label>
                <input type="text" class="form-control" name="image"  placeholder="URL:" id="uploadImage" >
             </div>
              <div class="form-group">
                <label for="inputAddress">Username</label>
                <input type="text" class="form-control" name="username"  placeholder="Username" value="<?php echo $username?>">
              </div>
              <div class="form-group">
                <label for="inputAddress">Email</label>
                <input type="text" class="form-control" name="email"  placeholder="Email" value="<?php echo $email?>">
              </div>
              <div class="form-group">
                <label for="inputAddress">Pasword</label>
                <input type="password" class="form-control" name="password"  placeholder="Password" value="<?php echo $password?>">
              </div>
              <button type="submit" name="update" class="btn btn-primary" style="background-color: #820101; border-color: #820101;">Update</button>
       <br><br><br>
            </form>
  </div>

</div>

</section>

	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script>
	function readURL(input) {
	if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
					$('#image').css('background-image', 'url('+e.target.result +')');
					$('#image').hide();
					$('#image').fadeIn(650);
			}
			reader.readAsDataURL(input.files[0]);
	}
}
$("#uploadImage").change(function() {
	readURL(this);
});
	</script>




</body>
</html>
