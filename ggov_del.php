<?php
    session_start();
    include "db_con.php";

     if(isset($_SESSION['uid'])==false)
    {
        echo "<script>window.location.href='https://kud.ac.in/admin_panel';</script>";
    }
    
    /*$nid=$_REQUEST['nid'];
    $qry="delete from notification where nid=".$nid;*/
    
    if (count($_POST["ids"]) > 0 ) 
    {
        $all = implode(",", $_POST["ids"]);
        /*$qry="insert into notification_trash(ndate,nname,ndesc,nstatus,ntype
            from notification where nid in($all)";
        $res=mysqli_query($conn,$qry);
        */
        $qry="delete from good_gov where ggid in (".$all.")";
        $res=mysqli_query($conn,$qry);
    }
    header("location:good_gov_view.php");
?>