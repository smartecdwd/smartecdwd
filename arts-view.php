<?php
session_start();
error_reporting(0);
include 'branch_session.php';
require('db_con.php');



?>


<?php include 'dep-header.php'; ?>

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
      <!-- <div class="col-sm-3" style="background-color:#eee">
	  <h5 style="text-align:center; padding-top:20px; "><b>DEPARTMENTS</b></h5>
           <br>

            <div class="vertical-menu" style="width:100%">
              
                <a href="arts.php" class="active" style="background-color:#6495ED">Arts</a>
                <a href="science.php">Science</a>
				<a href="social-science.php">Social Science</a>
				<a href="commerce.php">Commerce</a>
				<a href="law.php">Law</a>
				<a href="education.php">Education</a>
				<a href="management.php">Management</a>
				<a href="diploma.php">Diploma</a>
				
				
                
            </div>
        
      </div><br>
<br>
 -->
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
								
							
                               <h2 class="title_head" style="font-family:Domine; font-weight:600; padding-top:30px;"><?php echo $row['dname']; ?></h2>
                              <?php 
		                        }
		                      
		   
           						?>





<section class="section1">
  <div class="container">
    <!-- Nav tabs -->
    <!-- <ul class="nav nav-tabs" role="tablist">
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
	  
	  
	  
	  
	  
	  
    </ul> -->

    <!-- Tab panes -->
    <div class="tab-content clearfix">
        <div id="home" class="container tab-pane active"><br>
            <div class="row">
                <div class="col-lg-12">
                     <?php
                                //$nid=$_REQUEST['nid'];
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
                
	
	
	
	<div class="clearfix"></div>
</div>      
                                                                                                                                                                   
</div>
</div>
</div>
  
</section>
<h4 style="margin-top:12px !important;"><a href="arts.php" style="font-family: 'Jockey One', sans-serif; font-size:14px"><i class="fa fa-caret-left"></i>&nbsp;&nbsp;BACK TO PAGE</a> </h4>





		  
					
			  
			 
                                 
             
            

           
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="clearfix"></div>
<?php include 'footer.php'; ?>