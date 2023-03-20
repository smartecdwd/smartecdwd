<?php
    session_start();
    include_once "db_con.php";
    $var=$_REQUEST['did'];
    $_SESSION["did"]=$var;
    $qry="select dname from dep_mas where did=".$var;
    $res=mysqli_query($conn,$qry);
    $row=mysqli_fetch_array($res);
    $_SESSION["dname"]=$row['dname'];
    header("location:dept_dashboard.php");
?>