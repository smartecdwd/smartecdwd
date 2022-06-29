<?php
    session_start();
	require('db_con.php');
	
	
	$nid=$_REQUEST['nid'];
   
    $_SESSION["branch"]=$nid;
	
	
	 $qry="select * from dep_mas where did='". $_SESSION['branch']."'";
     $res=mysqli_query($conn,$qry);
	 //$row = mysqli_fetch_array($res);
									
	 while($row = mysqli_fetch_assoc($res))
	 {
	 $branch=$row['did'];
	 //echo $branch
	 $_SESSION['branch']=$row['did'];
	 }
									
   
?>