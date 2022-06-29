<?php
    session_start();
    
    if(time() - $_SESSION['user_start'] > 600)
    {
        session_destory();
        echo "<script>window.location.href='https://kud.ac.in/admin_panel';</script>";
    }
    
    if(isset($_SESSION['uid'])==false)
    {
        session_destory();
        echo "<script>window.location.href='https://kud.ac.in/admin_panel';</script>";
    }
    
    
    include "db_con.php";
    $nid=$_REQUEST['nid'];
    $nm="";$nd="";$nde="";$ns="";$nt="";
    $qry="select * from notification where nid=".$nid;
    $res=mysqli_query($conn,$qry);
    while($row=mysqli_fetch_array($res))
    {
        $nm=$row['nname'];
        $nd=$row['ndate'];
        $nde=$row['ndesc'];
        $ns=$row['nstatus'];
        $nt=$row['ntype'];
    }
    
    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Karnatak University | Notification </title>
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
            CKEDITOR.replace( 'text_editor',{
            filebrowserUploadUrl: 'ckeditor/ck_upload.php',
            filebrowserUploadMethod: 'form' 
        });
        });
    </script>
    <script>
        $(function () {
            $('.datepicker').datepicker({
                format: 'd-M-yyyy'
            });
        });
    </script>
    <script>
        window.history.forward();
        function noBack() {
            window.history.forward();
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
					<li class="nav-item active"><a href="notif.php" class="nav-link pl-0" style="font-size:20px">Home</a></li>
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
            <h1 class="mb-2 bread" style="font-family:Exo;color:#fff;font-size:18px;padding:7px">Notification</h1>
          </div>
        </div>
      </div>
    </section>
	
	<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
		<div class="container">
			<div class="row d-flex align-items-stretch no-gutters">
				<div class="col-md-12 p-3 p-md-3 order-md-last bg-light" style="border:1px solid #1eaaf1;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
			    
                <form action="noti_upd.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-2 form-group">
                            <label class="label" for="name" style="font-size:14px;color:#000;">Notification Name</label>
                        </div>
                        <div class="col-sm-10 form-group ">
                            <input type="text" class="form-control" name="nm"  style="font-size:14px;
	                        height:15px;" value='<?php echo $nm; ?>' required minlength="15">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2 form-group ">
                            <label class="label" for="name" style="font-size:14px;color:#000;">Notification Date</label>
                        </div>
                        <div class="col-sm-4 form-group ">
                            <input  type="date" class="form-control" data-date="" data-date-format="d-MM-Y"  style="font-size:14px" required name='nd' value='<?php echo $nd; ?>'>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-2">
                            <label class="label" for="name" style="font-size:14px;color:#000;">Notification Description</label>
                        </div>
                        <div class="form-group col-sm-10">
                            <textarea id="text_editor"  name="text_editor"><?php echo $nde; ?></textarea>
		                </div>
                   </div>
                    
                    <div class="row">
                            <div class="col-sm-2 form-group">
                                <label class="label" for="name" style="font-size:14px;color:#000;">Status</label>
                            </div>
                            <div class="col-sm-4 form-group">
                                <select class="form-control" name="st"  style="font-size:14px">
                                    <?php
                                        if($ns=='A')
                                            echo"<option selected value='A'>Active</option>";
                                        else
                                            echo"<option value='A'>Active</option>";
                                        if($ns=='D')
                                            echo "<option selected value='D'>Disable</option>";
                                        else
                                            echo "<option value='D'>Disable</option>";
                                    ?>
                                </select>
                            </div>
                        
                            <div class="col-sm-2 form-group ">
                                <label class="label" for="name" style="font-size:14px;color:#000;">Notification Type</label>
                            </div>
                            <div class="col-sm-4 form-group ">
                                <select class="form-control" name="typ"  style="font-size:14px" required>
                                    <?php
                                        if($nt=='N')
                                            echo "<option selected value='N'>Notification</option>";
                                        else
                                            echo "<option value='N'>Notification</option>";
                                        if($nt=='C')        
                                            echo "<option selected value='C'>Circulars</option>";
                                        else
                                            echo "<option value='C'>Circulars</option>";
                                        if($nt=='T')
                                            echo "<option selected value='T'>Tender</option>";
                                        else
                                            echo "<option value='T'>Tender</option>";
                                        if($nt=='A')
                                            echo "<option selected value='A'>Academic</option>";
                                        else
                                            echo "<option value='A'>Academic</option>";
                                        if($nt=='E')
                                            echo "<option selected value='E'>Exam</option>";
                                        else
                                            echo "<option value='E'>Exam</option>";
                                        if($nt=='EV')
                                            echo "<option selected value='EV'>Events</option>";
                                        else
                                            echo "<option value='EV'>Events</option>";
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2 form-group ">
                                <label class="label" for="name" style="font-size:14px;color:#000;">File Uploaded</label>
                            </div>
                            <div class="col-sm-10 form-group ">
                             <table class="table table-bordered" style="width:100%" align="center">
                        <?php
                            $qry="select * from notification_file where nid=".$nid;
                            $res=mysqli_query($conn,$qry);
                            $cnt=1;
                            while($row=mysqli_fetch_array($res))
                            {?>
                                    <tr>
                                    <td style="text-align:center;width:10%"><?php echo $cnt++;?></td>
                                    <td><a href="noti/<?php echo $row['fname'];?>"><?php echo $row['fname'];?></a></td>
                                    <td><a href="noti_file?fid=<?php echo $row['nfid'];?>"><img src="images/x1.png"></a></td>
                                    </tr>
                            <?}?>
                                </table>
                                    
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-10 form-group text:center">
                                <label class="label" for="name" style="font-size:14px;color:#000;">Notification Upload</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2 form-group "></div>
                            <div class="col-sm-5 form-group ">
                                <input type="file" class="form-control" name="f1[]"  style="font-size:14px" accept="application/pdf">
                            </div>
                            <div class="col-sm-5 form-group ">
                                <input type="file" class="form-control" name="f1[]"  style="font-size:14px" accept="application/pdf">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2 form-group "></div>
                            <div class="col-sm-5 form-group ">
                                <input type="file" class="form-control" name="f1[]"  style="font-size:14px" accept="application/pdf">
                            </div>
                            <div class="col-sm-5 form-group ">
                                <input type="file" class="form-control" name="f1[]"  style="font-size:14px" accept="application/pdf">
                            </div>
                        </div>
                          <div class="row">
                            <div class="col-sm-2 form-group "></div>
                            <div class="col-sm-5 form-group ">
                                <input type="file" class="form-control" name="f1[]"  style="font-size:14px" accept="application/pdf">
                            </div>
                            <div class="col-sm-5 form-group ">
                                <input type="file" class="form-control" name="f1[]"  style="font-size:14px" accept="application/pdf">
                            </div>
                        </div>
                          <div class="row">
                            <div class="col-sm-2 form-group "></div>
                            <div class="col-sm-5 form-group ">
                                <input type="file" class="form-control" name="f1[]"  style="font-size:14px" accept="application/pdf">
                            </div>
                            
                            <div class="col-sm-5 form-group ">
                                <input type="file" class="form-control" name="f1[]"  style="font-size:14px" accept="application/pdf">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2 form-group "></div>
                            <div class="col-sm-5 form-group ">
                                <input type="file" class="form-control" name="f1[]"  style="font-size:14px" accept="application/pdf">
                            </div>
                            <div class="col-sm-5 form-group ">
                                <input type="file" class="form-control" name="f1[]"  style="font-size:14px" accept="application/pdf">
                            </div>
                        </div>
                    <div class="row">
                    	<div class="col-sm-12 form-group">
                    	    <center><button class="btn btn-danger py-3 px-5"><a href='notif.php' style='color:#fff'>Cancel</a></button>
							<input type="submit" value="Submit" class="btn btn-primary py-3 px-5"></center>
						</div>
						<input type="text" class="form-control" name="nid"  value='<?php echo $nid; ?>' style="visibility:hidden">
					</div>
                                    
                </form>
				</div>
			</div>
		</div>
	</section>

		
    <footer class="ftco-footer ftco-bg-dark " style="height:50px">
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