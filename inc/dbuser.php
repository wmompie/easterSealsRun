<?php

  $host = "localhost";
  $username = "wmompiem_lruser";
  $password = "secretpassword";
  $database = "wmompiem_localrun";

  $conn = mysqli_connect($host, $username, $password, $database);

  $connection_error = mysqli_connect_error();
  if($connection_error != null) {
    echo "<p>Error connecting to database: $connection_error</p>";
  }

?>