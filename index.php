<?php
session_start();
$hostname = "localhost";
$username = "root";
$password = "mysql";
$dbname = "meuble";

$conn = new mysqli($hostname, $username, $password, $dbname);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="page.css">
 
</head>

<body>
  <div id="container">
    <div class="mockup">
      <div class="top" style="display: flex; justify-content: space-between;">
        <img class="logo" src="img\tv.svg" width="70" height="50" alt="" loading="lazy">
        <?php 
           if (isset($_SESSION['login'])){
           ?>
        <div id="notification" style=" margin-right: 20px;">
          <button style="height: 40px; width: 100px;border: none; background-color: #820101; border-radius: 5px;"><a
              href="logout.php" style="color: white; text-decoration: none;">logout</a></button>
          <button style="height: 40px; width: 100px;border: none; background-color: #820101; border-radius: 5px"><a
              href="card.php" style="color: white; text-decoration: none;">account</a></button>

        </div>
        <?php

           }else{ ?>
        <div id="notification" style=" margin-right: 20px;">
          <button style="height: 40px; width: 100px;border: none; background-color: #820101; border-radius: 5px;"><a
              href="login.php" style="color: white; text-decoration: none;">Signin</a></button>
          <button style="height: 40px; width: 100px;border: none; background-color: #820101; border-radius: 5px;"><a
              href="login.php" style="color: white; text-decoration: none;">Signup</a></button>

        </div>
        <?php
           }
           ?>

      </div>

      <div class="outer-search">
        <div class="search-filter">
          <div class="search-container">
            <i class="fa fa-search" style="padding: 10px; font-size: 20px;"></i>
            <input type="text" id="search" placeholder="Search" />
          </div>

        </div>
      </div>
      <div class="feeds" id="feeds">

        <div class="today s-2">
          <h1></h1>
          <!-- =======  start card image =============-->


          <?php
              $posts = "SELECT * FROM card";
              $all_posts = mysqli_query($conn, $posts);
                while ($row = mysqli_fetch_array($all_posts)) {
                //  <!-- if ($row['written_by'] == $username){ -->
                    //  echo "Username: " . $username;
                     echo "
                     <div class='card'>
                      <img src='".$row['image']."'  height='300px'/>
                      <div class='card-footer'>
                        <div class='card-info' style='justify-content: space-between;flex-direction: row;'>
                          <h4>".$row['title']."</h4>

                          <div style='display:flex;'>
                          <div><a class='like' style='display: inline-block;
                          margin-bottom: 0;
                          font-weight: normal;
                          text-align: center;
                          vertical-align: middle;
                          cursor: pointer;
                          background: #f6f6f6;
                          border: 1px solid transparent;
                          white-space: nowrap;
                          padding: 6px 12px;
                          font-size: 14px;
                          line-height: 1.428571429;
                          border-radius: 4px;'><i class='fa fa-thumbs-o-up'></i>
                          <input class='qty1' name='qty1' readonly='readonly' type='text' value='29' style=' border: none;
                          width:20px;
                          background: transparent;'/>
                      </a>

                          </div>

                          <div> <a class='like' style='display: inline-block;
                          margin-bottom: 0;
                          font-weight: normal;
                          text-align: center;
                          vertical-align: middle;
                          cursor: pointer;
                          background: #f6f6f6;
                          border: 1px solid transparent;
                          white-space: nowrap;
                          padding: 6px 12px;
                          font-size: 14px;
                          line-height: 1.428571429;
                          border-radius: 4px;'><i class='fa fa-thumbs-o-down'></i>
                          <input class='qty1' name='qty1' readonly='readonly' type='text' value='0' style=' border: none;
                          width:20px;
                          background: transparent;'/>
                             </a>
                          </div>

                          </div>
                          </div>
                      </div>
                    </div>";
                }
                 ?>
          <!-- ======= end card image =============-->
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="searchAjax.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
$(function () {
         $(".like").click(function () {
             var input = $(this).find('.qty1');
             input.val(parseInt(input.val())+ 1);

         });

  });
</script>

</body>

</html>