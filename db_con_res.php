<?php
    $serv="localhost";
    //$uname="kudin_kudresult";
    $uname="kudin_kudres";
    $pwd="KUDres@2468";
    $db="kudin_kudresult";
    $conn=mysqli_connect($serv,$uname,$pwd);
    mysqli_select_db($conn,$db);
?>