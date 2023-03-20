<?php
    include "db_con.php";
    $dd=$_REQUEST['dd'];
    $dn=$_REQUEST['dn'];
    $dbj=$_REQUEST['text_editor'];
    /*$filename="";
    if($_FILES['f1']['size']>0)
    {
        $filename = $_FILES['f1']['name'];
        $location = 'dept/'.$filename;
       
       // echo $location;
        
        $file_extension = pathinfo($location, PATHINFO_EXTENSION);
        $file_extension = strtolower($file_extension);
        move_uploaded_file($_FILES['f1']['tmp_name'],$location);
    }
   /* if ($_FILES['f1']['size']>0)
        $f1 = addslashes(file_get_contents($_FILES['f1']['tmp_name']));
    else
        $f1=null;*/
        
        
    $qry="update dep_mas set dname='$dn',dobj='$dbj' where did=".$dd;
    $res=mysqli_query($conn,$qry);
    
    for($i=0;$i<4;$i++)
        {
            if($_FILES['f1']['size'][$i]>0)
            {
                $temp='dept/branch/';
                $file = $_FILES['f1']['name'][$i];
                $ext = pathinfo($file, PATHINFO_EXTENSION);
                 
                $tmp=$_FILES['f1']['tmp_name'][$i];
                $temp=$temp.basename($_FILES['f1']['name'][$i]); //.".".$ext);
               
                move_uploaded_file($tmp,$temp);
                $temp='';
                $tmp='';
                
                $qry="insert into dep_mas_file (did,fname) values(".$dd.",'$file')";
                $res=mysqli_query($conn,$qry);
            }
        }
    
    
    
    
   /* if($_FILES["f1"]['size']>0)
    {
        $qry="insert into dep_mas_file (did,fname) values(".$dd.",'$filename')";
        $res=mysqli_query($conn,$qry);
    }
   // echo $qry;*/
    //echo "<script>window.location.href='dept_det.php?did=$dd';</script>";
    echo "<script>window.location.href='dept_dashboard.php';</script>";
?>