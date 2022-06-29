<?php
    session_start();
    include "db_con.php";

    $did=$_REQUEST['fid'];
    
    $qry="delete from iq_team_cur where iq_cid=".$did;
        
    $res=mysqli_query($conn,$qry);
    //$qry="delete from dep_app_file where dalid=".$did;
    //$res=mysqli_query($conn,$qry);
    echo "<script>window.location.href='iqac_team_cur_view.php';</script>";
    //header("location:dep_fac.php");
?>