<?php include "db_conn.php";

$name=$_POST['name'];
$email=$_POST['email'];
$title=$_POST['title'];

     #file name with a random number so that similar dont get replaced
     $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
    
     #upload directory path
    $uploads_dir = 'resume';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
 
    #sql query to insert into database
    $sql = "INSERT into demo(`title`,`resume`) VALUES('$title','$pname')";
 
    if(mysqli_query($conn,$sql)){
 
    echo "File Sucessfully uploaded";
    echo "<a href=./resume/'.$tname.' target='_adi'>view </a>";
    }
    else{
        echo "Error";
    }

 
 
?>

