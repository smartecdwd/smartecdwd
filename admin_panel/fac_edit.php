<?php
    session_start();
    include "db_con.php";
    $did=$_SESSION['did'];
    $fid=$_REQUEST['fid'];
    
    $qry="select * from vw_faculty where fid=".$fid;
  
    $res=mysqli_query($conn,$qry);
    $dn="";$fn="";$ds="";$qu="";$ao="";$m1="";$m2="";$em="";
    $pr="";$wb="";$rs="";$vu="";$fid="";$pmg="";$dod="";
    while($row=mysqli_fetch_array($res))
    {
        $dn=$row['dname'];
        $fn=$row['fname'];
        $ds=$row['design'];
        $qu=$row['quali'];
        $ao=$row['aos'];        
        $m1=$row['mob'];
        $em=$row['email'];
        $pr=$row['pro_pdf'];
        $wb=$row['website'];
        $rs=$row['rea_url'];
        $vu=$row['vurl'];
        $m2=$row['mob2'];
        $fid=$row['fid'];
        $pmg=$row['pimg'];
        $dod=$row['dord'];
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Karnatak University | Department - Faculty</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Fredoka+One&family=Signika:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" type="text/css" href="editor_style.css">
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script type="text/javascript">
        document.addEventListener( 'DOMContentLoaded',function()
        {
        CKEDITOR.replace( 'text_editor' );	
        });
    </script>
    <script type="text/javascript">
        document.addEventListener( 'DOMContentLoaded',function()
        {
            CKEDITOR.replace( 'text_editor' );	
            CKEDITOR.replace( 'text_editor1' );	
        });
    </script>
   
    <style>
        #nav-link li a:hover{
            color:red;
        }
    </style>
  </head>
  <body>
	  <div class="py-2">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
			    		
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
	    	<img src="images/logo.png" style="width:5%">
				<a class="navbar-brand" href="index.html" style="font-family:'Zen Kurenaido';font-size:18px;line-height:.8cm">ಕರ್ನಾಟಕ ವಿಶ್ವವಿದ್ಯಾಲಯ, ಧಾರವಾಡ<br>Karnatak University, Dharwad</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <!-- <p class="button-custom order-lg-last mb-0"><a href="appointment.html" class="btn btn-secondary py-2 px-3">Make An Appointment</a></p> -->
	      <div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="dept_dashboard.php" class="nav-link active" style="font-size:18px;color:#000">Home</a></li>
					<li class="nav-item"><a href="index.php" class="nav-link" style="font-size:18px;;color:#000">Logout</a></li>
				</ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread" style="font-family:Exo;color:#fff;font-size:18px;padding:7px"><? echo $_SESSION['dname'];?> - Faculty List</h1>
             
          </div>
        </div>
      </div>
    </section>
	
	<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
		<div class="container">
			<div class="row d-flex align-items-stretch no-gutters">
				<div class="col-md-12 p-4 p-md-5 order-md-last bg-light" style="border:1px solid #1eaaf1;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
				
                    <div class="row" style="margin-top: 10px">
                        <div class="col-12">
                            <form action="fac_edit.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                           	    <label class="label" for="name" style="font-size:14px;color:#000">Department Name</label>
                           	     <?php
                           	        $qry="select did,dname from dep_mas where did=".$_SESSION['did'];
                           	        $res=mysqli_query($conn,$qry);
                           	        $row=mysqli_fetch_array($res);
                           	        
                           	    ?>
    							<input class="form-control" name="dp" id="dp" style="font-size:14px" readonly="true" value='<?php echo $row['dname'];?>' required>
				            </div>
						<div class="form-group">
						
							<label class="label" for="name" style="font-size:14px;color:#000">Name</label>
							<input type="text" class="form-control" name="fn" style="font-size:14px" required value='<?php echo $fn;?>'>
						</div>
						<div class="form-group">
						<label class="label" for="name" style="font-size:14px;color:#000">Designation</label>
							<input type="text" class="form-control" style="font-size:14px" name="dg" value='<?php echo $ds;?>'>
						</div>
						<div class="form-group">
						<label class="label" for="name" style="font-size:14px;color:#000">Specialization </label>
							<input type="text" class="form-control" style="font-size:14px" name="sp" value='<?php echo $ao;?>'>
						</div>
						<div class="form-group">
						    <label class="label" for="name" style="font-size:14px;color:#000">Mobile 1</label>
							<input type="text" class="form-control" style="font-size:14px" name="mob1" value='<?php echo $m1;?>'>
						</div>
						<div class="form-group">
						    <label class="label" for="name" style="font-size:14px;color:#000">Mobile 2</label>
							<input type="text" class="form-control" style="font-size:14px" name="mob2" value='<?php echo $m2;?>'>
						</div>
						<div class="form-group">
						<label class="label" for="name" style="font-size:14px;color:#000">Email Id</label>
							<input type="text" class="form-control" style="font-size:14px" name="em" value='<?php echo $em;?>'>
						</div>
						<div class="form-group">
						<label class="label" for="name" style="font-size:14px;color:#000">Website URL</label>
							<input type="text" class="form-control" style="font-size:14px" name="wurl" value='<?php echo $wb;?>'>
						</div>
						<div class="form-group">
						<label class="label" for="name" style="font-size:14px;color:#000">Research URL</label>
							<input type="text" class="form-control" style="font-size:14px" name="rurl" value='<?php echo $rs;?>'>
						</div>
						<div class="form-group">
						<label class="label" for="name" style="font-size:14px;color:#000">Vidwan  URL</label>
							<input type="text" class="form-control" style="font-size:14px" name="vurl" value='<?php echo $vu;?>'>
						</div>
						<div class="form-group">
						    <?php echo "<img src='data:image/jpg;charset=utf8;base64,". base64_encode($pmg)."' style='width:150px'/>";
						    ?><br>
							<label class="label" for="name" style="font-size:14px;color:#000">Upload Faculty Image</label>
							<input type="file" class="form-control" name="f1" style="font-size:14px" placeholder="Upload Faculty Image">
						</div>	
						<div class="form-group">
							<label class="label" for="name" style="font-size:14px;color:#000">Upload Profile</label>
							<input type="file" class="form-control" style="font-size:14px"  name="f2">
						</div>
			            <div class="row">
				            <div class="col-md-8 form-group">
				                 <label class="label" for="name" style="font-size:14px;color:#000">File Uploaded</label><br>
				                 <table style="color:#334BFF;width:100%">
				                 <?php
				                    $qry="select * from faculty_file where fid=".$fid;
				                    $res=mysqli_query($conn,$qry);
				                    while($row=mysqli_fetch_array($res))
				                    {?>
				                       <tr>
				                           <td><?php echo $row['fname'];?></td>
				                           <td>
				                               <a href='fac_file.php?flid=<?php echo $row['f_id'];?>&fid=<?php echo $fid?>'>
				                               <img src="images/x2.png" style="padding:10px"></a> </td>
				                       </tr>
				                            
				                <?php } ?>
				                </table>
				            </div>
				        </div>
				        <div class="form-group">
						    <label class="label" for="name" style="font-size:14px;color:#000">Display Order</label>
							<input type="number" class="form-control" style="font-size:14px" name="dod" value='<?php echo $dod;?>'>
						</div>
    						        
						           	<div class="form-group" style="padding-top:20px;text-align:center">
							            <center><button class="btn btn-danger py-3 px-5"><a href='dept_dashboard.php' style='color:#fff'>Cancel</a></button>
							            <input type="submit" name="submit" value="Submit" class="btn btn-primary py-3 px-5"></center>
						            </div>
						              <input type="text" name="dd" value='<?php echo $did; ?>' style='visibility:hidden'>
						              <input type="text" name="fid" value='<?php echo $fid; ?>' style='visibility:hidden'>
						          </div>
                               </form>
                            </div>
                            
                        </div>
                      </div>
                    </div>
                  
				</div>
			</div>
		</div>
	</section>

		
    <footer class="ftco-footer ftco-bg-dark ftco-section" style="height:50px">
            <p style="text-align:center;font-family:15px">Developed by: Smartec IT Solutions</p>		
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
   
  
  </body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        include "db_con.php";
        $dd=$_REQUEST['tdd'];
    	$fn=$_REQUEST['fn'];
        $dg=$_REQUEST['dg'];
      
    	$sp=$_REQUEST['sp'];
    	$m1=$_REQUEST['mob1'];
    	$m2=$_REQUEST['mob2'];
    	$email=$_REQUEST['em'];
    	$wurl=$_REQUEST['wurl'];
    	$rurl=$_REQUEST['rurl'];
    	$vurl=$_REQUEST['vurl'];
    	$dod=$_REQUEST['dod'];

        $qry="update faculty set fname='$fn',design='$dg',aos='$sp',mob='$m1',mob2='$m2',email='$email',website='$wurl',rea_url='$rurl',vurl='$vurl',dord='$dod' where fid=".$fid; 
	    echo $qry;
        $res=mysqli_query($conn,$qry);	
	
	    $f1="";
	    $ra=rand(10000,1000000);
	    $cate_id="fac".$ra;
	    $imgContent="";
	    if($_FILES['f1']['size']>0)
	    { 
            $image = $_FILES['f1']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
            $qry="update faculty set pimg='".$imgContent."' where fid=".$fid;
            $res=mysqli_query($conn,$qry);	
	    }	
	
        if($_FILES['f2']['size']>0)
        {
                $temp='fac/prof/';
                $file = $_FILES['f2']['name'];
                $ext = pathinfo($file, PATHINFO_EXTENSION);
                 
                $tmp=$_FILES['f2']['tmp_name'];
                $temp=$temp.basename($_FILES['f2']['name']); //.".".$ext);
               
                move_uploaded_file($tmp,$temp);
                $temp='';
                $tmp='';
                
                $qry="insert into faculty_file (fid,fname) values(".$fid.",'$file')";
                $res=mysqli_query($conn,$qry);
                
                $qry="update faculty set pro_pdf='".$file."' where fid=".$fid;
                $res=mysqli_query($conn,$qry);	
        }
        
        
        /*if($_FILES['f2']['size']>0)
            {
                $temp='fac/prof/';
                $file = $_FILES['f2']['name'];
                $ext = pathinfo($file, PATHINFO_EXTENSION);
                 
                $tmp=$_FILES['f2']['tmp_name'];
                $temp=$temp.basename($_FILES['f2']['name']); //.".".$ext);
               
                move_uploaded_file($tmp,$temp);
                $temp='';
                $tmp='';
                
                $qry="insert into faculty_file (fid,fname) values(".$dd.",'$file')";
                $res=mysqli_query($conn,$qry);
            }*/
        echo "<script>window.location.href='fac_view.php';</script>";
    }
?>