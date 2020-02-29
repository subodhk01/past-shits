<?php
        $servername = "localhost";
        $username = "u174067983_ct";
        $password = "123456789";
        $db="u174067983_ct1";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>