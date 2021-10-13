<?php
    $dbh=new PDO("mysql:host=localhost;dbname=recruitment","root","");
    $id=isset($_GET['id'])?$_GET['id'] : "";
    $stat = $dbh->prepare("select * from demo2 where id=?");
    $stat->bindParam(1,$id);
    $stat->execute();
    $row=$stat->fetch();
    header('Content-Type:'.$row['mime']);
    echo $row['data'];


?>