<?php

// CREATE CONNECTION
$conn = mysqli_connect('localhost', 'wmompiem_lruser', 'secretpassword', 'wmompiem_localrun');

// CHECK CONNECTION
if (mysqli_connect_errno()) {
    echo 'Failed to connect to MySQL ' . mysqli_connect_errno();
}
