<?php
    session_start();
    include "db_con.php";
    $dpid=$_REQUEST['dpid'];
    $qry="delete from dep_prg_off where dpid=".$dpid;
    $res=mysqli_query($conn,$qry);
    $qry="delete from dep_prg_file where dpid=".$did;
    $res=mysqli_query($conn,$qry);
    header("location:dep_prg_off.php");

?>