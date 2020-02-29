<?php
$servername = "localhost";
$username = "u174067983_10tha";
$password = "Subodhlucky@10";
$db="u174067983_sdata";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$name = $rollno = $password = '';

if( $_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=test_input($_POST["name"]);
    $rollno=test_input($_POST["rollno"]);
    $password=test_input($_POST["password"]);
}
function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}

$query="INSERT INTO slogindata (Name,roll_no,Password) VALUES('".$name."','".$rollno."','".$password."')";

if(mysqli_query($conn,$query))
    echo "Record Insert Successfully";
else
    echo "Error in Processing. Please try again";


?>