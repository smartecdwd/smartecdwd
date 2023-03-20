<?php
    session_start();
    include "db_con.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Karnatak University</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Zen+Kurenaido&display=swap" rel="stylesheet">
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
	<style>
		.btn:hover{background-color:#BEDF7C;}
	</style>
  </head>
  <body>
	  <div class="py-2">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-3px-md-0">
	    		<div class="col-lg-12 d-block" >
		    		
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
	      <div class="collapse navbar-collapse" id="ftco-nav">
	       
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
	<section class="hero-wrap">

      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread" style="font-family:Exo;color:#fff;font-size:18px;padding:7px">Administrator Login</h1>
          </div>
        </div>
      </div>
    </section>

   
		
		<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
			<div class="container">			
				<div class="row d-flex align-items-stretch no-gutters">
					<div class="col-md-5 p-4 p-md-5 order-md-last">
						<form action="index.php" method="post" style="background-color:#7027A0;padding:25px" autocomplete="off">
						    <div class="mdiv"  id="dmsg" >
								<center><span id="msg"  style="color:#5E376D;font-size:15px;text-align-center;width:150%;padding:5px;">
								    </span></center>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="un" placeholder="User Name" required>
							</div>
							<div class="form-group">
								<input type="password" class="form-control" name="pwd" placeholder="Password" required>
							</div>
							  
							<div class="form-group">
								<center><input type="submit" value="Login" name="submit" class="btn py-2 px-5" style="background-color:#ECF87F"></center>
							</div>
						</form>
					</div>
					<div class="col-md-6 d-flex align-items-stretch">
						
					</div>
				</div>
			</div>
		</section>


		
    <footer class="ftco-footer ftco-bg-dark" style="position:fixed;left:0px;bottom:0px;width:100%;height:30px">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <p>
				Developed by: Smartec IT Solutions
			</p>
          </div>
        </div>
      </div>
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        $un=mysqli_real_escape_string($conn,$_REQUEST['un']);
        $pw=mysqli_real_escape_string($conn,$_REQUEST['pwd']);
        
        $qry="select * from user_info where uname='$un' and pwd='$pw'";
        //echo $qry;
        $res=mysqli_query($conn,$qry);
        $cnt=0;
        
        while($row=mysqli_fetch_array($res))
        {
            $_SESSION['uid']=$row['uid'];
            $_SESSION['unam']=$row['uname'];
            $_SESSION['user_start'] = time();
            $cnt++;
        }
        
        
        if($cnt>0)
        {
            echo "<script>window.location.href='dashboard.php';</script>";
        }
        else
        {?>
            <script>
                document.getElementById('msg').innerHTML="Invalid user";
                document.getElementById('msg').style.visibility='visible';
                document.getElementById('dmsg').style.visibility='visible';
            </script>
           
        <?}
    }
?>