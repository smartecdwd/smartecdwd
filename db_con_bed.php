<?php
    $serv="localhost";
    //$uname="kudin_kudresult";
    $uname="kudin_bedrevresult";
    $pwd="KUD_bedres@2468";
    $db="kudin_bedrevresult";
    $conn=mysqli_connect($serv,$uname,$pwd);
    mysqli_select_db($conn,$db);
?>