<?php
        include "db_con.php";
        
        /*$nm=trim($_REQUEST['nm']);
        $nd=date("Y-m-d", strtotime($_REQUEST['nd']));
        $ndes=trim($_REQUEST['text_editor']);
        $nst=trim($_REQUEST['st']);
        $nty=trim($_REQUEST['typ']);
      
        $qry="insert into notification (ndate,nname,ndesc,nstatus,ntype) values ('$nd','$nm','$ndes','$nst','$nty')";
        $res=mysqli_query($conn,$qry);
        
        $qry="select max(nid) as nid from notification";
        $res=mysqli_query($conn,$qry);
        
        $row=mysqli_num_rows($res);
        
        for($i=0;$i<4;$i++)
        {
            if($_FILES['f1']['size'][$i]>0)
            {
                $temp='noti/';
                $file = $_FILES['f1']['name'][$i];
                $ext = pathinfo($file, PATHINFO_EXTENSION);
                 
                $tmp=$_FILES['f1']['tmp_name'][$i];
                $temp=$temp.basename($_FILES['f1']['name'][$i]); //.".".$ext);
               
                move_uploaded_file($tmp,$temp);
                $temp='';
                $tmp='';
                $ft=trim($_REQUEST['t1'][$i]);
                
                $qry="insert into notification_file (nid,fname,ftitle) values(".$row['nid'].",'$file','$ft')";
                $res=mysqli_query($conn,$qry);
            }
        }
        

        
      //  $qry="insert into notification (nid,ndate,nname,ndesc,nstatus0 values()
       
       
        //echo $qry;
        
    //    echo"<script>window.location.href='notification.php';</script>";
       echo"<script>window.location.href='notif.php';</script>";
    */
    
        $nm=trim($_REQUEST['nm']);
        $nm=str_replace("'","''",$nm);
        $nd=date("Y-m-d", strtotime($_REQUEST['nd']));
        $ndes=trim($_REQUEST['text_editor']);
        $nst=trim($_REQUEST['st']);
        $nty=trim($_REQUEST['typ']);
      
       //  if(($_FILES['f1']['size'][0]>0) && ($_FILES['f1']['type'][0] == "application/pdf"))
    //    {
            $qry="insert into notification (ndate,nname,ndesc,nstatus,ntype) values ('$nd','$nm','$ndes','$nst','$nty')";
            $res=mysqli_query($conn,$qry);
            
            $qry="select max(nid) as nid from notification";
            $res=mysqli_query($conn,$qry);
        
            $row=mysqli_fetch_array($res);
        
            for($i=0;$i<10;$i++)
            {
                //echo $_FILES['f1']['type'][$i];
                //if(($_FILES['f1']['size'][$i]>0) && ($_FILES['f1']['type'][$i] == "application/pdf"))
                //{
                    
                    $ft=trim($_REQUEST['t1'][$i]);
                    $temp='noti/';
                    $file = $_FILES['f1']['name'][$i];
                    $ext = pathinfo($file, PATHINFO_EXTENSION);
                     
                    $tmp=$_FILES['f1']['tmp_name'][$i];
                    $temp=$temp.basename($_FILES['f1']['name'][$i]); //.".".$ext);
                   
                    move_uploaded_file($tmp,$temp);
                    $temp='';
                    $tmp='';
                   
                    
                    $qry="insert into notification_file (nid,fname) values(".$row['nid'].",'$file')";
                    //echo $qry;
                    $res=mysqli_query($conn,$qry);
                //}
            }
        //}
       unset($_POST['submit']);
      echo"<script>window.location.href='notif.php';</script>";
    
?>
