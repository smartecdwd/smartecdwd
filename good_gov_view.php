<?php
    session_start();
    
    if(time() - $_SESSION['user_start'] > 600)
    {
       // session_destory();
        echo "<script>window.location.href='https://kud.ac.in/admin_panel';</script>";
    }
    
    if(isset($_SESSION['uid'])==false)
    {
        //session_destory();
        echo "<script>window.location.href='https://kud.ac.in/admin_panel';</script>";
    }
    
    include "db_con.php";
    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Karnatak University | Good Gorvernance </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Fredoka+One&family=Signika:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">
    
    
    
    <!--<link rel="stylesheet" href="css/style.css">-->
    
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="css/style.css">
    <!-- Bootstrap core JavaScript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    
    <script>
	    function add_noti()
	    {
	        window.location.href='noti_add.php';
	    }
	    
	    window.history.forward();
        function noBack() {
            window.history.forward();
        }
	</script>
  </head>
  <body>
	  <div class="py-2" style="background:#700B97">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
			    		
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-light ftco_navbar ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
	    	<img src="images/logo.png" style="width:5%">
				<a class="navbar-brand" href="index.html" style="font-family:'Zen Kurenaido';font-size:18px;line-height:.8cm;color:#000">ಕರ್ನಾಟಕ ವಿಶ್ವವಿದ್ಯಾಲಯ, ಧಾರವಾಡ<br>Karnatak University, Dharwad</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <!-- <p class="button-custom order-lg-last mb-0"><a href="appointment.html" class="btn btn-secondary py-2 px-3">Make An Appointment</a></p> -->
	      <div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="dashboard.php" class="nav-link pl-0" style="font-size:14px;;color:#000">Home</a></li>
					<li class="nav-item"><a href="index.php" class="nav-link" style="font-size:14px;;color:#000">Logout</a></li>
				</ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap" style="background:#3E065F;">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread" style="font-family:Exo;color:#fff;font-size:18px;padding:8px">Good Governance Initiatives </h1>
          </div>
        </div>
      </div>
    </section>
	
	<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
		<div class="container">
			<div class="row d-flex align-items-stretch no-gutters">
				<div class="col-md-12 p-3 p-md-3 order-md-last bg-light" style="border:1px solid #1eaaf1;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
			  
				<div class="container">
				    <br><br>
				    <form method="post" action="ggov_del.php">
				        <div class="table-responsive">
                            <table class="table table-bordered" width="100%" cellspacing="0" style="font-size:10pt">    
                                <thead>
                                    <tr>
                                        <th colspan='8' style='text-align:right;border-top:0'>
                                        <button type="submit" class="btn btn-light" name="sub" value="Delete" onClick="javscript:return confirm('Are you sure you want to delete?');"><img src='images/del3.png' style='width:25px'></button></th>
                                    </tr>   
                                    <tr>
                                        <th style="font-size:9pt">Slno</th>
                                        <th style="width:50%;font-size:9pt">Good Governance </th>
                                        <th style="font-size:9pt">Status</th>
                                        <th style="font-size:9pt">View</th>
                                        <th style="font-size:9pt">Edit</th>
                                        <th style="font-size:9pt">Delete</th>
                                    </tr>
                                <thead> 
                                <tfoot>
                                    <tr>
                                       <th style="font-size:9pt" class="no-sort">Slno</th>
                                        <th style="width:50%;font-size:9pt">Good Governance</th>
                                        <th style="font-size:9pt">Status</th>
                                        <th style="font-size:9pt">View</th>
                                        <th style="font-size:9pt">Edit</th>
                                        <th style="font-size:9pt">Delete</th>
                                    </tr>
                                </tfoot>
                            <tbody>
                            <?php
                               $qry="select * from good_gov order by ggid desc";
                                $res=mysqli_query($conn,$qry);
                                $cnt=1;
                                while($row=mysqli_fetch_array($res))
                                {
                                    echo "<tr>";
                                    echo "<td style='text-align:center'>".$cnt++."</td>";
                                    echo "<td style='font-size:12pt'>".$row['gname']."</td>";
                                    echo "<td style='text-align:center'>".$row['gstatus']."</td>";
                                    echo "<td style='text-align:center'><a href='ggov_disp.php?gid=".$row['ggid']."' ><img src='images/v2.jpg'> </a></td>";
                                    echo "<td style='text-align:center'><a href='ggov_edit.php?gid=".$row['ggid']."'><img src='images/ed4.png' style='width:20px'> </a></td>";?>
                                    <td style='text-align:center'>
                                            <input class='form-check-input' type='checkbox' name='ids[]' value='<?php echo $row['ggid']; ?>'>  </td>
                                <?php
                                    echo "</tr>";        
                                            
                                }
                               
                            ?>
                            <tbody>
                        </table>
                        </div>
                        </form>
                    </div>
                </div>
	</section>

		
    <!--<footer class="ftco-footer ftco-bg-dark " style="height:50px;bottom:0;width:100%;left:0;position:absolute;background-color:#232323">
            <p style="text-align:center;font-family:15px;color:#fff;padding:10px">Developed by: Smartec IT Solutions</p>		
    </footer>-->
    <!--<script src="js/jquery.min.js"></script>-->
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
    
    <script>
        $(document).ready(function() {
          $('#dataTable').DataTable({
             'columnDefs': [ {
            'targets': [0],
            'orderable': false, // orderable false
        }]
          });
        });
    </script>
   <script>
        $("#checkAl").click(function () {
        $('input:checkbox').not(this).prop('checked', this.checked);
        });
</script>
  </body>
</html>
