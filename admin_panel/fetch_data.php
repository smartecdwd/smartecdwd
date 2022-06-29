<?php
    include "db_con.php";
    
    $did=$_REQUEST["did"];
    $do=$_REQUEST["dobj"];
    
    $qry="select * from dep_mas where did=".$did;
    $res = mysqli_query($conn, $qry);  
    $row = mysqli_fetch_array($res);  
    echo json_encode($row);  
?>