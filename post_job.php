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
  <title>Post Job</title>
</head>

<body>
  <form action="post-success.php" method="POST">
  <div class="main">
    <p class="sign" align="center">Post-Job</p>
        <input class="un " type="text" name = "category" align="center" placeholder="Job-Type" required>
        <input class="un " type="text" name = "sallary" align="center" placeholder="Sallary (per-month)" required>
        <input class="un " type="date" name = "apply_by" align="center" required>

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