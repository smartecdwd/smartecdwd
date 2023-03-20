<?php
    session_start();
    include "db_con.php";
    
    
    if(isset($_SESSION['uid'])==false)
    {
        echo "<script>window.location.href='https://kud.ac.in/admin_panel';</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Karnatak University | Administrator - Details</title>
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
    
    <link rel="stylesheet" href="https://kud.ac.in/admin_panel/css/vstyle1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
   
    <script>
	    function br_sel(val)
	    {
	        //alert(val);
	        //document.getElementById("t1").value=val;
	        localStorage.setItem("branch", val);
	    }
	    function br_getData()
	    {
	        var val= localStorage.getItem("branch");

            if (typeof(val) !== "undefined") 
            {    
                $('#t1').val(value);
            }
	    }
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
	    	<img src="https://kud.ac.in/admin_panel/images/logo.png" style="width:5%">
				<a class="navbar-brand" href="index.html" style="font-family:'Zen Kurenaido';font-size:18px;line-height:.8cm;color:#000">ಕರ್ನಾಟಕ ವಿಶ್ವವಿದ್ಯಾಲಯ, ಧಾರವಾಡ<br>Karnatak University, Dharwad</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <!-- <p class="button-custom order-lg-last mb-0"><a href="appointment.html" class="btn btn-secondary py-2 px-3">Make An Appointment</a></p> -->
	      <div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="https://kud.ac.in/admin_panel/dashboard.php" class="nav-link active" style="font-size:18px;color:#000">Home</a></li>
					<li class="nav-item"><a href="https://kud.ac.in/admin_panel/index.php" class="nav-link" style="font-size:18px;;color:#000">Logout</a></li>
				</ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap">
      
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread" style="font-family:Exo;color:#fff;font-size:20px;padding:7px">Administrator Details</h1>
          </div>
        </div>
      </div>
    </section>
	
		<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
		<div class="container">
			<div class="row d-flex align-items-stretch no-gutters">
				<div class="col-md-12 p-3 p-md-3 order-md-last bg-light" style="border:1px solid #1eaaf1;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
			    <!--<div class="col-12">
                    <button id="btnAdd" type="button" class="btn btn-success pull-right" onclick="add_rec()">Add New Record</button>
                </div>-->
                        
				<div class="row" style="margin-top: 10px">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table id="grid" class="table table-bordered" style="font-size:11pt;color:#000;width:100%">
                                <tr style="background-color:#9D84B7;color:#fff;text-align:center">
                                    <td>Slno</td>
                                    <td style="width:50%">Administrator </td>
                                    <td>Add New</td>
                                    <td>View</td>
                                    <td>Edit</td>
                                    <td>Delete</td>
                                </tr>
                                <tr>
                                    <td style='text-align:center'>1</td>
                                    <td>Chancellor</td>
                                    <td style='text-align:center'><a href='chan_add.php?did=ch'><img src='https://kud.ac.in/admin_panel/images/add1.png'></a></td>
                                    <td style='text-align:center'><a href='chan_view.php?did=ch'><img src='https://kud.ac.in/admin_panel/images/v2.jpg'> </a></td>
                                    <td style='text-align:center'><a href='chan_edit.php?did=ch'><img src='https://kud.ac.in/admin_panel/images/ed4.png' style='width:20px'></a></td>
                                    <td style='text-align:center'><a href='chan_del.php?did=ch'><img src='https://kud.ac.in/admin_panel/images/del3.png' style='width:20px'></a></td>
                                </tr>
                                <tr>
                                    <td style='text-align:center'>2</td>
                                    <td>Pro Chancellor</td>
                                    <td style='text-align:center'><a href='chan_add.php?did=pc'><img src='https://kud.ac.in/admin_panel/images/add1.png'></a></td>
                                    <td style='text-align:center'><a href='chan_view.php?did=pc'><img src='https://kud.ac.in/admin_panel/images/v2.jpg'> </a></td>
                                    <td style='text-align:center'><a href='chan_edit.php?did=pc'><img src='https://kud.ac.in/admin_panel/images/ed4.png' style='width:20px'></a></td>
                                    <td style='text-align:center'><a href='chan_del.php?did=pc'><img src='https://kud.ac.in/admin_panel/images/del3.png' style='width:20px'></a></td>
                                </tr>
                                <tr>
                                    <td style='text-align:center'>3</td>
                                    <td>Vice Chancellor</td>
                                    <td style='text-align:center'><a href='chan_add.php?did=vc'><img src='https://kud.ac.in/admin_panel/images/add1.png'></a></td>
                                    <td style='text-align:center'><a href='chan_view.php?did=vc'><img src='https://kud.ac.in/admin_panel/images/v2.jpg'> </a></td>
                                    <td style='text-align:center'><a href='chan_edit.php?did=vc'><img src='https://kud.ac.in/admin_panel/images/ed4.png' style='width:20px'></a></td>
                                    <td style='text-align:center'><a href='chan_del.php?did=vc'><img src='https://kud.ac.in/admin_panel/images/del3.png' style='width:20px'></a></td>
                                </tr>
                                <tr>
                                    <td style='text-align:center'>4</td>
                                    <td>Registrar</td>
                                    <td style='text-align:center'><a href='chan_add.php?did=rg'><img src='https://kud.ac.in/admin_panel/images/add1.png'></a></td>
                                    <td style='text-align:center'><a href='chan_view.php?did=rg'><img src='https://kud.ac.in/admin_panel/images/v2.jpg'> </a></td>
                                    <td style='text-align:center'><a href='chan_edit.php?did=rg'><img src='https://kud.ac.in/admin_panel/images/ed4.png' style='width:20px'></a></td>
                                    <td style='text-align:center'><a href='chan_del.php?did=rg'><img src='https://kud.ac.in/admin_panel/images/del3.png' style='width:20px'></a></td>
                                </tr>
                                <tr>
                                    <td style='text-align:center'>5</td>
                                    <td>Registrar (Evaluation)</td>
                                    <td style='text-align:center'><a href='chan_add.php?did=re'><img src='https://kud.ac.in/admin_panel/images/add1.png'></a></td>
                                    <td style='text-align:center'><a href='chan_view.php?did=re'><img src='https://kud.ac.in/admin_panel/images/v2.jpg'> </a></td>
                                    <td style='text-align:center'><a href='chan_edit.php?did=re'><img src='https://kud.ac.in/admin_panel/images/ed4.png' style='width:20px'></a></td>
                                    <td style='text-align:center'><a href='chan_del.php?did=re'><img src='https://kud.ac.in/admin_panel/images/del3.png' style='width:20px'></a></td>
                                </tr>
                                <tr>
                                    <td style='text-align:center'>6</td>
                                    <td>Finance Officer</td>
                                    <td style='text-align:center'><a href='chan_add.php?did=fo'><img src='https://kud.ac.in/admin_panel/images/add1.png'></a></td>
                                    <td style='text-align:center'><a href='chan_view.php?did=fo'><img src='https://kud.ac.in/admin_panel/images/v2.jpg'> </a></td>
                                    <td style='text-align:center'><a href='chan_edit.php?did=fo'><img src='https://kud.ac.in/admin_panel/images/ed4.png' style='width:20px'></a></td>
                                    <td style='text-align:center'><a href='chan_del.php?did=fo'><img src='https://kud.ac.in/admin_panel/images/del3.png' style='width:20px'></a></td>
                                </tr>
                                <tr>
                                    <td style='text-align:center'>7</td>
                                    <td>Syndicate Members</td>
                                    <td style='text-align:center'><a href='sy_add.php?did=sy'><img src='https://kud.ac.in/admin_panel/images/add1.png'></a></td>
                                    <td style='text-align:center'><a href='sy_view.php?did=sy'><img src='https://kud.ac.in/admin_panel/images/v2.jpg'> </a></td>
                                    <td style='text-align:center'><!--<a href='sy_edit.php?did=sy'><img src='https://kud.ac.in/admin_panel/images/ed4.png' style='width:20px'></a>--></td>
                                    <td style='text-align:center'><!--<a href='sy_del.php?did=sy'><img src='https://kud.ac.in/admin_panel/images/del3.png' style='width:20px'></a>--></td>
                                </tr>
                                <tr>
                                    <td style='text-align:center'>8</td>
                                    <td>Academic Members</td>
                                    <td style='text-align:center'><a href='sy_add.php?did=ac'><img src='https://kud.ac.in/admin_panel/images/add1.png'></a></td>
                                    <td style='text-align:center'><a href='sy_view.php?did=ac'><img src='https://kud.ac.in/admin_panel/images/v2.jpg'> </a></td>
                                    <td style='text-align:center'><!--<a href='sy_edit.php?did=ac'><img src='https://kud.ac.in/admin_panel/images/ed4.png' style='width:20px'></a>--></td>
                                    <td style='text-align:center'><!--<a href='sy_del.php?did=ac'><img src='https://kud.ac.in/admin_panel/images/del3.png' style='width:20px'></a>--></td>
                                </tr>   
                                <tr>
                                    <td style='text-align:center'>9</td>
                                    <td>Finance Committee</td>
                                    <td style='text-align:center'><a href='sy_add.php?did=fc'><img src='https://kud.ac.in/admin_panel/images/add1.png'></a></td>
                                    <td style='text-align:center'><a href='sy_view.php?did=fc'><img src='https://kud.ac.in/admin_panel/images/v2.jpg'> </a></td>
                                    <td style='text-align:center'><!--<a href='sy_edit.php?did=fc'><img src='https://kud.ac.in/admin_panel/images/ed4.png' style='width:20px'></a>--></td>
                                    <td style='text-align:center'><!--<a href='sy_del.php?did=fc'><img src='https://kud.ac.in/admin_panel/images/del3.png' style='width:20px'></a>--></td>
                                </tr> 
                                <tr>
                                    <td style='text-align:center'>10</td>
                                    <td>Deans of Faculties</td>
                                    <td style='text-align:center'><a href='sy_add.php?did=df'><img src='https://kud.ac.in/admin_panel/images/add1.png'></a></td>
                                    <td style='text-align:center'><a href='sy_view.php?did=df'><img src='https://kud.ac.in/admin_panel/images/v2.jpg'> </a></td>
                                    <td style='text-align:center'><!--<a href='sy_edit.php?did=df'><img src='https://kud.ac.in/admin_panel/images/ed4.png' style='width:20px'></a>--></td>
                                    <td style='text-align:center'><!--<a href='sy_del.php?did=df'><img src='https://kud.ac.in/admin_panel/images/del3.png' style='width:20px'></a>--></td>
                                </tr>   
                                <tr>
                                    <td style='text-align:center'>11</td>
                                    <td>Syndicate Proceedings</td>
                                    <td style='text-align:center'><a href='sy_pro_add.php?did=df'><img src='https://kud.ac.in/admin_panel/images/add1.png'></a></td>
                                    <td style='text-align:center'><a href='sy_pro_view.php?did=df'><img src='https://kud.ac.in/admin_panel/images/v2.jpg'> </a></td>
                                    <td style='text-align:center'><!--<a href='sy_pro_edit.php?did=df'><img src='https://kud.ac.in/admin_panel/images/ed4.png' style='width:20px'></a>--></td>
                                    <td style='text-align:center'><!--<a href='sy_del.php?did=df'><img src='https://kud.ac.in/admin_panel/images/del3.png' style='width:20px'></a>--></td>
                                </tr>   
                                <tr>
                                    <td style='text-align:center'>12</td>
                                    <td>Academic Proceedings</td>
                                    <td style='text-align:center'><a href='aca_pro_add.php?did=df'><img src='https://kud.ac.in/admin_panel/images/add1.png'></a></td>
                                    <td style='text-align:center'><a href='aca_pro_view.php?did=df'><img src='https://kud.ac.in/admin_panel/images/v2.jpg'> </a></td>
                                    <td style='text-align:center'><!--<a href='sy_pro_edit.php?did=df'><img src='https://kud.ac.in/admin_panel/images/ed4.png' style='width:20px'></a>--></td>
                                    <td style='text-align:center'><!--<a href='sy_del.php?did=df'><img src='https://kud.ac.in/admin_panel/images/del3.png' style='width:20px'></a>--></td>
                                </tr>   
                            </table>
                        </div>
                    </div>
                </div>
               </div>
               <!-- <div class="col-md-3 d-flex align-items-stretch">
    			    <div class="sidebar-box ftco-animate" style="height:600px">
    			    </div>
    			</div>-->
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
    <script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>  
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

