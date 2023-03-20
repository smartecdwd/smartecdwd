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
        
        
    </style>
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
					<li class="nav-item active"><a href="dashboard.php" class="nav-link active" style="font-size:18px;color:#000">Home</a></li>
					<li class="nav-item"><a href="index.php" class="nav-link" style="font-size:18px;;color:#000">Logout</a></li>
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
            <h1 class="mb-2 bread" style="font-family:Exo;color:#fff;font-size:24px;padding:20px">Department Overiews</h1>
          </div>
        </div>
      </div>
    </section>
	
		<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
		<div class="container">
			<div class="row d-flex align-items-stretch no-gutters">
				<div class="col-md-9 p-3 p-md-3 order-md-last bg-light" style="border:1px solid #1eaaf1;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
			    <div class="col-12">
                    <button id="btnAdd" type="button" class="btn btn-success pull-right" onclick="add_rec()">Add New Record</button>
                </div>
                        
				<div class="row" style="margin-top: 10px">
                    <div class="col-12">
                        <table id="grid" class="table table-bordered" style="font-size:11pt;color:#000;width:100%">
                            <tr style="background-color:#1eaaf1;color:#fff;text-align:center">
                                <td>Slno</td>
                                <td style="width:50%">Department Name </td>
                                <td>View</td>
                                <td>Edit</td>
                                <td>Delete</td>
                            </tr>
                            <?php
                                if(!isset($_SESSION['branch']))
                                    $_SESSION['branch']='Arts';
                                    
                                if(isset($_SESSION['branch']))
                                {
                                    $qry="select * from dep_mas where branch='". $_SESSION['branch']."' order by did";
                                    $res=mysqli_query($conn,$qry);
                                    $cnt=1;
                                    while($row=mysqli_fetch_array($res))
                                    {
                                        echo "<tr>";
                                        echo "<td style='text-align:center'>".$cnt++."</td>";
                                        echo "<td>".$row['dname']."</td>";
                                        echo "<td style='text-align:center'><a href='dep_view.php?did=".$row['did']."&dp='dpt'><img src='images/v2.jpg'> </a></td>";
                                        echo "<td style='text-align:center'><a href='dep_edit.php?did=".$row['did']."'><img src='images/ed4.png' style='width:20px'> </a></td>";
                                        echo "<td style='text-align:center'><a href='dep_del.php?did=".$row['did']."'><img src='images/del3.png' style='width:20px'> </a></td>";
                                    }
                                    
                                }
                            ?>
                        </table>
                        <form>
                            <input type="text" name="t1" id="t1" value='<?php echo $_SESSION['branch'];?>' style="visibility:hidden">
                        </form>
                    </div>
                </div>
               </div>
            <div class="col-md-3 d-flex align-items-stretch">
					<div class="sidebar-box ftco-animate">
					    <br>
					    <div class="vertical-menu" style="width:100%">
                              <a href="dept_home.php">Home</a>
                              <?php
                                if($_SESSION["branch"]=="Arts")
                                {
                                    echo "<a href='branch_sel.php?br=Arts' class='active' style='background-color:#6495ED'>Arts</a>";
                                }
                                else
                                    echo "<a href='branch_sel.php?br=Arts'>Arts</a>";
                                    
                                if($_SESSION["branch"]=="Science")
                                    echo "<a href='branch_sel.php?br=Science' class='active' style='background-color:#6495ED'>Science</a>";
                                else
                                    echo "<a href='branch_sel.php?br=Science'>Science</a>";
                                    
                                if($_SESSION["branch"]=="Social Science")
                                    echo "<a href='branch_sel.php?br=Social Science' class='active' style='background-color:#6495ED'>Social Science</a>";
                                else
                                    echo "<a href='branch_sel.php?br=Social Science'>Social Science</a>";
                                    
                                if($_SESSION["branch"]=="Commerce")    
                                    echo  "<a href='branch_sel.php?br=Commerce' class='active' style='background-color:#6495ED'>Commerce</a>";
                                else
                                    echo "<a href='branch_sel.php?br=Commerce'>Commerce</a>";
                                
                                if($_SESSION["branch"]=="Law") 
                                    echo "<a href='branch_sel.php?br=Law' class='active' style='background-color:#6495ED'>Law</a>";
                                else
                                    echo "<a href='branch_sel.php?br=Law'>Law</a>";
                                if($_SESSION["branch"]=="Education") 
                                    echo "<a href='branch_sel.php?br=Education' class='active' style='background-color:#6495ED'>Education</a>";
                                else
                                    echo "<a href='branch_sel.php?br=Education'>Education</a>";
                                if($_SESSION["branch"]=="Management") 
                                    echo "<a href='branch_sel.php?br=Management' class='active' style='background-color:#6495ED'>Management</a>";
                                else
                                    echo "<a href='branch_sel.php?br=Management'>Management</a>";
                                if($_SESSION["branch"]=="Diploma") 
                                    echo "<a href='branch_sel.php?br=Diploma' class='active' style='background-color:#6495ED'>Diploma</a>";
                                else
                                    echo "<a href='branch_sel.php?br=Diploma'>Diploma</a>";
                              ?>
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