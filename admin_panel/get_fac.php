<?php
    include "db_con.php";
    
    $did=$_REQUEST['did'];
    $qry="select fid,fname from faculty where did=".$did;
    $res=mysqli_query($conn,$qry);
    
    while($row=mysqli_fetch_array($res))
    {
        $fid = $row['fid'];
        $fname = $row['fname'];

        $users_arr[] = array("fid" => $fid, "fname" => $fname);
    }
    echo json_encode($users_arr);

?>