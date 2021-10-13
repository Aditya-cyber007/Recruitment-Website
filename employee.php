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
        <title>Employee page</title>
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
        <header>
        <h1 align="center">Hello <?php echo $_SESSION['name'];?></h1>
        <a href="logout.php">logout</a>
        </header>
        <div class="job_image ">
        <img src="./images/anna-auza-D7Q6JpFleK8-unsplash.jpg" alt="job-image"><br>
        </div>
        <h1>Candidate's Applications <a class="submit" href="./post_job.php">Post new-job</a></h1>

        
<?php
    include"db_conn.php";

    $query = "SELECT * FROM candidate WHERE company=\"Google\";";
    $results = mysqli_query($conn,$query);

    while ($row=$results->fetch_assoc()) {
        $category=$row['category'];
        $name=$row['name'];
        $email=$row['email'];
        $resume=$row['resume'];
        

?>
 
        <div class="jobcontainer">
        <div class="jobcard">
            <h1>Name</h1>
            <p><?php echo $row['name'];?></p>
        </div>
        <div class="jobcard">
            <h1>Email</h1>
            <p><?php echo $row['email'];?></p>
        </div>
        <div class="jobcard">
            <h1>Job Type</h1>
            <p><?php echo $row['category'];?></p>
        </div>
        <div class="jobcard">
            <h1>Resume</h1>
            <p><a href="">view</a></p>
        </div>
        <?php
    }
} else {
    header("Location: login.html");
    exit();
}

?>
    </div>
 

<footer>
<p class="copyright" align="center">Recruitment Website © 2021</p>

</footer>
    </body>

    </html>
