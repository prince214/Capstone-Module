<?php 
    
$servername = "localhost";
$username = "root";
$password = "toor";
$database = "resume";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name =  $_POST['certificate'];
        $sql = "INSERT INTO certificates (id,certificate_name) VALUES (NULL,'$name')";

        if(mysqli_query($conn,$sql)){
          echo "success";

        }
      }


    
      
      

      ?>