<?php

session_start();

$hostname = "localhost";
$username = "root";
$password = "mysql";
$dbname = "meuble";

$conn = mysqli_connect($hostname, $username, $password, $dbname);

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>details card</title>
  <style>
    @import url("https://fonts.googleapis.com/css?family=Montaga|Noto+Sans&display=swap");

    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }


    body {
      font-size: 16px;
      background-color: white;
      font-family: "Noto Sans", sans-serif;
    }

    h1,
    h2,
    h3 {
      font-family: "Montaga", serif;
    }

    .container {
      display: flex;
      justify-content: center;
      height: 100%;
    }

    .card {
      border-radius: 4px;
      background-color: #fff;
      max-width: 68em;
      width: calc(100% - 4em);
      height: 35em;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 32px 24px 0 rgba(0, 0, 0, 0.064);
    }

    .card-cover,
    .card-content {
      width: 50%;
      height: 100%;
    }

    .card-cover {
      overflow: hidden;
      border-radius: 4px 0 0 4px;
    }

    .card-cover img {
      object-fit: cover;
      width: 100%;
      height: 100%;
    }

    .card-content {
      position: relative;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
      padding: 4em 1em;
      background-color: rgb(246, 246, 246);
    }

    .card__tag {
      font-size: 2.64em;
      text-transform: uppercase;
      letter-spacing: 2px;
      opacity: 0.64;
    }

    .card__title {
      font-size: 1em;
      line-height: 1.32;
      font-family: 'Poppins', sans-serif;
      word-break: break-word;

 
    }
    

    .card__subtitle {
      opacity: 0.64;
      line-height: 1;
    }

    .card__btn {
      display: inline-flex;
      align-items: center;
      border-radius: 2px;
      text-transform: uppercase;
      letter-spacing: 2px;
      font-size: 0.875em;
      background-color: #820101;
      transition: background-color 0.32s ease 0s;
      border: 0;
      outline: none;
      padding: 1.5em 2.4em;
      color: white;
      margin-top: auto;
      cursor: pointer;
    }

    .card__btn span {
      width: 20px;
      height: 1px;
      background-color: white;
      margin-left: 0.5em;
      position: relative;
    }
   
    a {
      text-decoration: none
    }

    .card__btn span:before,
    .card__btn span:after {
      content: "";
      position: absolute;
      right: 0;
      top: 0;
      width: 40%;
      height: 1px;
      background-color: inherit;
    }

    .card__btn span:before {
      transform: rotate(45deg) translate(-1px, -3px);
    }

    .card__btn span:after {
      transform: rotate(-45deg) translate(-1px, 3px);
    }

    .card__btn:hover {
      background-color: #e9e9e9;
      color: black;


    }

    .card__label {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      position: absolute;
      top: -2.5em;
      right: -2.5em;
      width: 5em;
      height: 5em;
      border-radius: 50%;
      background-color: #ff6476;
      color: #fff;
      font-size: 1em;
      transform: rotate(12deg);
    }

    .form-inline {
      margin-top: 20px;
      margin-right:20px;
    }

    .form-inline a {
      border-radius: 3px;
      padding: 13px;
      background: white;
      color: #820101;
      text-decoration: none;
    }
    }

    .navbar a {
      padding-left: 10px;
    }
    
/* login profil btn */

/* login profil btn */
.btn-outline-success {
  background-color: white !important;
  color: #820101 !important;
  border:solid 1px  #820101 !important;
  margin-left: 0px;
  border-radius: 3px !important;
  padding: 6px 10px !important;
  
}

.btn-outline-success:hover {
  background-color: #820101 !important;
  color: white !important;
  border-color: #820101 !important;

}

.btn-outline-success:focus {
  border-color: #820101 !important;
  box-shadow: 0 0 0 0.1rem #820101 !important;
}
.navbar-brand {
  margin-left: 17px;
  margin-top: 5px;
}
    @media screen and (max-width: 768px) {
      .card {
        flex-direction: column;
        height: 100%;
      }
      .card-cover {
        height: 353px;      }

      .card-cover,
      .card-content {
        width: 100%;
      }
      .card__tag {
    font-size: 1.64em;
    text-transform: uppercase;
    letter-spacing: 2px;
    opacity: 0.64;
}
      .card__label {
        right: 2em;
        top: 2em;
      }

      .card__title {
        font-size: 14px;
        word-break: break-word;

      }

      .card__btn {
        height: 50px;
        margin-top: 2em;
        font-size: 11px;
      }
    }
   

   
  </style>
</head>

<body>

  <nav class="navbar" style="background: rgb(246, 246, 246);display:flex; justify-content:space-between;padding: .5rem 0rem !important;">
    <a class="navbar-brand" href="index.php">
      <img src="img/tv.svg" width="70" height="50" alt="" loading="lazy">
    </a>
    <form class="form-inline my-2 my-lg-0">
      <a href="logout.php" class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</a>
      <a href="profil.php" class="btn btn-outline-success my-2 my-sm-0" type="submit">Profil</a>

    </form>
  </nav>


  <div class="container" style="margin: 30px;">
    <div class="card">
      <div class="card-cover"><img src="<?php
      $task = "SELECT  image FROM card WHERE card_id=$id LIMIT 1";
      $name_task = mysqli_query($conn, $task);
      while ($row = mysqli_fetch_array($name_task)) {
      echo $row['image'];
  }
  ?>" alt="cover" /></div>
      <div class="card-content">
        <div class="card__tag"><?php
      $task = "SELECT  title FROM card WHERE card_id=$id LIMIT 1";
      $name_task = mysqli_query($conn, $task);
      while ($row = mysqli_fetch_array($name_task)) {
      echo $row['title'];
  }
  ?>

        </div>
        <p class="card__title"><?php
      $task = "SELECT  description FROM card WHERE card_id=$id LIMIT 1";
      $name_task = mysqli_query($conn, $task);
      while ($row = mysqli_fetch_array($name_task)) {
      echo $row['description'];
  }
  ?>
        </p>
        <a href='card.php' class="card__btn" type="button">back to account
          <span></span>
        </a>
      </div>
    </div>
  </div>
</body>

</html>