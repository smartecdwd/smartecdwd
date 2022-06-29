<?php
session_start();
error_reporting(0);
include 'branch_session.php';
require('db_con.php');
$_SESSION['branch'];


?>


<?php include 'dep-header.php'; ?>
<link rel="stylesheet" href="css/css/dvstyle.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong|Akaya+Telivigala|Alice|Average|Andada Pro|Enriqueta">
<link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Fredoka+One&family=Roboto+Slab&family=Signika:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">

<div class="inner_page">
  <div class="container">
    <div class="row border_around p-3 text-justify">
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
                        <?php
							 		$_SESSION['branch'];
							 	 	$qry="select * from dep_mas where did='".$_SESSION['branch']."'";
                                    $res=mysqli_query($conn,$qry);
                                    $nid="";$dn="";
                                    while($row=mysqli_fetch_assoc($res))
									{
									    $nid=$row['did'];
									    $dn=$row['dname'];
									}
                                ?>
								
							
                               <h2 class="title_head" style="font-family:Domine; font-weight:600; padding-top:30px;"><?php echo $dn; ?> &nbsp;<i class="fa fa-caret-right"></i> Gallery</h2>
                              
                    <section class="section1">
                        <div class="container">
                            <?php
                                $qry="select * from dep_gal where did=".$nid;
                                $res=mysqli_query($conn,$qry);
                                $cnt=1;
                                while($row=mysqli_fetch_array($res))
                                {
                                    if($cnt==1)
                                    {
                                        echo "<div class='row'>";
                                    }
                                    
                            ?>  
                            
                                <div class="col-sm-4 portfolio foundation" data-cat="Hostel">
                                    <div class="portfolio-wrapper">
                                        <a class="example-image-link" href="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['dpic']); ?>" data-lightbox="example-set" data-title='<?php echo $row['descp']; ?>'>
                                            <img class="example-image" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['dpic']); ?>" alt="" />
                                        </a>
                                    </div>
                                </div>
                            <?php        
                                    if($cnt>=3)
                                    {
                                        echo "</div><br>";
                                        echo "<div class='clearfix'></div>";
                                        $cnt=1;
                                    }
                                    else
                                        $cnt++;
                                }
                            ?>
    
    <div class="tab-content clearfix">
        <div id="home" class="container tab-pane active"><br>
            <div class="row">
                <div class="col-lg-12 dir_img">
				
			<!--	<img src="images/kudfront.jpg" class="img-fluid "><br>-->
<br>
                     <?php
                                //$nid=$_REQUEST['nid'];
                               // $qry="select * from dep_mas where did=".$nid."";
                               // $res=mysqli_query($conn,$qry);
                               // $cnt=1;
                               // $fid="";
                               // while($row=mysqli_fetch_assoc($res))
                               // {
                               //     $fid=$row['did'];
                               //     echo "<p>".$row['dobj']."</p>";
                                    
                              //  }
							?>
							    <br>
                                <table class="table table-bordered " style="width:100%;background-color:#eee">
                            <?php
                               // $qry="select * from vw_dep_file where did=".$nid."";
                               // $res=mysqli_query($conn,$qry);
                              //  while($row=mysqli_fetch_assoc($res))
                              //  {
		                           // echo "<tr><td><a href='https://www.kud.ac.in/admin_panel/dept/branch/". $row['fname']."'>". $row['fname'] ."</a></td></tr>";
		                        //<!-- <iframe width="100%" height="500" src="https://www.kud.ac.in/admin_panel/dept/branch/"//></iframe> -->
                               // }
                            ?>
                                </table>
                        </div>
                    </div>
                </div>
                
	
	
	
	<div class="clearfix"></div>
</div>      
                                                                                                                                                                   
</div>
</div>
<!-- </div> -->
  
</section>
<!-- <h4 style="margin-top:12px !important;"><a href="arts.php" style="font-family: 'Jockey One', sans-serif; font-size:14px"><i class="fa fa-caret-left"></i>&nbsp;&nbsp;BACK TO PAGE</a> </h4> -->

      </div>
    </div>
  </div>
</div>
<div class="clearfix"></div>
<?php include 'footer.php'; ?>