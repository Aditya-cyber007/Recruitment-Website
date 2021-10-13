<?php 
session_start();
if (isset($_SESSION['email'])) {





?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href='./css/style.css'>
        <title>Candidate page</title>
        <style>
        .jobcontainer{
            width: 100%;
            height: 100%;
            
            display: flex;
            justify-content: space-evenly;
            background-color:lightgray;
            border: 1px solid gray;


        }
        .jobcard{
            width: 20%;
            height: 80%;
            border: 1px solid blueviolet ;
            margin-top: 3px;
            margin-bottom: 3px;
            background-color:lightblue;

        }
        .jobcard h1{
            font-size: 20px;
            text-align: center;

        }
        .jobcard p{
            margin-top: 5px;
            text-align: center;
        }
        .apply_now{
            border: .5px solid black;
            margin: auto;
            padding: 5px;
            border-radius: 8px;
            background-color: wheat;

        }
        .apply_now a{
            text-decoration: none;
            color: blueviolet;
        }
        header{
            margin-left: 300px;
            display: flex;
            justify-content: space-around;
        }
        header a{
            text-decoration: none;
            border: 1px solid blueviolet;
            border-radius: 8px;
            padding: 5px;
            margin:auto;

        }
        </style>
    </head>

    <body>
        <form action="apply.php" method="POST">
        <header>
        <h1 align="center">Find Your Dream Job Here!</h1>
        <a href="logout.php">logout</a>
        </header>
        <h1>Hello! <?php echo $_SESSION['name'];?></h1>
        <div class="job_image ">
        <img src="./images/anna-auza-D7Q6JpFleK8-unsplash.jpg" alt="job-image"><br>
        </div>
        <h1 align ="center">Available Jobs.</h1>
        
        
        
<?php
    include"db_conn.php";

    $query="SELECT * FROM jobs ";
    $results = mysqli_query($conn,$query);

    while ($row=$results->fetch_assoc()) {
        $company=$row['company'];
        $_SESSION['company']=$row['company'];
        $category=$row['category'];        
        $sallary=$row['sallary'];
        $apply_by=$row['apply-by'];

?>
        <div class="jobcontainer">
        <div class="jobcard">
            <h1>Company</h1>
            <p><?php echo $row['company'];?></p>
        </div>
        <div class="jobcard">
            <h1>Job Type</h1>
            <p><?php echo $row['category'];?></p>
        </div>
        <div class="jobcard">
            <h1>Salary</h1>
            <p><?php echo $row['sallary'];?></p>
        </div>
        <div class="jobcard">
            <h1>Apply by</h1>
            <p><?php echo $row['apply-by'];?></p>
        </div>
        <div class="apply_now">
            <input type="submit" value="Apply-Now!"><br><br>
        </div>
        
    </div>
    <?php
    }
} else {
    header("Location: login.html");
    exit();
}

?>
    </form>
<footer>
<p class="copyright" align="center">Recruitment Website © 2021</p>

</footer>
    </body>

    </html>
