<?php
    session_start();
    include_once "db_con.php";
     if(isset($_SESSION['uid'])==false)
    {
        echo "<script>window.location.href='https://kud.ac.in/admin_panel';</script>";
    }
    $opt=$_REQUEST['did'];
    $sl=$_REQUEST['sl'];
    
    $dg="";
    if($opt=="sy")
        $dg="Syndicate";
    else if($opt=="ac")
        $dg="Academic Council";
    else if($opt=="fc")
        $dg="Finance Committee";
    else if($opt=="df")
        $dg="Dean of Faculties";
    
    $qry="select * from adm_mem  where slno=".$sl;
    $res=mysqli_query($conn,$qry);        
    $cn="";$cd="";$ph="";$em="";$vo="";
    while($row=mysqli_fetch_array($res))
    {
        $cn=trim($row['name']);
        $cd=trim($row['details']);
        $ph=trim($row['phone']);
        $em=trim($row['email']);
        $vo=trim($row['vord']);
        /*$imgContent="";
        if($_FILES['f1']['size']>0)
        { 
            $image = $_FILES['f1']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
        }*/	
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
                            <form action="sy_edit.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="label" for="name" style="color:#000;font-size:14px">Name</label>
							        <input type="text" name="nm" class="form-control" style="color:#000;font-size:14px" value="<?php echo $cn;?>">
						        </div>
						        <div class="form-group">
							        <label class="label" for="name" style="color:#000;font-size:14px">Details</label>
							        <textarea rows="4" name="dt" class="form-control" style="color:#000;font-size:14px;"><?php echo $cd;?></textarea>
						        </div>
						         <div class="form-group">
							        <label class="label" for="name" style="color:#000;font-size:14px">Phone</label>
							        <input type="text" name="ph" class="form-control" style="color:#000;font-size:14px;" value="<?php echo $ph;?>">
						        </div>
						        <div class="form-group">
							        <label class="label" for="name" style="color:#000;font-size:14px">Email</label>
							        <input type="email" name="em" class="form-control" style="color:#000;font-size:14px;" value="<?php echo $em;?>">
						        </div>
                                <div class="form-group">
							        <label class="label" for="name" style="color:#000;font-size:14px">Display Order</label>
							        <input type="number" name="vo" class="form-control" style="color:#000;font-size:14px;width:100px" value="<?php echo $vo;?>" required>
						        </div>
						        <div class="form-group" style="padding-top:20px;text-align:center">
							            <center><button class="btn btn-danger py-3 px-5"><a href='ind_page.php' style='color:#fff'>Cancel</a></button>
							            <input type="submit" name="submit" value="Submit" class="btn btn-primary py-3 px-5"></center>
						       </div>
						        <input type="text" name="dg" value='<?php echo $dg;?>' style="visibility:hidden">
						        <input type="text" name="sl" value='<?php echo $sl;?>' style="visibility:hidden">
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
        $cn=trim(str_replace(",",'-',$_REQUEST['nm']));
        $cd=trim( $_REQUEST['dt']);
        $ph=trim($_REQUEST['ph']);
        $em=trim($_REQUEST['em']);
        $dg=$_REQUEST['dg'];
        $sl=$_REQUEST['sl'];
        $vo=$_REQUEST['vo'];
        /*$imgContent="";
        if($_FILES['f1']['size']>0)
        { 
            $image = $_FILES['f1']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
        }*/	
        $qry="update adm_mem set name='$cn',details='$cd',phone='$ph',email='$em',vord='$vo' where slno=$sl";
        //echo $qry;
        $res=mysqli_query($conn,$qry);
       
       echo "<script>window.location.href='ind_page.php';</script>";
    }
?>