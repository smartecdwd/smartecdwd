<?php
    session_start();
    include "db_con.php";
    
    $fid=$_REQUEST['fid'];
    $qry="update faculty set pro_pdf=null where fid=".$fid ;
    $res=mysqli_query($conn,$qry);
    $qry="delete from faculty_file where fid=".$fid ;
    $res=mysqli_query($conn,$qry);
    echo "<script>window.location.href='fac_edit?fid=".$fid."';<script>";
?>