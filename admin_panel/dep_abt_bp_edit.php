<?php
    session_start();
    include "db_con.php";
    $did=$_SESSION['did']; //$_REQUEST['did'];
    
    $qry="select * from vw_dep_bp where did=".$did;
    
    $res=mysqli_query($conn,$qry);
    $dn="";$dj="";$fn="";$fid="";$br="";
    while($row=mysqli_fetch_array($res))
    {
        $dn=$row['dname'];
        $dj=$row['bp_det'];
        $fid=$row['dbpid'];
        $br=$row['branch'];
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Karnatak University | Department - Best Practices</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Fredoka+One&family=Signika:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">
	  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong|Akaya+Telivigala|Alice|Average|Andada Pro|Enriqueta">
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
    
    <link rel="stylesheet" href="css/vstyle1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    
    
    <link rel="stylesheet" type="text/css" href="editor_style.css">
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
   
    <script type="text/javascript">
        document.addEventListener( 'DOMContentLoaded',function()
        {
            CKEDITOR.replace( 'text_editor',{
            filebrowserUploadUrl: 'ckeditor/ck_upload.php',
            filebrowserUploadMethod: 'form' });
            
            var ed=CKEDITOR.replace( 'text_editor');
            ed.addCss('h5{font-family:Alice;color:#0074B7;text-align:center;font-size:20px}	 p{font-family:Average;font-size:17px;color:#000;margin:10px;;text-align:justify}');
        });
    </script>
    <script>
        function pg_bk()
        {
            window.location.href='dep_fac.php';
        }
    </script>
    
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
					
				</ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap">
      
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread" style="font-family:Exo;color:#fff;font-size:16px;padding:7px">
                <?php echo $_SESSION['dname'];?> - Best Practice </h1>
             
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
                               <form action="dep_abt_bp_edit.php" method="post" enctype="multipart/form-data">
                                   	<div class="form-group">
                                   	    <label class="label" for="name" style="font-size:14px;color:#000">Department Name</label>
            							<input class="form-control" name="dp" id="dp" style="font-size:14px" value='<?php echo $dn; ?>' required readonly="true">
						            </div>
                                    <div class="form-group">
                                        <label class="label" for="name" style="font-size:14px;color:#000">Department Best Practice</label>
                                        <textarea id="text_editor"  name="text_editor"><?php echo $dj; ?></textarea>
						            </div>
						            
						           	<div class="form-group" style="padding-top:20px;text-align:center">
							            <center><button class="btn btn-danger py-3 px-5"><a href='dept_dashboard.php' style='color:#fff'>Cancel</a></button>
							            <input type="submit" name="submit" value="Submit" class="btn btn-primary py-3 px-5"></center>
						            </div>
						              <input type="text" name="dd" value='<?php echo $did; ?>' style='visibility:hidden'>
						                <input type="text" name="df" value='<?php echo $fid; ?>' style='visibility:hidden'>
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
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
        function fetch_select(val)
        {
            
            $.ajax({
            type: 'post',
            url: 'fetch_dept.php',
            data: {
              opt:val
             },
             success: function (response) {
              document.getElementById("dp").innerHTML=response; 
             }
             });
        }
</script>
  
  </body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        include "db_con.php";
        $dd=$_REQUEST['dd'];
        $df=$_REQUEST['df'];
        $dn=$_REQUEST['dp'];
        $df=$_REQUEST['df'];
        $dbj=$_REQUEST['text_editor'];
        
        $qry="update dep_bp set bp_det='$dbj' where dbpid=".$df;
        $res=mysqli_query($conn,$qry);
        
       //echo "<script>window.location.href='dep_abt_bp.php?did=$dd';</script>";
       echo "<script>window.location.href='dept_dashboard.php';</script>";
    }
    
?>