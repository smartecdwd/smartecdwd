<?php  
  include "db_con.php";
        
        $dt=$_REQUEST['dt'];
        $dt=date("Y-m-d", strtotime($dt));
        $da=$_REQUEST['da'];
        $st=$_REQUEST['st'];
        $ft=$_REQUEST['ft'];
        $id=$_REQUEST['nid'];
        
        $qry="update announce set adate='$dt',adata='$da',status='$st' where aid=".$id;
        $res=mysqli_query($conn,$qry);
        
        if($_FILES['f1']['size']>0)
        {
            //$doc = $_FILES['f1']['tmp_name'][0]; 
            //$docContent = fopen($doc, "rb");
           /* $filePointer = fopen($_FILES['f1']['tmp_name'], 'r');
            $fileData = fread($filePointer, filesize($_FILES['f1']['tmp_name']));
            $fileData = addslashes($fileData);   */
            
            $temp='upload/';
            $file = $_FILES['f1']['name'];
            $ext = pathinfo($file, PATHINFO_EXTENSION);
             
            $tmp=$_FILES['f1']['tmp_name'];
            $temp=$temp.basename($_FILES['f1']['name']); //.".".$ext);
               
            move_uploaded_file($tmp,$temp);
            $qry="insert into announce_file (aid,ftitle) values(".$id.",'$file')";
            $res=mysqli_query($conn,$qry);
        }
        
        echo "<script>window.location.href='announce.php';</script>";
?>