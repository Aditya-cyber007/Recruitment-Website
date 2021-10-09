<?php
    
$first=  $_POST['first-name'];
$last=  $_POST['last-name'];
$email= $_POST['email'];
$pass=  $_POST['pass'];
$type=$_POST['type'];

$host="localhost";
$user="root";
$password="";
$db="recruitment";

$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    $sql = ("INSERT INTO `credentials` (`first`, `last`, `email`, `pass`, `type`) VALUES ('$first', '$last', '$email', '$pass', '$type');");
    if ($conn->query($sql) === TRUE) {
        echo "Registered successfully.";
        echo " <h2 class='forgot' align='left'><a href='login.html'>Back to Login-Page</h2>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo " Unable to create Credential.<br><h2 class='forgot' align='left'><a href='signup.html'>Sign-up-Page</h2>";
      }
      $conn->close();
    
      ?>