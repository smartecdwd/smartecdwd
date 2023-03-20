<?php
    session_start();
	//error_reporting(1);
	
    include "db_con.php";
	?>

<?php 

//	$department=$_REQUEST['department'];
//	$sub_department=$_REQUEST['sub_department'];
	
	$dd=$_REQUEST['tdd'];
	$name=$_REQUEST['fn'];
    $dg=$_REQUEST['dg'];
  
	$sp=$_REQUEST['sp'];
	$m1=$_REQUEST['mob1'];
	$m2=$_REQUEST['mob2'];
	$email=$_REQUEST['em'];
	$wurl=$_REQUEST['wurl'];
	$rurl=$_REQUEST['rurl'];
	$vurl=$_REQUEST['vurl'];
	$dod=$_REQUEST['dod'];
	//$vidwan_url=$_REQUEST['vidwan_url'];
	$f1="";
	$ra=rand(10000,1000000);
	$cate_id="fac".$ra;
	$imgContent="";
	if($_FILES['f1']['size']>0 && ($_FILES['f1']['type']=='image/png' || $_FILES['f1']['type']=='image/jpg' || $_FILES['f1']['type']=='image/jpeg'))
	{ 
            $image = $_FILES['f1']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
	}	
	
	
	 /*$qry="insert into faculty (did,name,design,spec,mob,email,website,vidwan_url,research_url,depart,sub_depart) values('$cate_id','$name','$designation','$specialization','$mob','$email','$website_url','$vidwan_url','$res_url','$department','$sub_department')";*/
	    $qry="insert into faculty(did,fname,design,aos,mob,mob2,email,website,rea_url,vurl,pimg,dord) 
	        values($dd,'$name','$dg','$sp','$m1','$m2','$email','wurl','$rurl','$vurl','$imgContent',$dod)";
	  
        $res=mysqli_query($conn,$qry);
        $qry="select max(fid) as fid from faculty";
       $res=mysqli_query($conn,$qry);
		
        $row=mysqli_fetch_array($res);
        $id=$row['fid'];
        if($_FILES['f2']['size']>0 && $_FILES['f1']['type']=='application/pdf')
        {
                $temp='fac/prof/';
                $file = $_FILES['f2']['name'];
                $ext = pathinfo($file, PATHINFO_EXTENSION);
                 
                $tmp=$_FILES['f2']['tmp_name'];
                $temp=$temp.basename($_FILES['f2']['name']); //.".".$ext);
               
                move_uploaded_file($tmp,$temp);
                $temp='';
                $tmp='';
                
                $qry="insert into faculty_file (fid,fname) values(".$id.",'$file')";
                $res=mysqli_query($conn,$qry);
                
                $qry="update faculty set pro_pdf='".$file."' where fid=".$id;
                $res=mysqli_query($conn,$qry);	
        }
        
        if($qry)
			{
			?>
			
			<script language="javascript">
		//	alert("Successfully Created..!");
			document.location.href='dept_dashboard.php';
			</script>
			<?php
			}
			else
			{
			?>
			<script language="javascript">
			alert("Error occured in server plz tray again later..!");
			</script>
			<?php
			}	
            
            //}
      //  }
	

	
?>