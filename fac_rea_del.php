<?php
    include "db_con.php";
    
    $frd=$_REQUEST['did'];
    
    $qry="delete from fac_research where frid=".$frd;
    
    $res=mysqli_query($conn,$qry);
    $qry="delete from fac_research_file where frid=".$frd;
    $res=mysqli_query($conn,$qry);
    header("location:fac_research.php");
?>