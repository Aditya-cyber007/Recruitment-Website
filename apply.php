<?php 
session_start();
if (isset($_SESSION['email'])) {
    
?>


<html>

<head>
   <meta charset="UTF-8" />
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Apply for job</title>
</head>

<body>
  <form action="apply-success.php" method="POST" enctype="multipart/form-data">
  <div class="main">
    <p class="sign" align="center">Job Application</p>
        <input class="un " type="text" name = "name" align="center" placeholder="Name" required>
        <input class="un " type="text" name = "email" align="center" placeholder="Email" required>
        <input class="un" type="text"  name="company" align="center" placeholder="Company" required>
        <input class="un " type="text" name = "title" align="center" placeholder="File-Name" required>
        <input class="un " type="file" name = "file" align="center" required>

        <input class="submit" align="center" id= "submit" type=submit  >
        <p class="forgot" align="center"><a href="employee.php">Back</p>
    </form>

</div>
</body>
</html>
<?php
} else {
    header("Location: login.html");
    exit();
}

?>