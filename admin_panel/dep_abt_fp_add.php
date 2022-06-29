<?php
    session_start();
    include "db_con.php";
    //$did=$_REQUEST['did'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Karnatak University | Department - Mission</title>
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
            	
        });
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
				<a class="navbar-brand" href="index.html" style="font-family:'Zen Kurenaido';font-size:18px;line-height:.8cm;color:#000">ಕರ್ನಾಟಕ ವಿಶ್ವವಿದ್ಯಾಲಯ, ಧಾರವಾಡ<br>Karnatak University, Dharwad</a>
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
            <h1 class="mb-2 bread" style="font-family:Exo;color:#fff;font-size:16px;padding:7px"><?php echo $_SESSION['dname'];?> - Future Plans</h1>
             
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
                               <form action="dep_abt_fp_add.php" method="post" enctype="multipart/form-data">
                                   	<div class="form-group">
                                   	    <label class="label" for="name" style="font-size:14px;color:#000">Department Name</label>
                                   	    <?php
                                   	        //$qry="select did,dname from dep_mas where did=".$_REQUEST['did'];
                                   	        $qry="select did,dname from dep_mas where did=".$_SESSION['did'];
                                   	        $res=mysqli_query($conn,$qry);
                                   	        $row=mysqli_fetch_array($res);
                                   	        
                                   	    ?>
            							<input class="form-control" name="dp" id="dp" style="font-size:14px" value='<?php echo $row['dname'];?>' readonly="true">
            						        
						            </div>
                                    <div class="form-group">
                                        <label class="label" for="name" style="font-size:14px;color:#000">Department Future Plans</label>
                                        <textarea id="text_editor"  name="text_editor"></textarea>
						            </div>
                                    
						           	<div class="form-group" style="padding-top:20px;text-align:center">
							            <center><button class="btn btn-danger py-3 px-5"><a href='dept_dashboard.php' style='color:#fff'>Cancel</a></button>
							            <input type="submit" name="submit" value="Submit" class="btn btn-primary py-3 px-5"></center>
						            </div>
						            <input type="text" name="tdd" value='<?php echo $row['did'];?>' style="visibility:hidden">
                               </form>
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
<script>
        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;
        
        for (i = 0; i < dropdown.length; i++) {
              dropdown[i].addEventListener("click", function() {
              this.classList.toggle("active");
              var dropdownContent = this.nextElementSibling;
              if (dropdownContent.style.display === "block") {
              dropdownContent.style.display = "none";
              } else {
              dropdownContent.style.display = "block";
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
        
        $dn=$_REQUEST['tdd'];
        $dbj=$_REQUEST['text_editor'];
        
        $qry="insert into dep_fp (did,fp_det) values('$dn','$dbj')";
        $res=mysqli_query($conn,$qry);
        /*$qry="select max(dapid) as fid from dep_adm";
        $res=mysqli_query($conn,$qry);
        $row=mysqli_fetch_array($res);
        for($i=0;$i<4;$i++)
        {
            if($_FILES['f1']['size'][$i]>0)
            {
                $temp='dept/adm/';
                $file = $_FILES['f1']['name'][$i];
                $ext = pathinfo($file, PATHINFO_EXTENSION);
                 
                $tmp=$_FILES['f1']['tmp_name'][$i];
                $temp=$temp.basename($_FILES['f1']['name'][$i]); //.".".$ext);
               
                move_uploaded_file($tmp,$temp);
                $temp='';
                $tmp='';
                
                $qry="insert into dep_adm_file (dapid,fname) values(".$row['fid'].",'$file')";
                $res=mysqli_query($conn,$qry);
            }
        }
        */
        
       // echo $qry;
        //echo "<script>window.location.href='dep_abt_bp.php?did=$dn';</script>";
        echo "<script>window.location.href='dept_dashboard.php';</script>";
    }
?>