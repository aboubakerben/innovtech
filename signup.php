<?php 

$servername = "localhost";
$username = "root";
$password = "root";
$db = "innovdata";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

$email = $_POST['email'];
$nom = $_POST['nom'];
$pass = $_POST['pass'];
$newpass = $_POST['newpass'];

$sql = " insert into newusers values ('$email','$nom','$pass','$newpass') ";
if ($conn->query($sql) === TRUE) {
    echo "Insert successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }





?>