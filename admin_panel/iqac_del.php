<?php
    session_start();
    include "db_con.php";

    $did=$_REQUEST['qid'];
    
    $qry="delete from iq_about where iq_aid=".$did;
        
    $res=mysqli_query($conn,$qry);
    //$qry="delete from dep_app_file where dalid=".$did;
    //$res=mysqli_query($conn,$qry);
    echo "<script>window.location.href='iqac-obj.php?did=".$dp."';</script>";
    //header("location:dep_fac.php");
?>