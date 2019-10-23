<?php 

    include '../connection.php';


    if($_SERVER["REQUEST_METHOD"] == "POST") {
          $name =  $_POST['interest'];
          $sql = "INSERT INTO interest (id,interest_name) VALUES (NULL,'$name')";

          if(mysqli_query($conn,$sql)){
            echo "success";

          }
      }
      

      ?>