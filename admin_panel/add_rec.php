<?php
    include "db_con.php";
    
    $dn=$_REQUEST["dname"];
    $do=$_REQUEST["dobj"];
    
    $qry="insert into dep_mas(dname,dobj) values('$dn','$do')";
    $res=mysqli_query($conn,$qry);
    if($res==false)
        echo "Please Try Again";
    else
        echo "Data Submitted";
?>