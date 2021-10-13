<?php include "db_conn.php";

$sallary=$_POST['sallary'];
$category=$_POST['category'];
$date =$_POST['apply_by'];

session_start();
$company=$_SESSION['company'];

$sql = ("INSERT INTO `jobs` (`company`, `category`, `sallary`, `apply-by`) VALUES ('$company', '$category', '$sallary', '$date');");
    if ($conn->query($sql) === TRUE) {
        echo "Job posted successfully.";
        echo " <h2 class='forgot' align='left'><a href='employee.php'>Back </a></h2>";
      } else {
        echo " Unable to post job.  <h2 class='forgot' align='left'><a href='employee.php'>Try Again</a></h2>";
        echo "Error: " . $sql . "<br>" . $conn->error;
        
      }
      $conn->close();

?>