<?php
error_reporting(0);
require('db_con.php');



?>


<?php include 'header.php'; ?>

<!--<div class="page_head">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1 class="d-block">Karnatak University Dharwad</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Departments</li>
            <li class="breadcrumb-item active" aria-current="page">Arts</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>-->



<div class="inner_page">
  <div class="container">
    <div class="row border_around p-3 text-justify">
     <!--  <div class="col-sm-3" style="background-color:#eee">
	  <h5 style="text-align:center; padding-top:20px; "><b>DEPARTMENTS</b></h5>
           <br>

            <div class="vertical-menu" style="width:100%">
               
                <a href="arts.php">Arts</a>
                <a href="science.php">Science</a>
				<a href="social-science.php">Social Science</a>
				<a href="commerce.php">Commerce</a>
				<a href="law.php">Law</a>
				<a href="education.php">Education</a>
				<a href="management.php">Management</a>
				<a href="diploma.php" class="active" style="background-color:#6495ED">Diploma</a>
				
				
                
            </div>
        
      </div><br>
<br> -->

      <div class="col-lg-12">
                       <?php
                                $nid=$_REQUEST['nid'];
                                $qry="select * from vw_dep_file where did=".$nid." ";
                                $res=mysqli_query($conn,$qry);
                               $row=mysqli_fetch_assoc($res);
                               // while($row==mysqli_fetch_assoc($res))
                                {
                               
                                ?>
								
							
                               <h2 class="title_head" style="font-family:Domine; font-weight:600;"><?php echo $row['dname']; ?></h2>
                              <?php 
		                        }
		                      
		   
           						?>






