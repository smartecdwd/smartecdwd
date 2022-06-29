<?php
    session_start();
    $var=$_REQUEST['br'];
    $_SESSION["branch"]=$var;
    header("location:dept_view.php");
?>