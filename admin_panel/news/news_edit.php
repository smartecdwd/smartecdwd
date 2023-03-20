<?php
    session_start();
    include "db_con.php";
    if(isset($_REQUEST['aid']))
    {
        $aid=$_REQUEST['aid'];
        $dt="";$da="";$st="";
       
        $qry="select * from news where nwid=".$aid;
        $res=mysqli_query($conn,$qry);
        while($row=mysqli_fetch_array($res))
        {
            $dt=$row['ndate'];
            $da=$row['ndata'];
            $st=$row['status'];
            
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Karnatak University | News & Events </title>
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
	      <!-- <p class="button-custom order-lg-last mb-0"><a href="appointment.html" class="btn btn-secondary py-2 px-3">Make An Appointment</a></p> -->
	      <div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="news.php" class="nav-link pl-0" style="font-size:20px">Home</a></li>
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
            <h1 class="mb-2 bread" style="font-family:Exo;color:#fff;font-size:18px;padding:7px">News & Events</h1>
          </div>
        </div>
      </div>
    </section>
	
	<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
		<div class="container">
			<div class="row d-flex align-items-stretch no-gutters">
				<div class="col-md-12 p-3 p-md-3 order-md-last bg-light" style="border:1px solid #1eaaf1;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
			    
                <form action="news_edit.php" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <div class="col-sm-2">
                   	        <label class="label" for="name" style="font-size:14px;color:#000">Date</label>
                   	    </div>
                   	    <div class="col-sm-4">
						<input type="date" class="form-control" name="dt" id="dt" style="font-size:14px;width:50%" value='<?echo $dt;?>'>
						</div>
			        </div>
                    <div class="form-group row">
                        <div class="col-sm-2">
                   	        <label class="label" for="name" style="font-size:14px;color:#000">Description</label>
                   	    </div>
                   	    <div class="col-sm-10">
					    	<input class="form-control" name="da" id="da" style="font-size:14px" value='<?echo $da;?>'>
					    </div>
		            </div>
		            
                    <div class="form-group row">
                   	    <div class="col-sm-2">
                   	        <label class="label" for="name" style="font-size:14px;color:#000">Status </label>
                   	    </div>
                   	    <div class="col-sm-4">
						    <select class="form-control" name="st" id="st" style="font-size:14px;width:50%">
						        <?php
						        if($st=="Active")
						            echo "<option selected value='Active'>Active</option>";
						        else
						            echo "<option value='Active'>Active</option>";
						        
						        if($st=="Disable")
						            echo "<option selected value='Disable'>Disable</option>";
						        else
						            echo "<option value='Disable'>Disable</option>";
						      
						        if($st=="Block")
						            echo "<option selected value='Block'>Block</option>";
						        else
						            echo "<option value='Block'>Block</option>";
						  ?>
					    </select>
					  </div>
		            </div>
		            
                    <div class="row">
                        <div class="form-group col-sm-2">
                            <label class="label" for="name" style="font-size:14px;color:#000;">File Upload</label>
                        </div>
                   	    <div class="col-sm-10 form-group">
                            <input type="file" class="form-control" name="f1"  style="font-size:14px" accept="image/jpg,image/jpeg,image/png">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-7 form-group ">
                            <ul style="list-style:none;color:#000">
                            <?php 
                                $qry="select * from news_file where nwid=".$aid;
                                $res=mysqli_query($conn,$qry);
                                while($row=mysqli_fetch_array($res))
                                {
                                    $_SESSION['nwsid']=$aid;
                                ?>
                                    <li>
                                        <a href="https://kud.ac.in/admin_panel/news/upload/<?echo $row['ftitle'];?>" target="_blank"><?echo $row['ftitle'];?></a>
                                        <a href='news_file.php?fid=<?$row['nwfid'] ; ?>'><img src="https://kud.ac.in/admin_panel/images/x2.png" style="padding:10px;float:right"></a></li>
                            
                            <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="col-sm-12 form-group">
							<center><input type="submit" name="submit" value="Submit" class="btn btn-primary py-3 px-5"></center>
						</div>
						<input type="text" class="form-control" name="nid"  value='<?php echo $aid; ?>' style="visibility:hidden">
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

    
  </body>
</html>
<?php
    if(isset($_POST['submit']))
    {
        $dt=$_REQUEST['dt'];
        $dt=date("Y-m-d", strtotime($dt));
        $da=$_REQUEST['da'];
        $st=$_REQUEST['st'];
        $ft=$_REQUEST['ft'];
        $id=$_REQUEST['nid'];
        
        $qry="update news set ndate='$dt',ndata='$da',status='$st' where nwid=".$id;
        $res=mysqli_query($conn,$qry);
        $allowed_types = array ( 'image/jpg', 'image/jpeg', 'image/png' );
        if($_FILES['f1']['size']>0 && in_array($_FILES['f1']['type'],$allowed_types))
        {
            //$doc = $_FILES['f1']['tmp_name'][0]; 
            //$docContent = fopen($doc, "rb");
           /* $filePointer = fopen($_FILES['f1']['tmp_name'], 'r');
            $fileData = fread($filePointer, filesize($_FILES['f1']['tmp_name']));
            $fileData = addslashes($fileData);   */
            
            $temp='upload/';
            $file = $_FILES['f1']['name'];
            $ext = pathinfo($file, PATHINFO_EXTENSION);
             
            $tmp=$_FILES['f1']['tmp_name'];
            $temp=$temp.basename($_FILES['f1']['name']); //.".".$ext);
               
            move_uploaded_file($tmp,$temp);
            $qry="insert into news_file (nwid,ftitle) values(".$id.",'$file')";
            $res=mysqli_query($conn,$qry);
        }
        
        echo "<script>window.location.href='news.php';</script>";
    }
?>