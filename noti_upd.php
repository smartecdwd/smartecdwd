<?php
        include "db_con.php";
        
        $nid=$_REQUEST['nid'];    
        $nm=trim($_REQUEST['nm']);
        $nd=date("Y-m-d", strtotime($_REQUEST['nd']));
        $ndes=trim($_REQUEST['text_editor']);
        $nst=trim($_REQUEST['st']);
        $nty=trim($_REQUEST['typ']);
       
        $qry="update notification set ndate='$nd',nname='$nm',ndesc='$ndes',nstatus='$nst',ntype='$nty' where nid=".$nid;
        $res=mysqli_query($conn,$qry);
        for($i=0;$i<10;$i++)
        {
            if(($_FILES['f1']['size'][$i]>0) && ($_FILES['f1']['type'][$i] == "application/pdf"))
            {
                $ft=$_REQUEST['t1'][$i];
                $temp='noti/';
                $file = $_FILES['f1']['name'][$i];
                $ext = pathinfo($file, PATHINFO_EXTENSION);
                 
                $tmp=$_FILES['f1']['tmp_name'][$i];
                $temp=$temp.basename($_FILES['f1']['name'][$i]); //.".".$ext);
               
                move_uploaded_file($tmp,$temp);
                $temp='';
                $tmp='';
              //  echo $qry;
                $qry="insert into notification_file (nid,fname,ftitle) values(".$nid.",'$file','$ft')";
                $res=mysqli_query($conn,$qry);
            }
        }
       
       // echo $qry;
        
      echo"<script>window.location.href='notif.php';</script>";
        
    
?>
