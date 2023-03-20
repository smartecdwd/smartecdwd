<?php
    session_start();
    include "db_con.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Karnatak University | Department - Details</title>
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
   <script>
	    function add_rec()
	    {
	        window.location.href='dep_add.php';
	    }
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
        td a:hover{
            color:#145DA0;
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
				<a class="navbar-brand" href="index.html" style="font-family:'Zen Kurenaido';font-size:18px;line-height:.8cm;color:#000">ಕರ್ನಾಟಕ ವಿಶ್ವವಿದ್ಯಾಲಯ, ಧಾರವಾಡ<br>Karnatak University, Dharwad</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <!-- <p class="button-custom order-lg-last mb-0"><a href="appointment.html" class="btn btn-secondary py-2 px-3">Make An Appointment</a></p> -->
	      <div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="dept_view.php" class="nav-link active" style="font-size:18px;color:#000">Home</a></li>
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
            <h1 class="mb-2 bread" style="font-family:Exo;color:#fff;font-size:16px;padding:7px"><?php echo $_SESSION['dname'];?></h1>
          </div>
        </div>
      </div>
    </section>
	
		<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
		<div class="container">
			<div class="row d-flex align-items-stretch no-gutters">
				<div class="col-md-9 p-3 p-md-3 order-md-last bg-light" style="border:1px solid #1eaaf1;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
				<div class="row" style="margin-top: 10px">
                    <div class="col-12">
                        <form method="post">
                            <div class="table-responsive">
                                <table id="grid" class="table table-bordered" style="font-size:11pt;color:#000;width:100%">
                                    <tr style="background-color:#9D84B7;color:#fff;text-align:center">
                                        <td style="width:10%">Slno</td>
                                        <td style="width:50%">Options</td>
                                        <td>Add</td>
                                        <td>View</td>
                                        <?php 
                                            if (isset($_REQUEST['opt']))
                                            {
                                                $var=$_REQUEST['opt'];
                                                if($var!="Faculty")
                                                    echo "<td>Edit</td>";
                                            }
                                            else
                                            {
                                                $var=$_SESSION['opt'];
                                                if($var!="Faculty")
                                                    echo "<td>Edit</td>";
                                            }
                                            
                                          
                                        ?>
                                       <!-- <td>Delete</td>-->
                                    </tr>
                                    <?php
                                        if(isset($_REQUEST['opt']) || isset($_SESSION['opt']))
                                        {
                                            if(isset($_REQUEST['opt']))
                                            {
                                                $_SESSION['opt']=$_REQUEST['opt'];
                                                $qry="select * from menu_opt where opt_name='".$_REQUEST['opt']."'";  
                                            }
                                            else
                                                    $qry="select * from menu_opt where opt_name='".$_SESSION['opt']."'";  
                                            $res=mysqli_query($conn,$qry);
                                            $cnt=1;
                                            while($row=mysqli_fetch_array($res))
                                            {
                                                echo "<tr>
                                                    <td style='text-align:center'>".$cnt++."</td>
                                                    <td>".$row['opt_sname']."</td>";
                                                    
                                                    if($row['para']=="-")
                                                    {
                                                        echo "<td style='text-align:center'><a href='".trim($row['afile'])."'><img src='images/add1.png'> </a></td>";
                                                        echo "<td style='text-align:center'><a href='".trim($row['vfile'])."'><img src='images/v2.jpg'> </a></td>";
                                                        
                                                        if($_SESSION['opt']!="Faculty")
                                                        {
                                                            echo "<td style='text-align:center'><a href='".trim($row['efile'])."'><img src='images/ed4.png' style='width:20px'> </a></td>";
                                                        }
                                                    }
                                                    else
                                                    {
                                                        echo "<td style='text-align:center'><a href='".trim($row['afile'])."?par=".$row['para']."'><img src='images/add1.png'> </a></td>";
                                                        echo "<td style='text-align:center'><a href='".trim($row['vfile'])."?par=".$row['para']."'><img src='images/v2.jpg'> </a></td>";
                                                        
                                                        if($_SESSION['opt']!="Faculty")
                                                        {
                                                            echo "<td style='text-align:center'><a href='".trim($row['efile'])."?par=".$row['para']."'><img src='images/ed4.png' style='width:20px'> </a></td>";
                                                        }
                                                    }
                                                    
                                                    //echo"<td style='text-align:center'><a href='".trim($row['dfile'])."'><img src='images/del3.png' style='width:20px'> </a></td>
                                                echo "</tr>";
                                            }
                                        }
                                    ?>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
               </div>
            <div class="col-md-3 d-flex align-items-stretch">
					<div class="sidebar-box ftco-animate">
					    <br>
					    <div class="vertical-menu" style="width:100%">
                              <a href="dept_view.php">Home</a>
                              <a href="dept_dashboard.php?opt=About">About</a>
                              <a href="dept_dashboard.php?opt=Academic">Academic</a>
                              <a href="dept_dashboard.php?opt=LMS">LMS</a>
                              <a href="dept_dashboard.php?opt=Infrastructure">Infrastructure</a>
                              <a href="dept_dashboard.php?opt=Faculty">Faculty</a>
                              <a href="dept_dashboard.php?opt=Research">Research</a>
                              <a href="dept_dashboard.php?opt=Activities">Activities</a>
                              <a href="dept_dashboard.php?opt=Achievements">Achievements</a>
                              <a href="dept_dashboard.php?opt=SLET / NET / JRF">SLET / NET / JRF</a>
                              <a href="dept_dashboard.php?opt=Alumni">Alumni</a>
                              <a href="dept_dashboard.php?opt=Gallery">Gallery</a>
                              <a href="dept_dashboard.php?opt=Contact Us">Contact Us</a>
                              <a href="dept_dashboard.php?opt=Student">Student Details</a>
                      
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
    <script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>  
    <script type="text/javascript" language="javascript">  
        $("#btn_save").live("click",function(){  
            var dn = $("#dn").val();  
            var dobj = CKEDITOR.instances['text_editor'].getData();
            //var dobj = $("#text_editor").val();  
      
           /* $.ajax({  
                type:"POST",  
                url:"add_rec.php",  
                data:"dname="+dn+"&dobj="+dobj,  
                success:function(data){  
                alert(data);  
                location.reload(); 
                }  
            });*/
            
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                enctype: 'multipart/form-data',
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function (data) {
                  alert(data);  
                  location.reload(); 
                }
            });
        }); 
    </script>
        
  </body>
</html>