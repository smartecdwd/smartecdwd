<?php
    include 'db_con_res_otm.php';
    
    $dg=$_REQUEST["deg"];
    if($dg=='UG')
        $qry="select * from coursemaster where isannounce like 'TRUE' order by Name";
    else if($dg=='PG')
        $qry="select * from coursemaster_pg where isannounce like 'TRUE' order by Name";
    
    $res=mysqli_query($conn,$qry);
    $st_arr = array();
    while($row = mysqli_fetch_array($res)) 
    {
        $id=$row["CODE"];
        $nm=$row["NAME"];
        $st_arr[]=array("id" => $id, "name" => $nm);
        //$resp=$resp. "<option value=".$row["st_id"].">".$row["sname"]."</option>";
    }

    echo json_encode($st_arr);
?>