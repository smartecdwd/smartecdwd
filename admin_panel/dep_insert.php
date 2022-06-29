<?php
    session_start();
    include "db_con.php";
    
    $dn=$_REQUEST['dn'];
    $dbj=$_REQUEST['text_editor'];
    $br = $_SESSION['branch'];
    $f1="";$f2="";$f3="";$f4="";$f5="";$f6="";$f7="";$f8="";
    /*$filename = $_FILES['f1']['name'];
    $location = 'dept/branch/'.$filename;
   
    echo $location;
    
    $file_extension = pathinfo($location, PATHINFO_EXTENSION);
    $file_extension = strtolower($file_extension);
    move_uploaded_file($_FILES['f1']['tmp_name'],$location);
    
   /* if ($_FILES['f1']['size']>0)
        $f1 = addslashes(file_get_contents($_FILES['f1']['tmp_name']));
    else
        $f1=null;*/
   
        $qry="update dep_mas set dobj ='$dbj' where did=".$_SESSION['did'];
        $res=mysqli_query($conn,$qry);
       // $qry="select max(did) as did from dep_mas";
       // $res=mysqli_query($conn,$qry);
    //    $row=mysqli_fetch_array($res);
      //  $id=$row['did'];
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
            
            $qry="insert into dep_mas_file (did,fname) values(".$_SESSION['did'].",'$file')";
            $res=mysqli_query($conn,$qry);
                
            //   $count++;
            
            }
        }
        
            
        
        
       // echo $qry;
       // echo "<script>window.location.href='dept_det.php?did=$id';</script>";
        echo "<script>window.location.href='dept_dashboard.php';</script>";
?>