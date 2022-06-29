<?php
    include "db_con.php";
    $br=$_REQUEST["opt"];
    $qry="select * from dep_mas where branch='$br' order by dname";
    $res=mysqli_query($conn,$qry);
    
    while($row=mysqli_fetch_array($res))
    {
        echo "<option value='".$row['did']."'>".$row['dname']."</option>";
    }
?>