<?php
    session_start();
    if(isset($_SESSION['uid']))
    {
        
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
	<link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Fredoka+One&family=Roboto+Slab&family=Signika:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">

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
        .pricing-entry{
            border:1px solid #c6ccd8;
            background-color:#c6ccd8;
        }
        .pricing-entry:hover{
            box-shadow: rgba(0, 0, 0, 0.24) 0px 7px 12px;
            border:1px solid #007bff;
            border-radius:15px;
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
	    	<img src="https://kud.ac.in/admin_panel/images/logo.png" style="width:5%">
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
                <h1 class="mb-2 bread" style="color:#fff;font-family:Signika;padding:5px">Administrator Panel - Dashboard</h1>
            </div>
            <div class="col-md-2 ftco-animate text-right">
                <a href="chk_out.php"><img src="images/logout1.png" style="float:right;padding:10px;width:40px"></a>
            </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section">
    	<div class="container">
    		<div class="row">  
    		<?php
        	    if($_SESSION['unam']=='smart_tech'){?>
        		 <div class="col-md-3 col-lg-3 ftco-animate">
            		<div class="pricing-entry bg-light pb-1 text-center">
            			<div>
            			    <h3 class="price"><a href="admin/ind_page.php" style="color:#043BB1;font-size:18px">Administrator</a></h3>
	        			    <?php// }
	        			    //else{?>
	        			      <!--  <h3 class="price"><a href="#" style="color:#043BB1;font-size:18px">Administrator</a></h3>-->
	        			    <?//}?>
    	        		    <img src="images/abt1.jpg" style="height: 60px;">
    	        		</div>
            		</div>
            	</div>
        	    <div class="col-md-3 col-lg-3 ftco-animate">
            		<div class="pricing-entry bg-light pb-1 text-center">
            			<div>
            			    <?php
            			        if($_SESSION['unam']=='smart_tech'){?>
    	        			        <h3 class="price"><a href="dept_view.php" style="color:#043BB1;font-size:18px">Department</a></h3>
    	        			    <?php }
    	        			    else{?>
    	        			        <h3 class="price"><a href="#" style="color:#043BB1;font-size:18px">Department</a></h3>
    	        			    <?}?>
    	        		    <img src="images/dept1a.jpg" style="height: 60px;">
    	        		</div>
            		</div>
            	</div>
           
        	    <div class="col-md-3 col-lg-3 ftco-animate">
            		<div class="pricing-entry bg-light pb-1 text-center">
            			<div>
            			    <?php
            			        if($_SESSION['unam']=='smart_tech'){?>
    	        			        <h3 class="price"><a href="iqac.php" style="color:#043BB1;font-size:18px">IQAC</a></h3>
    	        			    <?php }
    	        			    else{?>
    	        			        <h3 class="price"><a href="#" style="color:#043BB1;font-size:18px">IQAC</a></h3>
    	        			    <?}?>
    	        		    <img src="images/iqac.jpg" style="height: 60px;">
    	        	    </div>
            		</div>
            	</div>
             <?}?>
            	<div class="col-md-3 col-lg-3 ftco-animate">
            		<div class="pricing-entry bg-light pb-1 text-center">
            			<div>
    	        			<h3 class="price"><a href='notif.php' style="color:#043BB1;font-size:18px">Notification</a></h3>
    	        		    <img src="images/not1a.jpg" style="height: 60px;">
    	        	    </div>
            		</div>
            	</div>
            	
            </div>
            <br>
            <?php if($_SESSION['unam']=='smart_tech'){?>
            <div class="row">  
        		 <div class="col-md-3 col-lg-3 ftco-animate">
            		<div class="pricing-entry bg-light pb-1 text-center">
            			<div>
            			    <?php if($_SESSION['unam']=='smart_tech'){?>
    	        			    <h3 class="price"><a href="announcement/announce.php" style="color:#043BB1;font-size:18px">Announcement</a></h3>
    	        			<?}
    	        			else {?>
    	        			    <h3 class="price"><a href="#" style="color:#043BB1;font-size:18px">Announcement</a></h3>
    	        			<?}?>
    	        		    <img src="images/ann1.jpg" style="height: 60px;">
    	        	    </div>
            		</div>
            	</div>
            	<div class="col-md-3 col-lg-3 ftco-animate">
            		<div class="pricing-entry bg-light pb-1 text-center">
            			<div>
            			    <?php if($_SESSION['unam']=='smart_tech'){?>
    	        			    <h3 class="price"><a href="gallery/gallery.php" style="color:#043BB1;font-size:18px">Gallery</a></h3>
    	        			<?}
    	        			else{?>
    	        			    <h3 class="price"><a href="#" style="color:#043BB1;font-size:18px">Gallery</a></h3>
    	        			<?}?>
    	        		    <img src="images/gal1.jpg" style="height: 60px;">
    	        		</div>
            		</div>
            	</div>
            	<div class="col-md-3 col-lg-3 ftco-animate">
            		<div class="pricing-entry bg-light pb-1 text-center">
            			<div>
            			    <?php if($_SESSION['unam']=='smart_tech'){?>
    	        			    <h3 class="price"><a href="news/news.php" style="color:#043BB1;font-size:18px">News & Events</a></h3>
    	        			<?}
    	        			    else{?>
    	        			        <h3 class="price"><a href="#" style="color:#043BB1;font-size:18px">News & Events</a></h3>
    	        			<?}?>
    	        		    <img src="images/news.jpg" style="height: 60px;">
    	        		</div>
            		</div>
            	</div>
            	<div class="col-md-3 col-lg-3 ftco-animate">
            		<div class="pricing-entry bg-light pb-1 text-center">
            			<div>
    	        			<h3 class="price"><a href="#" style="color:#043BB1;font-size:18px">More Links</a></h3>
    	        		    <img src="images/upl2.jpg" style="height: 60px;">
    	        		</div>
            		</div>
            	</div>
            </div>
    	</div>
    	<?}?>
    </section>

		
    <footer class="ftco-footer ftco-bg-dark ftco-section">      
        <p style="color:#fff;text-align:center">Developed by: Smartec IT Solutions</p>
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
}
else{
echo "<script>window.location.href='index.php';</script>";
    }
?>