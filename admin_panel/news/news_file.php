<?php
    session_start();
    include_once "db_con.php";
    
    $id=$_REQUEST['fid'];
    $qry="delete from news_file where nwfid =".$id;
    $res=mysqli_query($conn,$qry);
    echo "<script>window.location.href='news_edit.php?aid=".$_SESSION['nwsid']."';</script>";
?>