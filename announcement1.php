<?php
    include "db_con.php";
    
    $nid=$_REQUEST['nid'];
    $qry="select * from announce_file where aid=".$nid;
    $res=mysqli_query($conn,$qry);
    //$rcnt=mysqli_num_rows($res);
    $row=mysqli_fetch_array($res);
    $filename = "https://kud.ac.in/admin_panel/announcement/upload/".$row['ftitle'];
    echo "<script> window.location.href='".$filename."';</script>";
    // Header content type
   // header("Content-type: application/pdf");
   // header("Content-Length: " . filesize($filename));
    // Send the file to the browser.
  //  readfile($filename);
?>