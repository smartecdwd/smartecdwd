<?php
    session_start();
    include "db_con.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Karnatak University | Department - Activities</title>
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
		

  </head>
  <body>
	  <div class="py-2 bg-primary">
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
					<li class="nav-item active"><a href="dept_det.php" class="nav-link" style="font-size:20px">Home</a></li>
					<li class="nav-item"><a href="index.php" class="nav-link" style="font-size:20px">Logout</a></li>
				</ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap" style="background-color:#1eaaf1;height:80px">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread" style="font-family:Exo;color:#fff;font-size:24px;padding:20px"><?echo $_SESSION['branch'];?> - Activities</h1>
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
                            <tr style="background-color:#1eaaf1;color:#fff;text-align:center">
						        <td>Slno</td>
                                <td style="width:50%">Department Name </td>
                                <td>Add New</td>
                                <td>View</td>
                                <td>Edit</td>
                                <td>Delete</td>
						    </tr>
					        <?php
                                $qry="select distinct dname,did from vw_fac_act where branch='". $_SESSION['branch']."' order by dname";
                                $res=mysqli_query($conn,$qry);
                                $cnt=1;
                                while($row=mysqli_fetch_array($res))
                                {
                                    echo "<tr>";
                                    echo "<td style='text-align:center'>".$cnt++."</td>";
                                    echo "<td>".$row['dname']."</td>";
                                    echo "<td style='text-align:center'><a href='fac_act_add.php?did=".$row['did']."'><img src='images/add1.png'> </a></td>";
                                    echo "<td style='text-align:center'><a href='fac_act_view.php?did=".$row['faid']."'><img src='images/v2.jpg'> </a></td>";
                                    echo "<td style='text-align:center'><a href='fac_act_edit.php?did=".$row['faid']."'><img src='images/ed4.png' style='width:20px'> </a></td>";
                                    echo "<td style='text-align:center'><a href='fac_act_del.php?did=".$row['faid']."'><img src='images/del3.png' style='width:20px'> </a></td>";
                                }
                            ?>
					    </table>
					
				</div>
				</div>
				</div>
				<div class="col-md-3 d-flex align-items-stretch" style="height:700px">
					    <div class="sidebar-box ftco-animate">
					        <br>
					        <div class="sidenav">
                              <button class="dropdown-btn">About 
                                <i class="fa fa-caret-down"></i>
                              </button>
                              <div class="dropdown-container">
                                    <a href='dept_det.php?did=<?php echo $did; ?>'>History & Development</a>
                                    <a href='dep_abt_vis.php?did=<?php echo $did; ?>'>Vision</a>
                                    <a href='dep_abt_mis.php?did=<?php echo $did; ?>'>Mission</a>
                                    <a href='dep_abt_bp.php?did=<?php echo $did; ?>'>Best Practices</a>
                                    <a href='dep_fac.php?did=<?php echo $did; ?>'>Facilities</a>
                                    <a href='dep_med.php?did=<?php echo $did; ?>'>Gold Medals</a>
                                    <a href='dep_rank.php?did=<?php echo $did; ?>'>Rank Holders</a>
                                    <a href='dep_abt_fp.php?did=<?php echo $did; ?>'>Future Plan</a>
                              </div>
                             
                               <button class="dropdown-btn">Academic 
                                <i class="fa fa-caret-down"></i>
                              </button>
                              <div class="dropdown-container">
                                    <a href='dep_prg_off.php?did=<?php echo $did; ?>'>Programmes Offered</a>
                                    <a href='dep_adm.php?did=<?php echo $did; ?>'>Admission Process</a>
                                    <a href='dep_cou.php?did=<?php echo $did; ?>'>Course Structure</a>
                                    <a href='dep_fee.php?did=<?php echo $did; ?>'>Fee Structure</a>
                                    <a href='dep_app.php?did=<?php echo $did; ?>'>How to Apply</a>
                                    <a href='dep_syll.php?did=<?php echo $did; ?>'>Syllabus</a>
                                    <a href='dep_tt.php?did=<?php echo $did; ?>'>Time Table</a>
                                    <a href='dep_prg_out.php?did=<?php echo $did; ?>'>Programme Specific Outcomes</a>
                              </div>
                              
                              <button class="dropdown-btn">Infrastructure 
                                <i class="fa fa-caret-down"></i>
                              </button>
                              <div class="dropdown-container">
                                    <a href='dep_class.php?did=<?php echo $did; ?>'>Class Room / Faculty Cabin</a>
                              </div>
                              <button class="dropdown-btn">Faculty 
                                <i class="fa fa-caret-down"></i>
                              </button>
                              <div class="dropdown-container">
                                <a href='faculty.php?did=<?php echo $did;?>'>Faculty Details</a>
                              </div>
					        <button class="dropdown-btn">Research
                                <i class="fa fa-caret-down"></i>
                              </button>
                              <div class="dropdown-container">
                                <a href='fac_research.php?did=<?php echo $did;?>'>Research Details</a>
                              </div>
                              <button class="dropdown-btn">Activities
                                <i class="fa fa-caret-down"></i>
                              </button>
                              <div class="dropdown-container">
                                <a href='fac_act.php?did=<?php echo $did;?>'>Activities Details</a>
                              </div>
                              <button class="dropdown-btn">Achievements
                                <i class="fa fa-caret-down"></i>
                              </button>
                              <div class="dropdown-container">
                                <a href='fac_ach.php?did=<?php echo $did;?>'>Achievements Details</a>
                              </div>
                              <button class="dropdown-btn">SLET / NET / JRF
                                <i class="fa fa-caret-down"></i>
                              </button>
                              <div class="dropdown-container">
                                <a href='dep_qstd.php?did=<?php echo $did;?>'>Qualified Students</a>
                              </div>
                              <button class="dropdown-btn">Alumni
                                <i class="fa fa-caret-down"></i>
                              </button>
                              <div class="dropdown-container">
                                <a href='dep_alm.php?did=<?php echo $did;?>'>Alumni Details</a>
                              
                              </div>
                              <button class="dropdown-btn">Gallery
                                <i class="fa fa-caret-down"></i>
                              </button>
                              <div class="dropdown-container">
                                <a href='dep_gal.php?did=<?php echo $did;?>'>Photo Uploaded</a>
                              </div>
                              <button class="dropdown-btn">Contact Us 
                                <i class="fa fa-caret-down"></i>
                              </button>
                              <div class="dropdown-container">
                                <a href='dep_con.php?did=<?php echo $did;?>'>Contact Us</a>
                              </div>
                            </div>
					    </div>
			        </div>
				
			</div>
		</div>
	</section>

				<!--	<form action="fac_research.php" method="post">
						<div class="form-group">
						     <label class="label" for="name" style="font-size:14px;color:#000">Select Department</label>
						    <select class="form-control" name="dp" id="dp" style="font-size:14px;color:#000">
						        <option>(Select Department)</option>
						         <?php
						           /* $qry="select * from dep_mas order by dname";
						            $res=mysqli_query($conn,$qry);
						            
						            while($row=mysqli_fetch_array($res))
						            {
						                echo "<option value='".$row['did']."'>".$row['dname']."</option>";
						            }*/
						        ?>
						    </select>
						</div>
						<div class="form-group">
						     <label class="label" for="name" style="font-size:14px;color:#000">Select Faculty</label>
							<select class="form-control" name="fac" id="fac" style="font-size:14px;">
						        <option>(Select Faculty)</option>
						    </select>
						</div>
						<div class="form-group">
						     <label class="label" for="name" style="font-size:14px;color:#000">Research Title</label>
							<input type="text" name="tit" class="form-control" style="font-size:14px;">
						</div>
						<div class="form-group">
						     <label class="label" for="name" style="font-size:14px;color:#000">Funding Agency</label>
							<input type="text" name="fdag" class="form-control"style="font-size:14px">
						</div>
						<div class="form-group">
						     <label class="label" for="name" style="font-size:14px;color:#000">Co-Investigator</label>
							<input type="text" name="coinv" class="form-control" style="font-size:14px;">
						</div>
						<div class="form-group">
						     <label class="label" for="name" style="font-size:14px;color:#000">Amount</label>
							<input type="text" name="amt" class="form-control" style="font-size:14px">
						</div>
					   	<div class="form-group">
					   	    <label class="label" for="name" style="font-size:14px;color:#000">Status of Research</label>
							<select class="form-control" name="rst" style="font-size:14px;">
						        <option>(Select Status)</option>
						        <option>Completed</option>
						        <option>In Progress</option>
						        <option>Yet to Start</option>
						    </select>
						</div>
						<div class="form-group" style="padding-top:20px;text-align:center">
							<input type="submit" name="submit" value="Submit" class="btn btn-primary py-3 px-5">
						</div>
					</form>-->
				<!--</div>
				
				<div class="col-md-6 d-flex align-items-stretch">
					<div class="sidebar-box ftco-animate">	
					<br>
					    <table class="table table-striped table-bordered" width="100%" id="dtBasicExample">
						    <tr style="background-color:#1eaaf1;color:#fff;">
						        <th style="text-align:center;font-style:normal;width:25%">Department</th>
						        <th style="text-align:center;font-style:normal:width:25%">Faculty Name</th>
						        <th style="text-align:center;font-style:normal:width:25%">Research</th>
						        <th colspan="2" style="text-align:center;font-style:normal;width:25%"></th>
						    </tr>
					       
					    </table>
					</div>
				</div>
				
			</div>
		</div>
	</section>-->

		
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

    <script>
        $(document).ready(function(){
            $("#dp").change(function(){
            var did = $(this).val();
             $("#fac").empty();
            $.ajax({
                url: 'get_fac.php',
                type: 'post',
                data: {did:did},
                dataType: 'json',
                success:function(response){
                    var len = response.length;
                
                    $("#fac").empty();
                    for( var i = 0; i<len; i++){
                        var id = response[i]['fid'];
                        var name = response[i]['fname'];
                        $("#fac").append("<option value='"+id+"'>"+name+"</option>");
    
                    }
                }
            });
        });
    
        });
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