<section class="section1">
  <div class="container">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#home">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu1"> Programme Offered</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu2">Faculty</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu3">Research</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu4">Activities</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu5">Achievements</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu6">Gold Medals</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu7">Rank Holder</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu8">Facilities</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu9">Admission Process</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu10">Course Structure</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu11">Fee Structure</a>
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu12">How to Apply</a>
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu13">Syllabus</a>
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu14">Time Table</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu15">Program Specific Outcomes</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu16">Student Details</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu17">Photo Gallery</a>
      </li>
	  
	  
	  
	  
	  
	  
    </ul>

    <!-- Tab panes -->
    <div class="tab-content clearfix">
        <div id="home" class="container tab-pane active"><br>
            <div class="row">
                <div class="col-lg-12">
                     <?php
                                $nid=$_REQUEST['nid'];
                                $qry="select * from vw_dep_file where did=".$nid."";
                                $res=mysqli_query($conn,$qry);
                                $cnt=1;
                                $fid="";
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    $fid=$row['did'];
                                    echo "<p>".$row['dobj']."</p>";
                                    
                                }
							?>
							    <br>
                                <table class="table table-bordered " style="width:100%;background-color:#eee">
                            <?php
                                $qry="select * from vw_dep_file where did=".$nid."";
                                $res=mysqli_query($conn,$qry);
                                while($row=mysqli_fetch_assoc($res))
                                {
		                           // echo "<tr><td><a href='https://smartechd.online/kud/admin_panel/dept/branch/". $row['fname']."'>". $row['fname'] ."</a></td></tr>";
		                        //<!-- <iframe width="100%" height="500" src="https://smartechd.online/kud/admin_panel/dept/branch/"//></iframe> -->
                                }
                            ?>
                                </table>
                        </div>
                    </div>
                </div>
                <div id="menu1" class="tab-pane"><br>
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                                $nid=$_REQUEST['nid'];
                                $qry="select * from dep_prg_off where did=".$nid."";
                                $res=mysqli_query($conn,$qry);
                                $cnt=1;
                                $fid="";
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    $fid=$row['dpid'];
                                    echo "<p>".$row['prgm']."</p>";
                                    
                                }
							?>
								 <br>
                                <table class="table table-bordered " style="width:100%;background-color:#eee">
                            <?php
                                $qry="select * from dep_prg_files where dpid=".$nid."";
                                $res=mysqli_query($conn,$qry);
                                while($row=mysqli_fetch_assoc($res))
                                {
		                           // echo "<tr><td><a href='https://smartechd.online/kud/admin_panel/dept/prg/". $row['fname']."'>". $row['fname'] ."</a></td></tr>";
                                }
                            ?>
                                </table>
                        </div>
                    </div>
                </div>      
                <div id="menu2" class="container tab-pane"><br>
                    <div class="row">
                        <div class="col-lg-12">
                           <div class="row">
                            <?php
                                $nid=$_REQUEST['nid'];
                                $qry="select * from vw_faculty where did=".$nid."";
                                $res=mysqli_query($conn,$qry);
                                $cnt=1;
                                $fid="";
                                
                                
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    $fid=$row['fid'];
                                   // echo "<td><img src='data:image/jpg;charset=utf8;base64,". base64_encode($row['pimg'])."</td>";
                                    //echo 
                                ?>
								
								
							<div class="col-lg-6">
							<div class="contai shadow-sm">
							<div class="administration">
							<img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['pimg']); ?>" class="img-fluid">
							</div>
							<div class="administration">
							<h4 class="text-center mr-auto mt-4" style="font-family:Domine;text-align:center"><?php echo $row['fname'];?></h4>
							
							<div class="text-center mr-auto mt-0" style="font-family:Domine;text-align:center"><strong><?php echo $row['design'];?></strong></div>
							<div class="text-center mr-auto mt-1" style="font-family:Domine;text-align:center; font-size:14px;"><?php echo $row['dname'];?></div>
							<div class="text-center mr-auto mt-1" style="font-family:Domine;text-align:center"><i class="fa fa-phone"></i><?php echo $row['mob'];?></div>
							<div class="text-center mr-auto mt-1" style="font-family:Domine;text-align:center; font-size:12px;"><i class="fa fa-envelope"></i><?php echo $row['email'];?></div>
							
							
							
							
							<div class="text-center mr-auto mt-0" style="font-family:Domine;text-align:center">
							
							
							
							<a href="<?php echo $row['vurl'];?>" class="btn btn-primary btn-sm" target="_blank">View Vidwan</a>
							<?php
                                                $str="select * from faculty_file where fhid=".$fid."";
                                                
                                                $result=mysqli_query($conn,$str);
                                                $row1=mysqli_fetch_assoc($result);
                                                
                                            ?>
							
							 &nbsp; <a href="https://smartechd.online/kud/admin_panel/dept/faculty/<?php echo $row1['fname'];?>" class="btn btn-primary btn-sm" target="_blank">View Profile</a></div>
							
							
							</div>
							
							</div>
							</div>
								
                                <?php
                                }
						    ?>
						    </div>
						     
                                
                        </div>
	                </div>      
	            </div>
                <div id="menu3" class="container tab-pane"><br>
                   
                    <div class="row">
                        <div class="col-lg-12">
                           <?php
                                $nid=$_REQUEST['nid'];
                                $qry="select * from vw_fac_rea where did=".$nid."";
                                $res=mysqli_query($conn,$qry);
                                $cnt=1;
                                $fid="";
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    $fid=$row['did'];
                                    echo "<p>".$row['dobj']."</p>";
                                    
                                }
						    ?>
						        <br>
                                <table class="table table-bordered " style="width:100%;background-color:#eee">
                            <?php
                                $qry="select * from fac_research_file where frid=".$fid."";
                                $res=mysqli_query($conn,$qry);
                                while($row=mysqli_fetch_assoc($res))
                                {
		                          //  echo "<tr><td><a href='https://smartechd.online/kud/admin_panel/fac/prof/". $row['fname']."'>". $row['fname'] ."</a></td></tr>";
                                }
                            ?>
                                </table>
                        </div>
	                </div>      
                </div>
                <div id="menu4" class="container tab-pane"><br>
                   
                    <div class="row">
                        <div class="col-lg-12">
                              <?php
                                $nid=$_REQUEST['nid'];
                                $qry="select * from vw_fac_act where did=".$nid."";
                                $res=mysqli_query($conn,$qry);
                                $cnt=1;
                                $fid="";
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    $fid=$row['did'];
                                    echo "<p>".$row['dobj']."</p>";
                                    
                                }
						    ?>
						        <br>
                                <table class="table table-bordered " style="width:100%;background-color:#eee">
                            <?php
                                $qry="select * from fac_act_file where faid=".$fid."";
                                $res=mysqli_query($conn,$qry);
                                while($row=mysqli_fetch_assoc($res))
                                {
		                            //echo "<tr><td><a href='https://smartechd.online/kud/admin_panel/fac/prof/". $row['fname']."'>". $row['fname'] ."</a></td></tr>";
                                }
                            ?>
                                </table>
                        </div>
                	</div>      
                </div>

 <div id="menu5" class="container tab-pane"><br>
       
          <div class="row">
            <div class="col-lg-12">
            
            
              <?php
                                $nid=$_REQUEST['nid'];
                                $qry="select * from vw_fac_ach where did=".$nid."";
                                $res=mysqli_query($conn,$qry);
                                $cnt=1;
                                $fid="";
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    $fid=$row['did'];
                                    echo "<p>".$row['dobj']."</p>";
                                    
                                }
						    ?>
						        <br>
                                <table class="table table-bordered " style="width:100%;background-color:#eee">
                            <?php
                                $qry="select * from fac_ach_file where fhid=".$fid."";
                                $res=mysqli_query($conn,$qry);
                                while($row=mysqli_fetch_assoc($res))
                                {
		                           // echo "<tr><td><a href='https://smartechd.online/kud/admin_panel/fac/prof/". $row['fname']."'>". $row['fname'] ."</a></td></tr>";
                                }
                            ?>
                                </table>
        </div>
		</div>
		</div>
		
		
		 <div id="menu6" class="container tab-pane"><br>
       
          <div class="row">
            <div class="col-lg-12">
            
            
              <?php
                                $nid=$_REQUEST['nid'];
                                $qry="select * from dep_med where did=".$nid."";
                                $res=mysqli_query($conn,$qry);
                                $cnt=1;
                                $fid="";
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    $fid=$row['dmid'];
                                    echo "<p>".$row['mname']."</p>";
                                    
                                }
						    ?>
						        <br>
                                <table class="table table-bordered " style="width:100%;background-color:#eee">
                            <?php
                                $qry="select * from dep_med_file where dmid=".$fid."";
                                $res=mysqli_query($conn,$qry);
                                while($row=mysqli_fetch_assoc($res))
                                {
		                           // echo "<tr><td><a href='https://smartechd.online/kud/admin_panel/fac/prof/". $row['fname']."'>". $row['fname'] ."</a></td></tr>";
                                }
                            ?>
                                </table>
        </div>
	</div>
	</div>
	 <div id="menu7" class="container tab-pane"><br>
       
          <div class="row">
            <div class="col-lg-12">
            
            
              <?php
                                $nid=$_REQUEST['nid'];
                                $qry="select * from dep_rank where did=".$nid."";
                                $res=mysqli_query($conn,$qry);
                                $cnt=1;
                                $fid="";
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    $fid=$row['drid'];
                                    echo "<p>".$row['ranks']."</p>";
                                    
                                }
						    ?>
						        <br>
                                <table class="table table-bordered " style="width:100%;background-color:#eee">
                            <?php
                                $qry="select * from dep_rank_file where drid=".$fid."";
                                $res=mysqli_query($conn,$qry);
                                while($row=mysqli_fetch_assoc($res))
                                {
		                           // echo "<tr><td><a href='https://smartechd.online/kud/admin_panel/fac/prof/". $row['fname']."'>". $row['fname'] ."</a></td></tr>";
                                }
                            ?>
                                </table>
        </div>
	</div>
	</div>
	
	
	 <div id="menu8" class="container tab-pane"><br>
       
          <div class="row">
            <div class="col-lg-12">
            
            
              <?php
                                $nid=$_REQUEST['nid'];
                                $qry="select * from vw_dep_faci where did=".$nid."";
                                $res=mysqli_query($conn,$qry);
                                $cnt=1;
                                $fid="";
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    $fid=$row['did'];
                                    echo "<p>".$row['dobj']."</p>";
                                    
                                }
						    ?>
						        <br>
                                <table class="table table-bordered " style="width:100%;background-color:#eee">
                            <?php
                                $qry="select * from dep_faci_files where dfid=".$fid."";
                                $res=mysqli_query($conn,$qry);
                                while($row=mysqli_fetch_assoc($res))
                                {
		                           // echo "<tr><td><a href='https://smartechd.online/kud/admin_panel/fac/prof/". $row['fname']."'>". $row['fname'] ."</a></td></tr>";
                                }
                            ?>
                                </table>
        </div>
	
	</div>
	</div>
	<div id="menu9" class="container tab-pane"><br>
       
          <div class="row">
            <div class="col-lg-12">
            
            
              <?php
                                $nid=$_REQUEST['nid'];
                                $qry="select * from vw_dep_adm where did=".$nid."";
                                $res=mysqli_query($conn,$qry);
                                $cnt=1;
                                $fid="";
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    $fid=$row['did'];
                                    echo "<p>".$row['dobj']."</p>";
                                    
                                }
						    ?>
						        <br>
                                <table class="table table-bordered " style="width:100%;background-color:#eee">
                            <?php
                                $qry="select * from dep_adm_file where dapid=".$fid."";
                                $res=mysqli_query($conn,$qry);
                                while($row=mysqli_fetch_assoc($res))
                                {
		                           // echo "<tr><td><a href='https://smartechd.online/kud/admin_panel/fac/prof/". $row['fname']."'>". $row['fname'] ."</a></td></tr>";
                                }
                            ?>
                                </table>
        </div>
	
	</div>
	</div>
	
	<div id="menu10" class="container tab-pane"><br>
       
          <div class="row">
            <div class="col-lg-12">
            
            
              <?php
                                $nid=$_REQUEST['nid'];
                                $qry="select * from vw_dep_cou where did=".$nid."";
                                $res=mysqli_query($conn,$qry);
                                $cnt=1;
                                $fid="";
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    $fid=$row['did'];
                                    echo "<p>".$row['dobj']."</p>";
                                    
                                }
						    ?>
						        <br>
                                <table class="table table-bordered " style="width:100%;background-color:#eee">
                            <?php
                                $qry="select * from dep_cou_file where dcid=".$fid."";
                                $res=mysqli_query($conn,$qry);
                                while($row=mysqli_fetch_assoc($res))
                                {
		                           // echo "<tr><td><a href='https://smartechd.online/kud/admin_panel/fac/prof/". $row['fname']."'>". $row['fname'] ."</a></td></tr>";
                                }
                            ?>
                                </table>
        </div>
	
	</div>
	</div>
	
	
	<div id="menu11" class="container tab-pane"><br>
       
          <div class="row">
            <div class="col-lg-12">
            
            
              <?php
                                $nid=$_REQUEST['nid'];
                                $qry="select * from vw_dep_fee where did=".$nid."";
                                $res=mysqli_query($conn,$qry);
                                $cnt=1;
                                $fid="";
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    $fid=$row['did'];
                                    echo "<p>".$row['dobj']."</p>";
                                    
                                }
						    ?>
						        <br>
                                <table class="table table-bordered " style="width:100%;background-color:#eee">
                            <?php
                                $qry="select * from dep_fee_file where dfsid=".$fid."";
                                $res=mysqli_query($conn,$qry);
                                while($row=mysqli_fetch_assoc($res))
                                {
		                           // echo "<tr><td><a href='https://smartechd.online/kud/admin_panel/fac/prof/". $row['fname']."'>". $row['fname'] ."</a></td></tr>";
                                }
                            ?>
                                </table>
        </div>
	
	</div>
	</div>
	
	<div id="menu12" class="container tab-pane"><br>
       
          <div class="row">
            <div class="col-lg-12">
            
            
              <?php
                                $nid=$_REQUEST['nid'];
                                $qry="select * from vw_dep_app where did=".$nid."";
                                $res=mysqli_query($conn,$qry);
                                $cnt=1;
                                $fid="";
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    $fid=$row['did'];
                                    echo "<p>".$row['dobj']."</p>";
                                    
                                }
						    ?>
						        <br>
                                <table class="table table-bordered " style="width:100%;background-color:#eee">
                            <?php
                                $qry="select * from dep_app_file where dalid=".$fid."";
                                $res=mysqli_query($conn,$qry);
                                while($row=mysqli_fetch_assoc($res))
                                {
		                           // echo "<tr><td><a href='https://smartechd.online/kud/admin_panel/fac/prof/". $row['fname']."'>". $row['fname'] ."</a></td></tr>";
                                }
                            ?>
                                </table>
        </div>
	
	</div>
	</div>
	<div id="menu13" class="container tab-pane"><br>
       
          <div class="row">
            <div class="col-lg-12">
            
            
              <?php
                                $nid=$_REQUEST['nid'];
                                $qry="select * from vw_dep_syl where did=".$nid."";
                                $res=mysqli_query($conn,$qry);
                                $cnt=1;
                                $fid="";
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    $fid=$row['did'];
                                    echo "<p>".$row['dobj']."</p>";
                                    
                                }
						    ?>
						        <br>
                                <table class="table table-bordered " style="width:100%;background-color:#eee">
                            <?php
                                $qry="select * from dep_syl_file where dsid=".$fid."";
                                $res=mysqli_query($conn,$qry);
                                while($row=mysqli_fetch_assoc($res))
                                {
		                           // echo "<tr><td><a href='https://smartechd.online/kud/admin_panel/fac/prof/". $row['fname']."'>". $row['fname'] ."</a></td></tr>";
                                }
                            ?>
                                </table>
        </div>
	
	</div>
	</div>
	<div id="menu14" class="container tab-pane"><br>
       
          <div class="row">
            <div class="col-lg-12">
            
            
              <?php
                                $nid=$_REQUEST['nid'];
                                $qry="select * from vw_dep_tt where did=".$nid."";
                                $res=mysqli_query($conn,$qry);
                                $cnt=1;
                                $fid="";
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    $fid=$row['did'];
                                    echo "<p>".$row['dobj']."</p>";
                                    
                                }
						    ?>
						        <br>
                                <table class="table table-bordered " style="width:100%;background-color:#eee">
                            <?php
                                $qry="select * from dep_tt_file where dtid=".$fid."";
                                $res=mysqli_query($conn,$qry);
                                while($row=mysqli_fetch_assoc($res))
                                {
		                           // echo "<tr><td><a href='https://smartechd.online/kud/admin_panel/fac/prof/". $row['fname']."'>". $row['fname'] ."</a></td></tr>";
                                }
                            ?>
                                </table>
        </div>
	
	</div>
	</div>
	<div id="menu15" class="container tab-pane"><br>
       
          <div class="row">
            <div class="col-lg-12">
            
            
              <?php
                                $nid=$_REQUEST['nid'];
                                $qry="select * from vw_dep_prg_out where did=".$nid."";
                                $res=mysqli_query($conn,$qry);
                                $cnt=1;
                                $fid="";
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    $fid=$row['did'];
                                    echo "<p>".$row['dobj']."</p>";
                                    
                                }
						    ?>
						        <br>
                                <table class="table table-bordered " style="width:100%;background-color:#eee">
                            <?php
                                $qry="select * from dep_out_come_file where doid=".$fid."";
                                $res=mysqli_query($conn,$qry);
                                while($row=mysqli_fetch_assoc($res))
                                {
		                           // echo "<tr><td><a href='https://smartechd.online/kud/admin_panel/fac/prof/". $row['fname']."'>". $row['fname'] ."</a></td></tr>";
                                }
                            ?>
                                </table>
								
        </div>
	
	
	</div>
	</div>
	
	<div id="menu16" class="container tab-pane"><br>
       
          <div class="row">
            <div class="col-lg-12">
            
            
              <?php
                                $nid=$_REQUEST['nid'];
                                $qry="select * from vw_std where did=".$nid."";
                                $res=mysqli_query($conn,$qry);
                                $cnt=1;
                                $fid="";
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    $fid=$row['did'];
                                    echo "<p>".$row['dobj']."</p>";
                                    
                                }
						    ?>
						        <br>
                                <table class="table table-bordered " style="width:100%;background-color:#eee">
                            <?php
                                $qry="select * from dep_tt_file where dtid=".$fid."";
                                $res=mysqli_query($conn,$qry);
                                while($row=mysqli_fetch_assoc($res))
                                {
		                           // echo "<tr><td><a href='https://smartechd.online/kud/admin_panel/fac/prof/". $row['fname']."'>". $row['fname'] ."</a></td></tr>";
                                }
                            ?>
                                </table>
        </div>
	
	</div>
	</div>
	
	
	<div id="menu17" class="container tab-pane"><br>
       
          <div class="row">
            <div class="col-lg-12">
            
            
              <?php
                               // $nid=$_REQUEST['nid'];
                               // //$qry="select * from vw_dep_tt where did=".$nid."";
                                //$res=mysqli_query($conn,$qry);
                               // $cnt=1;
                               // $fid="";
                               // while($row=mysqli_fetch_assoc($res))
                                //{
                               //     $fid=$row['did'];
                              //      echo "<p>".$row['dobj']."</p>";
                                    
                              //  }
						    ?>
						        <!-- <br> -->
                                <!-- <table class="table table-bordered " style="width:100%;background-color:#eee"> -->
                            <?php
                              //  $qry="select * from dep_tt_file where dtid=".$fid."";
                               // $res=mysqli_query($conn,$qry);
                               // while($row=mysqli_fetch_assoc($res))
                               // {
		                           // echo "<tr><td><a href='https://smartechd.online/kud/admin_panel/fac/prof/". $row['fname']."'>". $row['fname'] ."</a></td></tr>";
                               //}
                            ?>
                                <!-- </table> -->
        </div>
	
	
	
	
	<div class="clearfix"></div>
</div>      
                                                                                                                                                                   
</div>
</div>
</div>
  
</section>
<h4 style="margin-top:12px !important;"><a href="diploma.php" style="font-family: 'Jockey One', sans-serif; font-size:14px"><i class="fa fa-caret-left"></i>&nbsp;&nbsp;BACK TO PAGE</a> </h4>


		  
					
			  
			 
                                 
             
            

           
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="clearfix"></div>

<?php include 'footer.php'; ?>