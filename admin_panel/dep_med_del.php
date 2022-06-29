<?php
    session_start();
    include "db_con.php";

    $did=$_REQUEST['did'];
    //$dp=$_REQUEST['dp'];
    
   // if($dp=='dept')
    $qry="delete from dep_med where dmid=".$did;
        
    $res=mysqli_query($conn,$qry);
    $qry="delete from dep_med_file where dmid=".$did;
    $res=mysqli_query($conn,$qry);
    header("location:dep_med.php");
?>