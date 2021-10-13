<?php include "db_conn.php";
    
$first=  $_POST['first-name'];
$last=  $_POST['last-name'];
$email= $_POST['email'];
$pass=  $_POST['pass'];
$type=$_POST['type'];
$company=$_POST['company'];

    $sql = ("INSERT INTO `credentials` (`first`, `last`, `email`, `pass`, `type`,`company`) VALUES ('$first', '$last', '$email', '$pass', '$type','$company');");
    if ($conn->query($sql) === TRUE) {
        echo "Registered successfully.";
        echo " <h2 class='forgot' align='left'><a href='login.html'>Back to Login-Page</h2>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo " Unable to create Credential.<br><h2 class='forgot' align='left'><a href='signup.html'>Sign-up-Page</h2>";
      }
      $conn->close();
    
      ?>