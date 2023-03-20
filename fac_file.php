<?php
    session_start();
    include "db_con.php";

    $fid=$_REQUEST['fid'];
    $flid=$_REQUEST['flid'];
    
   // if($dp=='dept')
    $qry="delete from faculty_file where f_id=".$flid;
        
    $res=mysqli_query($conn,$qry);
    echo "<script>window.location.href='fac_edit.php?fid=".$fid."';</script>";
?>