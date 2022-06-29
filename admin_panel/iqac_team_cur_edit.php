<?php
    session_start();
    include "db_con.php";
    
    $fid=$_REQUEST['fid'];
    
    $qry="select * from iq_team_cur where iq_cid=".$fid;
  
    $res=mysqli_query($conn,$qry);
    $fn="";$ds="";$dp="";$m1="";$m2="";$e1="";$e2="";$pmg="";
    while($row=mysqli_fetch_array($res))
    {
        $fn=$row['fname'];
        $ds=$row['design'];
        $dp=$row['dept'];
        $m1=$row['mob'];
        $e1=$row['email'];
        $e2=$row['email2'];
        $m2=$row['mob2'];
        $pmg=$row['pimg'];
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Karnatak University | IQAC - Current Team</title>
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
    <link rel="stylesheet" href="css/vstyle.css">	
    <link rel="stylesheet" href="css/htab.css">	
    
  </head>
  <body>
	  <div class="py-2 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
			    		
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
	    	<img src="images/logo.png" style="width:5%">
				<a class="navbar-brand" href="index.html" style="font-family:'Zen Kurenaido';font-size:18px;line-height:.8cm">ಕರ್ನಾಟಕ ವಿಶ್ವವಿದ್ಯಾಲಯ, ಧಾರವಾಡ<br>Karnatak University, Dharwad</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <!-- <p class="button-custom order-lg-last mb-0"><a href="appointment.html" class="btn btn-secondary py-2 px-3">Make An Appointment</a></p> -->
	      <div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="iqac.php" class="nav-link" style="font-size:20px">Home</a></li>
					<li class="nav-item"><a href="index.php" class="nav-link" style="font-size:20px">Logout</a></li>
				</ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
  <section class="hero-wrap" style="background-color:#1eaaf1;height:80px">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread" style="font-family:Exo;color:#fff;font-size:24px;padding:20px">IAQC - Team</h1>
          </div>
        </div>
      </div>
    </section>
	
	<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
		<div class="container">
			<div class="row d-flex align-items-stretch no-gutters">
				<div class="col-md-9 p-4 p-md-5 order-md-last bg-light" style="border:1px solid #1eaaf1;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                    <div class="row" style="margin-top: 10px">
                        <div class="col-12">
                            <form action="iqac_team_cur_edit.php" method="post" enctype="multipart/form-data">
					            <div class="form-group">
									<label class="label" for="name" style="font-size:14px;color:#000">Name</label>
						        	<input type="text" class="form-control" name="fn" style="font-size:14px" required value='<?php echo $fn;?>'>
						        </div>
						        <div class="form-group">
						            <label class="label" for="name" style="font-size:14px;color:#000">Designation</label>
							        <input type="text" class="form-control" style="font-size:14px" name="dg" value='<?php echo $ds;?>'>
						        </div>
						        <div class="form-group">
						            <label class="label" for="name" style="font-size:14px;color:#000">Department </label>
							        <input type="text" class="form-control" style="font-size:14px" name="dp" value='<?php echo $dp;?>'>
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
						            <label class="label" for="name" style="font-size:14px;color:#000">Email 1</label>
							        <input type="text" class="form-control" style="font-size:14px" name="e1" value='<?php echo $e1;?>'>
						        </div>
						        <div class="form-group">
						            <label class="label" for="name" style="font-size:14px;color:#000">Email 2</label>
							        <input type="text" class="form-control" style="font-size:14px" name="e2" value='<?php echo $e2;?>'>
						        </div>
						        <div class="form-group">
						            <?php echo "<img src='data:image/jpg;charset=utf8;base64,". base64_encode($pmg)."' style='width:150px'/>";?><br>
							        <label class="label" for="name" style="font-size:14px;color:#000">Upload Faculty Image 
							            <span>
							                <a href='iqac_team_cur_file.php?fid=<?php echo $fid;?>'>
    						                  <img src="images/x2.png" style="padding:20px"></a>
							            </span>
							     </label>
							        <input type="file" class="form-control" name="f1" placeholder="Upload Faculty Image">
						        </div>	
						        <div class="form-group" style="padding-top:20px;text-align:center">
							        <center>
							            <input type="submit" name="submit" value="Submit" class="btn btn-primary py-3 px-5"></center>
						        </div>
						        <input type="text" name="df" value='<?php echo $fid; ?>' style='visibility:hidden'>
					    </form>
					
				</div>
				</div>
				</div>
				<div class="col-md-3 d-flex align-items-stretch">
					    <div class="sidebar-box ftco-animate">
					        <br>
					        <div class="vertical-menu" style="width:100%">
                                <a href="iqac-obj.php">About IQAC </a>
								<a href="iqac_team.php" class="active">IQAC Team</a> 
								<a href="iqac-advisory.php">Advisory Committee Members</a>
								<a href="iqac_act.php">Activities of IQAC</a>
								<a href="iqac_feedbk_stake.php">Feedback of Stake Holders </a>
								<a href="iqac_rep.php">IQAC Reports </a>					
								<a href="iqac_pol.php">Policies and Guidelines</a>
								<a href="iqac_prg.php">Programme Specific Outcomes</a>
								<a href="iqac_nirf.php">NIRF</a>
								<a href="iqac_bp.php">Best Practices</a>
								<a href="iqac_gl.php">Gallery</a>
								<a href="iqac_ex.php">Extras</a>
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
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        $fn=$_REQUEST['fn'];
        $dg=$_REQUEST['dg'];
    	$dp=$_REQUEST['dp'];
    	$m1=$_REQUEST['mob1'];
    	$m2=$_REQUEST['mob2'];
    	$e1=$_REQUEST['e1'];
    	$e2=$_REQUEST['e2'];
    	$fid=$_REQUEST['df'];

        $qry="update iq_team_cur set fname='$fn',design='$dg',dept='$dp',mob='$m1',mob2='$m2',email='$e1',email2='$e2' where iq_cid=".$fid; 
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
            $qry="update iq_team_cur set pimg='".$imgContent."' where iq_cid=".$fid;
            $res=mysqli_query($conn,$qry);	
	    }	
	    unset($_POST['submit']);
        echo "<script>window.location.href='iqac_team_cur_view.php';</script>";
    }
    
?>
