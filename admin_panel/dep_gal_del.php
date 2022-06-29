<?php
    session_start();
    include "db_con.php";

    $fid=$_REQUEST['fid'];
    
   // if($dp=='dept')
    $qry="delete from dep_gal where gid=".$fid;
        
    $res=mysqli_query($conn,$qry);
    echo "<script>window.location.href='dep_gal_view..php';</script>";
?>