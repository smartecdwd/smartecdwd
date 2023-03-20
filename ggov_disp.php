<?php
    session_start();
    include "db_con.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Karnatak University | Good Governance </title>
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
	<script>
	    function add_noti()
	    {
	        window.location.href='noti_add.php';
	    }
	</script>
	<style>
	    h4{
	        color:#000;
	        font-size:18px;
	    }
	    .table td a{color:red;}
        @font-face {
            font-family: NUDIUNI01E;
            src: url(https://karnataka.gov.in/frontend/opt1/fonts/NUDI UNI 01E.ttf) format(truetype);
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
	    	<img src="images/logo.png" style="width:5%">
				<a class="navbar-brand" href="index.html" style="font-family:'Zen Kurenaido';font-size:18px;line-height:.8cm">ಕರ್ನಾಟಕ ವಿಶ್ವವಿದ್ಯಾಲಯ, ಧಾರವಾಡ<br>Karnatak University, Dharwad</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <!-- <p class="button-custom order-lg-last mb-0"><a href="appointment.html" class="btn btn-secondary py-2 px-3">Make An Appointment</a></p> -->
	      <div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="more_link.php" class="nav-link pl-0" style="font-size:20px">Home</a></li>
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
            <h1 class="mb-2 bread" style="font-family:Exo;color:#fff;font-size:18px;padding:7px">Good Governance Initiatives</h1>
          </div>
        </div>
      </div>
    </section>
	
	<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
		<div class="container">
			<div class="row d-flex align-items-stretch no-gutters">
				<div class="col-md-12 p-3 p-md-3 order-md-last bg-light" style="border:1px solid #1eaaf1;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
			    
                        
				<div class="row" style="margin-top: 10px">
                    <div class="col-12">
                        <?php
                            $nid=$_REQUEST['nid'];
                            $qry="select * from good_gov where ggid=".$_REQUEST['gid']." order by ggid desc";
                            $res=mysqli_query($conn,$qry);
                            $fl="";
                            while($row=mysqli_fetch_array($res))
                            {
                                echo "<h4>".$row["gname"]."</h4>";
                                echo $row["gdesc"];
                            }
                            
                            $qry="select * from good_gov_file where ggid=".$nid." order by gfid";
                            $res=mysqli_query($conn,$qry);
                            $rnt=mysqli_num_rows($res);
                            if($rnt>0){
                        ?>
                        
                                <table id="grid" class="table table-bordered my-5" style="font-size:11pt;color:#000;width:80%" align="center">
                                    <tr style="background-color:#1eaaf1;color:#fff;text-align:center">
                                        <td>Slno</td>
                                        <td style="width:70%">Title </td>
                                        <td>View</td>
                                    </tr>
                                    <?php
                                        //$nid=$_REQUEST['nid'];
                                       
                                        $cnt=1;
                                        while($row=mysqli_fetch_array($res))
                                        {
                                            echo "<tr>";
                                            echo "<td style='text-align:center'>".$cnt++."</td>";
                                            echo "<td>".$row['fname']."</td>";
                                            echo "<td style='text-align:center'><a href='ggov/".$row['fname']."' target='_blank'><img src='images/v2.jpg'> </a></td>";
                                            echo "</tr>";
                                            
                                            
                                        }
                                    ?>
                                </table>
                        <?php } ?>
                    </div>
                </div>
	</section>

		
    <!--<footer class="ftco-footer ftco-bg-dark" style="height:50px">
            <p style="text-align:center;font-family:15px">Developed by: Smartec IT Solutions</p>		
    </footer>-->
    
  

  <!-- loader -->
 


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