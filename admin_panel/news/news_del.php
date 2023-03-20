<?php
    session_start();
    include_once "db_con.php";
    
    if (count($_POST["ids"]) > 0 ) 
    {
        $all = implode(",", $_POST["ids"]);
       /*$qry="insert into notification_trash(ndate,nname,ndesc,nstatus,ntype,file1,file2,file3,file4,file5,file6,file7, file8) select ndate,nname,ndesc,nstatus,ntype,file1,file2,file3,file4,file5,file6,file7, file8 
            from notification where nid in($all)";
        $res=mysqli_query($conn,$qry);*/
        
        $qry="delete from news_file where nwid in (".$all.")";
       // echo $qry;
        $res=mysqli_query($conn,$qry);
        $qry="delete from news where nwid in (".$all.")";
       // echo $qry;
        $res=mysqli_query($conn,$qry);
    }
     echo "<script>window.location.href='news.php';</script>";
?>