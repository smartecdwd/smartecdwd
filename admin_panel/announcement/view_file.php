<?php
    session_start();
    include_once "db_con.php";
    
    $aid=$_REQUEST['aid'];
    $qry="select * from announce_file where afid=".$aid;
    $res=mysqli_query($conn,$qry);
    $row=mysqli_fetch_array($res);

    header("Content-type: application/pdf");
    header('Content-disposition: attachment; filename="announce.pdf"');
    header("Content-Length: " . strlen($row['fname']));
    print $row['fname'];
?>