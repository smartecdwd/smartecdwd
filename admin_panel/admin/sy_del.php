 <?php
    session_start();
    include_once "db_con.php";
   
    $sl=$_REQUEST['sl'];
    
    $qry="delete from adm_mem  where slno=".$sl;
    $res=mysqli_query($conn,$qry);        
    echo "<script> window.location.href='ind_page.php'; </script>";
?>