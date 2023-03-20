<?php
    session_start();
    include_once "db_con.php";
   
    $opt=$_REQUEST['did'];
    if($opt=="ch")
        $dg="Chancellor";
    else if($opt=="pc")
        $dg="Pro Chancellor";
    else if($opt=="ch")
        $dg="Pro Chancellor";
    else if($opt=="vc")
        $dg="Vice Chancellor";
    else if($opt=="rg")
        $dg="Registrar";
    else if($opt=="re")
        $dg="Registrar (Evaluation)";
    else if($opt=="fo")
        $dg="Finance Officer";

    $qry="delete from adm_page where design like '$dg'";
    $res=mysqli_query($conn,$qry);
    echo "<script>window.location.href='ind_page.php';</script>";
?>