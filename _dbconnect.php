<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "users";

$conn = mysqli_connect($server, $username, $password,$database);

if(!$conn)
{
    die("Error". mysqli_connect_error());
}

// $sql ="INSERT INTO `users` (`sno`, `username`, `password`, `dt`)
//  VALUES ('4', 'he', '126', current_timestamp())";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }
?>




