<?php
    session_start();
    include "db_con.php"
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Karnatak University | IQAC - NRIF</title>
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
    
  <section class="hero-wrap">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread" style="font-family:Exo;color:#fff;font-size:18px;padding:7px">IQAC - NRIF</h1>
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
					
					    <table id="grid" class="table table-bordered" style="font-size:11pt;color:#000;width:100%">
                            <tr>
                                <td><a href="iqac_nrif_add.php"><img src="images/add1.png"> </a></td>
                            </tr>
					        <?php
                                $qry="select * from iq_nrif_file";
                                $res=mysqli_query($conn,$qry);
                                $cnt=1;
                                $ad="";$st="";
                                //while($row=mysqli_fetch_array($res))
                                //{
                                    /*echo "<tr>";
                                    echo "<td style='text-align:center'>".$cnt++."</td>";
                                    echo "<td>".$row['dname']."</td>";
                                    echo "<td style='text-align:center'></td>";
                                    echo "<td style='text-align:center'></td>";
                                    echo "<td style='text-align:center'><a href='fac_edit.php?did=".$row['fid']."'><img src='images/ed4.png' style='width:20px'> </a></td>";
                                    echo "<td style='text-align:center'> </a></td>";*/
                                    
                                   // $ad=$row['iq_gid'];
                                    //$st=$row['status'];
                               
                            ?>
                            <tr style="text-align:center">
                                <td style="text-align:left;color:#3229DE;font-weight:bold">IQAC NRIF</td>
                                <td><a href="iqac_nrif_view.php"><img src="images/v2.jpg"> </a></td>
                                <td><a href="iqac_nrif_del.php?"><img src="images/del3.png" ></a></td>
						    </tr>
						   <?php //}
						   ?>
					    </table>
					    
					
				</div>
				</div>
				</div>
				<div class="col-md-3 d-flex align-items-stretch">
					    <div class="sidebar-box ftco-animate">
					        <br>
					        <div class="vertical-menu" style="width:100%">
                                <a href="iqac-obj.php">About IQAC </a>
								<a href="iqac_team.php">IQAC Team</a> 
								<a href="iqac-advisory.php">Advisory Committee Members</a>
								<a href="iqac_act.php">Activities of IQAC</a>
								<a href="iqac_feedbk_stake.php">Feedback of Stake Holders </a>
								<a href="iqac_rep.php">IQAC Reports </a>					
								<a href="iqac_pol.php">Policies and Guidelines</a>
								<a href="iqac_prg.php">Programme Specific Outcomes</a>
								<a href="iqac_nirf.php" class="active">NIRF</a>
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

