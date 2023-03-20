<?php
    session_start();
  
   /* if(time() - $_SESSION['user_start'] > 600)
    {
       // session_destory();
        echo "<script>window.location.href='https://kud.ac.in/admin_panel';</script>";
    }
    
    if(isset($_SESSION['uid'])==false)
    {
        echo "<script>window.location.href='https://kud.ac.in/admin_panel';</script>";
    }*/
    
    include "db_con.php";

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
        function pg_bk()
        {
            window.location.href="dashboard.php";
        }
        
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
                            <form action="ggov_edit.php" method="post" enctype="multipart/form-data">
                                <?php
                                    $gid=$_REQUEST['gid'];
                                    $qry="select * from good_gov where ggid=".$gid;
                                    $res=mysqli_query($conn,$qry);
                                    $fl="";
                                    $row=mysqli_fetch_array($res);
                                ?>
                                <div class="row">
                                    <div class="col-sm-2 form-group">
                                        <label class="label" for="name" style="font-size:14px;color:#000;">Good Governance Initiatives Title</label>
                                    </div>
                                    <div class="col-sm-10 form-group">
                                        <input type="text" class="form-control" name="nm" style="font-size:14px;" maxlength="150" value='<?php echo $row['gname'];?>'>
                                    </div>    
                                </div>
                                
                                <div class="row">
                                    <div class="form-group col-sm-2">
                                        <label class="label" for="name" style="font-size:14px;color:#000;">Description</label>
                                    </div>
                                    <div class="form-group col-sm-10">
                                        <textarea id="text_editor"  name="text_editor"><?php echo $row['gdesc'];?></textarea>
		                            </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2 form-group ">
                                        <label class="label" for="name" style="font-size:14px;color:#000;">Status</label>
                                    </div>
                                    <div class="col-sm-4 form-group ">
                                        <select class="form-control" name="st"  style="font-size:14px">
                                            <?  if($row['gstatus']=='A'){?>
                                                    <option value='A' selected>Active</option>
                                            <?  }else{?>
                                                    <option value='A'>Active</option>
                                            
                                            <?  }if($row['gstatus']=='D'){?>        
                                                    <option value='D' selected>Disable</option>
                                            <?  }else{?>
                                                    <option value='D'>Disable</option>
                                            <?  }?>
                                        </select>
                                    </div>
                                </div>
                               <!-- <div class="row">
                                    <div class="col-sm-10 form-group ">
                                        <label class="label" for="name" style="font-size:15px;color:#000;"><b>Files Upload</b></label>
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
                                </div>-->
                                <div class="row">
                    	            <div class="col-sm-12 form-group">
                    	                <center><button class="btn btn-danger py-3 px-5" onclick="pg_bk()">Cancel</button>
							            <input type="submit" name="submit" value="Submit" class="btn btn-primary py-3 px-5"></center>
						            </div>
						            <input type="hidden" name='gid' value="<?echo $gid;?>">
                                </div>                       
                            </form>
                        </div>
                    </div>
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

<?php
    /*if(($_REQUEST['typ'])=='0')
    {
        echo"<script>alert('Select Notification Type');</script>";
    }
    else */
    if(isset($_POST['submit']))
    {
        $nm=trim($_REQUEST['nm']);
        $nm=str_replace("'","''",$nm);
        $ndes=trim($_REQUEST['text_editor']);
        $nst=trim($_REQUEST['st']);
        $gd=trim($_REQUEST['gid']);
        
        $qry="update good_gov set gname='$nm',gdesc='$ndes',gstatus='$nst' where ggid=$gd";
        $res=mysqli_query($conn,$qry);
        
        /*for($i=0;$i<10;$i++)
        {
            if(($_FILES['f1']['size'][$i]>0) && ($_FILES['f1']['type'][$i] == "application/pdf"))
            {
                //if($_FILES['f1']['name'][$i]!="")
                    
                $ft=trim($_REQUEST['t1'][$i]);
                $temp='ggov/';
                $file = $_FILES['f1']['name'][$i];
                $ext = pathinfo($file, PATHINFO_EXTENSION);
                     
                $tmp=$_FILES['f1']['tmp_name'][$i];
                $temp=$temp.basename($_FILES['f1']['name'][$i]); //.".".$ext);
                   
                move_uploaded_file($tmp,$temp);
                $temp='';
                $tmp='';
                    
                $qry="insert into good_gov_file (ggid,fname) values(".$row['ggid'].",'$file')";
                echo $qry;
                $res=mysqli_query($conn,$qry);
            }
        }*/
        
        unset($_POST['submit']);
        echo"<script>window.location.href='good_gov_view.php';</script>";
    }    
    
?>