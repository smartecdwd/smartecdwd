<?php
    session_start();
    include_once "db_con.php";
    if(isset($_SESSION['uid'])==false)
    {
        echo "<script>window.location.href='https://kud.ac.in/admin_panel';</script>";
    }
    $opt=$_REQUEST['did'];
    if($opt=="ch")
        $dg="Chancellor";
    else if($opt=="pc")
        $dg="Pro Chancellor";
    else if($opt=="ch")
        $dg="Pro Chancellor";
    else if($opt=="vc")
        $dg="Vice Chancellor";
    else if($opt=="rg")
        $dg="Registrar";
    else if($opt=="re")
        $dg="Registrar (Evaluation)";
    else if($opt=="fo")
        $dg="Finance Officer";

    $qry="select * from adm_page where design like '$dg'";
    $res=mysqli_query($conn,$qry);
    $cnt=0;
    $nm="";$dsc="";$imgc="";$fid="";$ph1="";$qu="";$mi="";
    while($row=mysqli_fetch_array($res))
    {
        $cnt++;
        $nm=$row['name'];
        $dsc=$row['descp'];
        $imgc=$row['ch_pic'];
        $fid=$row['slno'];
        $ph1=$row['ph'];
        $qu=$row['qu'];
        $mi=$row['mi'];
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Karnatak University | Administrator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Fredoka+One&family=Signika:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://kud.ac.in/admin_panel/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="https://kud.ac.in/admin_panel/css/animate.css">
    <link rel="stylesheet" href="https://kud.ac.in/admin_panel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://kud.ac.in/admin_panel/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://kud.ac.in/admin_panel/css/magnific-popup.css">

    <link rel="stylesheet" href="https://kud.ac.in/admin_panel/css/aos.css">
    <link rel="stylesheet" href="https://kud.ac.in/admin_panel/css/ionicons.min.css">
    <link rel="stylesheet" href="https://kud.ac.in/admin_panel/css/flaticon.css">
    <link rel="stylesheet" href="https://kud.ac.in/admin_panel/css/icomoon.css">
    <link rel="stylesheet" href="https://kud.ac.in/admin_panel/css/style.css">
    
    <link rel="stylesheet" href="https://kud.ac.in/admin_panel/css/vstyle1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
   
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
	    	<img src="https://kud.ac.in/admin_panel/images/logo.png" style="width:5%">
				<a class="navbar-brand" href="index.html" style="font-family:'Zen Kurenaido';font-size:18px;line-height:.8cm;color:#000">ಕರ್ನಾಟಕ ವಿಶ್ವವಿದ್ಯಾಲಯ, ಧಾರವಾಡ<br>Karnatak University, Dharwad</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <!-- <p class="button-custom order-lg-last mb-0"><a href="appointment.html" class="btn btn-secondary py-2 px-3">Make An Appointment</a></p> -->
	      <div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="ind_page.php" class="nav-link active" style="font-size:18px;color:#000">Home</a></li>
					<li class="nav-item"><a href="https://kud.ac.in/admin_panel/index.php" class="nav-link" style="font-size:18px;;color:#000">Logout</a></li>
				</ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap">
      
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread" style="font-family:Exo;color:#fff;font-size:20px;padding:7px">Administrator</h1>
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
                            <form action="chan_edit.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="label" for="name" style="color:#000;font-size:14px">Name</label>
							        <input type="text" name="cn" class="form-control" style="color:#000;font-size:14px" value='<?php echo $nm; ?>'>
						        </div>
						        <div class="form-group">
							        <label class="label" for="name" style="color:#000;font-size:14px">Qualification</label>
							        <input type="text" name="qu" class="form-control" style="color:#000;font-size:14px;" value='<?php echo $qu; ?>'>
						        </div>
						        <div class="form-group">
							        <label class="label" for="name" style="color:#000;font-size:14px">Details</label>
							        <input type="text" name="cdes" class="form-control" style="color:#000;font-size:14px;" value='<?php echo $dsc; ?>'>
						        </div>
						        <div class="form-group">
							        <label class="label" for="name" style="color:#000;font-size:14px">Phone</label>
							        <input type="text" name="ph" class="form-control" style="color:#000;font-size:14px;" value='<?php echo str_replace("-",",",$ph1); ?>'>
						        </div>
						        <div class="form-group">
						            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($imgc); ?>">
						        </div>          
						        <div class="form-group">
							        <label class="label" for="name" style="color:#000;font-size:14px">Select Picture</label>
							        <input type="file" name="f1" class="form-control" style="font-size:14px" accept="image/*" >
						        </div>
						        <div class="form-group">
							        <label class="label" for="name" style="color:#000;font-size:14px">Select Profile</label>
							        <input type="file" name="f2" class="form-control" style="font-size:14px" accept="application/pdf">
						        </div>
                                <div class="form-group">
							        <label class="label" for="name" style="color:#000;font-size:14px">More Info</label>
							        <input type="text" name="mi" class="form-control" style="color:#000;font-size:14px;" value='<?php echo $mi; ?>'>
						        </div>
						        <div class="form-group" style="padding-top:20px;text-align:center">
							            <center><button class="btn btn-danger py-3 px-5"><a href='ind_page.php' style='color:#fff'>Cancel</a></button>
							            <input type="submit" name="submit" value="Submit" class="btn btn-primary py-3 px-5"></center>
						       </div>
						        <input type="text" name="fid" value='<?php echo $fid;?>' style="visibility:hidden">
                            </form>
                            </div>
                            
                        </div>
                      </div>
                      <!--<div class="col-md-3 d-flex align-items-stretch">
					    <div class="sidebar-box ftco-animate">
					       
					       
					    </div>
			        </div>-->
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


    <script src="https://kud.ac.in/admin_panel/js/jquery.min.js"></script>
    <script src="https://kud.ac.in/admin_panel/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="https://kud.ac.in/admin_panel/js/popper.min.js"></script>
    <script src="https://kud.ac.in/admin_panel/js/bootstrap.min.js"></script>
    <script src="https://kud.ac.in/admin_panel/js/jquery.easing.1.3.js"></script>
    <script src="https://kud.ac.in/admin_panel/js/jquery.waypoints.min.js"></script>
    <script src="https://kud.ac.in/admin_panel/js/jquery.stellar.min.js"></script>
    <script src="https://kud.ac.in/admin_panel/js/owl.carousel.min.js"></script>
    <script src="https://kud.ac.in/admin_panel/js/jquery.magnific-popup.min.js"></script>
    <script src="https://kud.ac.in/admin_panel/js/aos.js"></script>
    <script src="https://kud.ac.in/admin_panel/js/jquery.animateNumber.min.js"></script>
    <script src="https://kud.ac.in/admin_panel/js/scrollax.min.js"></script>
    <script src="https://kud.ac.in/admin_panel/js/main.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

  </body>
</html>

<?php
    if(isset($_POST['submit']))
    {

        $opt=$_REQUEST['dg'];
        $dg="";
        if($opt=="ch")
            $dg="Chancellor";
        else if($opt=="pc")
            $dg="Pro Chancellor";
        else if($opt=="ch")
            $dg="Pro Chancellor";
        else if($opt=="vc")
            $dg="Vice Chancellor";
        else if($opt=="rg")
            $dg="Registrar";
        else if($opt=="re")
            $dg="Registrar (Evaluation)";
        else if($opt=="fo")
            $dg="Finance Officer";
            
        $fid=$_REQUEST['fid'];    
        $cn=trim(str_replace(",",'-',$_REQUEST['cn']));
        $cd=trim(str_replace("'",'-', $_REQUEST['cdes']));
        $ph=trim($_REQUEST['ph']);
        $qu=trim($_REQUEST['qu']);
        $mi=trim($_REQUEST['mi']);
        $imgContent="";
        
       
        $qry="update adm_page set name='$cn',descp='$cd',ph='$ph',quali='$qu',info='$mi' where slno=".$fid;
        $res=mysqli_query($conn,$qry);
        echo $_FILES['f1']['type'];
        if(($_FILES['f1']['size']>0) && (($_FILES['f1']['type']=="image/jpg") || ($_FILES['f1']['type']=="image/jpeg")))
        { 
            $image = $_FILES['f1']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
            
            $qry="update adm_page set ch_pic='$imgContent' where slno=".$fid;
            $res=mysqli_query($conn,$qry);
        }
        if (($_FILES['f2']['size']>0) && ($_FILES['f2']['type']=="pdf"))
        {
            $fileName = "https://www.kud.ac.in/file_upload/adm/".basename($_FILES["f2"]["name"]); 
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
            $allowTypes = array('pdf'); 
            if(in_array($fileType, $allowTypes))
            { 
                $image = $_FILES['f2']['tmp_name']; 
                $imgContent1 = addslashes(file_get_contents($image)); 
                $qry="update adm_page set info='$fileName' where slno=".$fid;
                $res=mysqli_query($conn,$qry);
                
                move_uploaded_file($image, $fileName);
            }
        }
	    unset($_POST['submit']);    
       echo "<script>window.location.href='ind_page.php';</script>";
    }
?>