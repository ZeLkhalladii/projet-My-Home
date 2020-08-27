<?php

$hostname = "localhost";
$username = "root";
$password = "mysql";
$dbname = "meuble";

$conn = new mysqli($hostname, $username, $password, $dbname);

              $posts = "SELECT * FROM card";
              $all_posts = mysqli_query($conn, $posts);
                while ($row = mysqli_fetch_array($all_posts)) {
                //  <!-- if ($row['written_by'] == $username){ -->
                    //  echo "Username: " . $username;
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