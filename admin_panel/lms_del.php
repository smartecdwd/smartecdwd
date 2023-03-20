<?php
    session_start();
    include "db_con.php";

     if(isset($_SESSION['uid'])==false)
    {
        echo "<script>window.location.href='https://kud.ac.in/admin_panel';</script>";
    }
    
    echo $_REQUEST['nd'];
    $nid=$_REQUEST['fid'];
    $qry="delete from dep_lms_file where dl_fid=".$nid;
    $res=mysqli_query($conn,$qry);
    echo $qry;
    
    //echo "<script>window.location.href='dep_lms_view.php';</script>";
?>