<?php
    session_start();
    include "db_con.php";
   // $did=$_REQUEST['qid'];
    
 /*   $qry="select * from iq_fdbk" ;
    
    $res=mysqli_query($conn,$qry);
    $dn="";$dj="";$fn="";$fid="";
    while($row=mysqli_fetch_array($res))
    {
        $dj=$row['fb_det'];
        $fid=$row['iq_fbid'];
    }*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Karnatak University | IQAC - Gallery </title>
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
				<a class="navbar-brand" href="index.html" style="font-family:'Zen Kurenaido';font-size:18px;line-height:.8cm">????????????????????? ???????????????????????????????????????, ??????????????????<br>Karnatak University, Dharwad</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <!-- <p class="button-custom order-lg-last mb-0"><a href="appointment.html" class="btn btn-secondary py-2 px-3">Make An Appointment</a></p> -->
	      <div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="iqac_gl.php" class="nav-link active" style="font-size:18px;color:#000">Home</a></li>
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
            <h1 class="mb-2 bread" style="font-family:Exo;color:#fff;font-size:18px;padding:7px">IQAC - Gallery</h1>
             
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
                               <form action="#" method="post" enctype="multipart/form-data">
                                   	<div class="form-group">
                                   	    <table class="table" style="width:100%;color:#000">
                                   	        <tr>
                                   	            <td style="font-weight:bold;font-size:18px">IQAC - Gallery</td>
                                   	        </tr>
                                   	        
                                   	    </table>
                                   	    <table class="table" style="width:100%;color:#000">
                                   	        <?
                                   	            $qry="select * from iq_gal_file order by fname "; // where iq_adid=".$fid;
    
                                                $res=mysqli_query($conn,$qry);
                                                while($row=mysqli_fetch_array($res))
                                                {
                                   	                echo "<tr>
                                   	                    <td style='color:#1f75fe'><a href='iqac/gal/". $row['fname']."' target='_blank'>".$row['fname']."</a>
    						                              </td><td><a href='iqac_gal_del.php?fid=".$row['iq_gid']."'> <img src='images/x2.png' style='padding:10px'></a> </td>
                                   	                </tr>";
                                   	            } ?>
                                   	    </table>
                                    </form>
                                </div>
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
								<a href="iqac_nirf.php">NIRF</a>
								<a href="iqac_bp.php">Best Practices</a>
								<a href="iqac_gl.php" class="active">Gallery</a>
								<a href="iqac_ex.php">Extras</a>
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