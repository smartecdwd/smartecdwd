<?php
    include "db_con.php";
    
    $fid=$_REQUEST['fid'];
    
    $qry="delete from faculty where fid=".$fid;
    $res=mysqli_query($conn,$qry);
    
    $qry="delete from faculty_file where fid=".$fid;
    $res=mysqli_query($conn,$qry);
    header("location:fac_view.php");
?>