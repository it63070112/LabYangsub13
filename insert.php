<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'labnew13.mysql.database.azure.com', 'pps@labnew13', 'Pornpaisan12', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL PLEASE TRY AGAIN: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];
$link = $_POST['action'];


$sql = "INSERT INTO guestbook (Name , Comment , Action) VALUES ('$name', '$comment', '$action')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
