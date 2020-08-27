<?php
$hostname = "localhost";
$username = "root";
$password = "mysql";
$dbname = "meuble";

$conn = new mysqli($hostname, $username, $password, $dbname);


          $searchkey = $_POST['search'];
          $sql = "SELECT * FROM card WHERE title LIKE '%$searchkey%'";
          $all_posts = mysqli_query($conn, $sql);
          while ($row= mysqli_fetch_array( $all_posts)) {
            echo "
            <div class='card'>
             <img src='".$row['image']."'  height='300px'/>
             <div class='card-footer'>
               <div class='card-info'>
                 <h4>".$row['title']."</h4>
                 <span class='card-maker'></span>
               </div>
             </div>
           </div>";
          }
          
          ?>