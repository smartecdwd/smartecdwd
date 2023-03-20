<?php
    session_start();
    include_once "db_con.php";
   
    $sl=$_REQUEST['sl'];
    
    $qry="delete from adm_pro  where slno=".$sl;
    $res=mysqli_query($conn,$qry);        
    echo "<script> window.location.href='sy_pro_view.php'; </script>";
?>