<?php
    session_start();
    include "db_con.php";

    $did=$_REQUEST['did'];
    //$dp=$_REQUEST['dp'];
    
   // if($dp=='dept')
    $qry="delete from dep_rank where drid=".$did;
        
    $res=mysqli_query($conn,$qry);
    $qry="delete from dep_rank_file where dmid=".$did;
    $res=mysqli_query($conn,$qry);
    header("location:dep_rank.php");
?>