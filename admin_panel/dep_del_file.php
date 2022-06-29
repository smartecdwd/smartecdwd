<?php
    session_start();
    include "db_con.php";

    $fid=$_REQUEST['fid'];
    $dd=$_REQUEST['dd'];
   
    $qry="delete from dep_mas_file where dmf_id=".$fid;
    $res=mysqli_query($conn,$qry);
    echo "<script> window.location.href='dep_edit.php?did=".$dd."'; </script>";
   //header("location:dep_edit.php?did=".$dd);
?>