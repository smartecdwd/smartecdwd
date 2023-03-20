<?php
    $serv="localhost";
    $uname="kudin_revpg";
    $pwd="KUDrevpg@2468";
    $db="kudin_rev_pg";
    $conn=mysqli_connect($serv,$uname,$pwd);
    mysqli_select_db($conn,$db);
  
?>