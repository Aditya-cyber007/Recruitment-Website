<?php include "db_conn.php";

if(isset($_POST['email'])){
     
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $type=$_POST['type'];

    session_start();

        $_SESSION['email']=$_POST['email'];
        $_SESSION['pass']=$_POST['pass'];
        $_SESSION['type']=$_POST['type'];
    
    $sql="select * from credentials where email='".$email."'AND pass='".$password."'AND type='".$type."' limit 1";
    $result=mysqli_query($conn,$sql);

    

    if(mysqli_num_rows($result)==1){

        session_start();

        $email=$_SESSION['email'];
        $results = mysqli_query($conn,$sql);

        while ($row=$results->fetch_assoc()) {
            $_SESSION['name']=$row['first'];
            $_SESSION['company']=$row['company'];
            
        }

        if($type=='Employee'){
            header("Location: employee.php");
            exit();
        }
        elseif($type=='Candidate'){
            header("Location: candidate.php");
        exit();
        }

        
    }
    else{
        echo " You Have Entered Wrong Credential.<br><h2 class='forgot' align='left'><a href='login.html'>Login Again</h2>";
        exit();
    }
        
}
?>