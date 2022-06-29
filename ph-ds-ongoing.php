<?php
session_start();
error_reporting(0);
include 'branch_session.php';
require('db_con.php');
$_SESSION['branch'];

	
?>


<?php include 'dep-header.php'; ?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong|Akaya+Telivigala|Alice|Average|Andada Pro|Enriqueta">
<link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Fredoka+One&family=Roboto+Slab&family=Signika:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/dep_mytable.css">
<link rel="stylesheet" href="css/css/dvstyle.css">
<style>
    h5{font-family:Alice;color:#0074B7;text-align:center;font-size:22px;font-weight:bold;}
	 p{font-family:Average;font-size:17px;color:#000;margin:10px;;text-align:justify}
    h6{font-family:Enriqueta;text-align:center;font-size:16px}
</style>

<!--<div class="page_head">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1 class="d-block">Karnatak University Dharwad</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Departments</li>
			<?php 
				$qry="select * from dep_mas where did='". $_SESSION['branch']."'";
				$res=mysqli_query($conn,$qry);
				while($row = mysqli_fetch_assoc($res))
				{
				$branch=$row['branch'];
				//echo $branch
				?>
			
            <li class="breadcrumb-item active" aria-current="page"><?php echo $branch; ?></li>
			<?php  
				}
				
				?>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>
-->


<div class="inner_page">
  <div class="container">
    <div class="row border_around p-3 text-justify">
      
      <div class="col-lg-12">
                        <?php
							 		$_SESSION['branch'];
							 	 	$qry="select * from dep_mas where did='". $_SESSION['branch']."'";
                                    $res=mysqli_query($conn,$qry);
                                    
                                    while($row=mysqli_fetch_assoc($res))
									{
									
									$nid=$row['did'];
									}
							 
							 
						
                                //$nid=$_REQUEST['nid'];
                                $qry="select * from vw_dep_file where did=".$nid." ";
                                $res=mysqli_query($conn,$qry);
                               $row=mysqli_fetch_assoc($res);
                               // while($row==mysqli_fetch_assoc($res))
                                {
                               
                                ?>
								
							
                               <h2 class="title_head" style="font-family:Domine; font-weight:600; padding-top:30px;"><?php echo $row['dname']; ?> &nbsp;<i class="fa fa-caret-right"></i></h2>
                              <?php 
		                        }
		                      
		   
           						?>





<section class="section1">
  <div class="container">
    <!-- Tab panes -->
    <div class="tab-content clearfix">
        <div id="home" class="container tab-pane active"><br>
            <div class="row">
                <div class="col-sm-3" style="background-color:#fff;border:1px solid #005b96;">
	                <h5 style="text-align:center;color:#145DA0;height:50px;padding:20px;font-size:17px;border-bottom:2px solid #145DA0;font-family:Alice"><b>DEPARTMENTS</b></h5>
                        <br>

                    <div class="vertical-menu" style="width:100%">
                        <a href="arts.php">Faculty of Arts</a>
                        <a href="science.php">Faculty of Science & Technology</a>
                        <a href="social-science.php">Faculty of Social Science</a>
                        <a href="commerce.php">Faculty of Commerce</a>
                        <a href="law.php">Faculty of Law</a>
                        <a href="education.php">Faculty of Education</a>
                        <a href="management.php">Faculty of Management</a>
                        <a href="diploma.php">PG Diploma</a>
                    </div>
                </div>
                <br>
                <div class="col-sm-9">
                    <h5>Ph.D. ONGOING </h5>
                     <?php
                                //$nid=$_REQUEST['nid'];
                                $qry="select * from vw_fac_rea where did=".$nid." and rea_typ like '%Ongoing%'";
                                $res=mysqli_query($conn,$qry);
                                $cnt=1;
                                $fid="";
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    $fid=$row['frid'];
                                    echo "<p>".$row['rea_det']."</p>";
                                    
                                }
							?>
							    <br>
                                <table class="table table-bordered " id="customers" style="width:100%;background-color:#eee">
                            <?php
                                $qry="select * from vw_dep_file where did=".$nid."";
                                $res=mysqli_query($conn,$qry);
                                while($row=mysqli_fetch_assoc($res))
                                {
		                           // echo "<tr><td><a href='https://www.kud.ac.in/admin_panel/dept/branch/". $row['fname']."'>". $row['fname'] ."</a></td></tr>";
		                        //<!-- <iframe width="100%" height="500" src="https://smartechd.online/kud/admin_panel/dept/branch/"//></iframe> -->
                                }
                            ?>
                                </table>
                        </div>
                    </div>
                </div>
                
	
	
	
	<div class="clearfix"></div>
</div>      
                                                                                                                                                                   
</div>
</div>
</div>
  
</section>
<!-- <h4 style="margin-top:12px !important;"><a href="arts.php" style="font-family: 'Jockey One', sans-serif; font-size:14px"><i class="fa fa-caret-left"></i>&nbsp;&nbsp;BACK TO PAGE</a> </h4> -->





		  
					
			  
			 
                                 
             
            

           
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="clearfix"></div>
<?php include 'footer.php'; ?>