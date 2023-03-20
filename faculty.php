<?php
    session_start();
    error_reporting(0);
    include 'branch_session.php';
    require('db_con.php');
    $_SESSION['branch'];
    include 'header.php'; 
?>
    <link rel="stylesheet" href="css/css/dep_sidebar.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/fac_img.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong|Akaya+Telivigala|Alice|Average|Andada Pro|Enriqueta">
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Fredoka+One&family=Roboto+Slab&family=Signika:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
	<script rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style>
        #color div:hover{
            background-color:#6E3CBC;
        }
    </style>
    <div class="inner_page">
        <div class="container">
            <div class="row border_around p-2 text-justify">
                <div class="col-lg-12">
                    <?php
            	 		$_SESSION['branch'];
            	 	 	$qry="select * from dep_mas where did='". $_SESSION['branch']."'";
                        $res=mysqli_query($conn,$qry);
                        
                        while($row=mysqli_fetch_assoc($res))
            			{
            			    $nid=$row['did'];
            			}
                        $qry="select * from vw_dep_file where did=".$nid." ";
                        $res=mysqli_query($conn,$qry);
                        $row=mysqli_fetch_assoc($res);
                        { ?>
                            <h2 class="title_head mb-3" style="font-family:Domine; font-weight:600; padding-top:30px;"><?php echo $row['dname']; ?> &nbsp;<i class="fa fa-caret-right"></i> Faculty</h2>
                    <?php 
                        }
   				    ?>
   				        <section class="section1">
                            <div class="container" style="padding:30px">
                                <div class="tab-content clearfix">
                                    <div id="home" class="container tab-pane active"><br>
                                        <div class="row">
                                            <div class="col-sm-3 sidebar">
                                                <vnav class='animated bounceInDown navbar-expand-lg mb-2'>
                                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                                        <span class="navbar-toggler-icon" style="color:#000"></span>
                                                    </button>
                                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                                        <ul>
                                                            
                                                            <li class='sub-menu'><a href='#' class="active">About<div class='fa fa-caret-down right'></div></a>
                                                    			<ul>
                                                    				 <li><a href="history-development.php?nid=<?php echo $_SESSION['branch']; ?>" class="active">History and Development</a></li>
                                        							 <li><a href="vision.php?nid=<?php echo $_SESSION['branch']; ?>">Vision</a>	</li>
                                        							 <li><a href="mission.php?nid=<?php echo $_SESSION['branch']; ?>">Mission</a></li>								
                                        							 <li><a href="best-practices.php?nid=<?php echo $_SESSION['branch']; ?>">Best Practices</a>	</li>
                                        							 <li><a href="facilities.php?nid=<?php echo $_SESSION['branch']; ?>">Facilities</a>	</li>
                                        							 <li><a href="gold-medals-cash-prizes.php?nid=<?php echo $_SESSION['branch']; ?>">Gold Medals and Cash Prizes</a>	</li>
                                        							 <li><a href="rank-holders.php?nid=<?php echo $_SESSION['branch']; ?>">Rank Holders</a></li>
                                        							 <li><a href="future-plan.php?nid=<?php echo $_SESSION['branch']; ?>">Future Plans</a></li>
                                                    			</ul>
                                                    		</li>
                                                    		<li class='sub-menu'><a href='#' class="active">Academic<div class='fa fa-caret-down right'></div></a>
                            						            <ul>
                            						                <li><a href="programmes-offered.php?nid=<?php echo $_SESSION['branch']; ?>">Programmes Offered</a></li>
                                        							<li><a href="admission-process.php?nid=<?php echo $_SESSION['branch']; ?>">Admission Process</a></li>
                                        							<li><a href="course-structure.php?nid=<?php echo $_SESSION['branch']; ?>">Course Structure</a></li>
                                        							<li><a href="fee-structure.php?nid=<?php echo $_SESSION['branch']; ?>">Fee Structure</a></li>
                                        							<li><a href="how-to-apply.php?nid=<?php echo $_SESSION['branch']; ?>">How to Apply</a></li>
                                        							<li><a href="syllabus.php?nid=<?php echo $_SESSION['branch']; ?>">Syllabus</a></li>
                                        							<li><a href="time-table.php?nid=<?php echo $_SESSION['branch']; ?>">Time Table</a></li>
                                        							<li><a href="programme-specific-outcomes.php?nid=<?php echo $_SESSION['branch']; ?>">Programme Specific Outcomes</a></li>
                            						            </ul>  
                            						        </li>
                            						        <li><a href="LMS.php?nid=<?php echo $_SESSION['branch']; ?>">LMS</a></li>
                            						        <li><a href="infrastructure.php?nid=<?php echo $_SESSION['branch']; ?>">Infrastructure</a></li>
                            						        <li><a href="faculty.php?nid=<?php echo $_SESSION['branch']; ?>">Faculty</a></li>
                            						        <li class='sub-menu'><a href='#' class="active">Research<div class='fa fa-caret-down right'></div></a>
                            						            <ul>
                            						                <li><a href="ph-ds-completed.php?nid=<?php echo $_SESSION['branch']; ?>">Ph.Ds. Completed</a></li>
                            							            <li><a href="ph-ds-ongoing.php?nid=<?php echo $_SESSION['branch']; ?>">Ph.Ds. Ongoing</a></li>
                            							            <li><a href="projects-undertaken.php?nid=<?php echo $_SESSION['branch']; ?>">Projects Undertaken</a></li>
                            						            </ul>  
                            						        </li>
                            						        <li class='sub-menu'><a href='#' class="active">Activities<div class='fa fa-caret-down right'></div></a>
                            						            <ul>
                            						                <li><a href="conferences-seminars-organized.php?nid=<?php echo $_SESSION['branch']; ?>">Conferences / Seminars Organized</a></li>
                                        							<li><a href="MoUs.php?nid=<?php echo $_SESSION['branch']; ?>">MoUs</a></li>
                                        						    <li><a href="parents-teachers-meet.php?nid=<?php echo $_SESSION['branch']; ?>">Parents - Teachers Meet</a></li>
                                        							<li><a href="alumni-meet.php?nid=<?php echo $_SESSION['branch']; ?>">Alumni Meet</a></li>
                                        							<li><a href="extension-activities.php?nid=<?php echo $_SESSION['branch']; ?>">Extension Activities</a></li>
                            						            </ul>
                            						        </li>
                            						        <li class='sub-menu'><a href='#' class="active">Awards<div class='fa fa-caret-down right'></div></a>
                            						            <ul>
                            						                <li><a href="awards-received.php?nid=<?php echo $_SESSION['branch']; ?>">Awards Received</a></li>
                                                        			<li><a href="honours.php?nid=<?php echo $_SESSION['branch']; ?>">Honours</a></li>
                                                        			<li><a href="achievements.php?nid=<?php echo $_SESSION['branch']; ?>">Achievements</a></li>
                            						            </ul>
                            						        </li>
                            						        <li><a href="SLET-qualified-students.php?nid=<?php echo $_SESSION['branch']; ?>"> NET / SLET QUALIFIED</a></li>
                            						        <li class='sub-menu'><a href='#' class="active">Alumni<div class='fa fa-caret-down right'></div></a>
                            						            <ul>
                            						                <li><a href="distinguished-alumni-dept.php?nid=<?php echo $_SESSION['branch']; ?>">Distinguished Alumni of the Department</a></li>
                                                                    <!--<li><a href="register.php?nid=<?php echo $_SESSION['branch']; ?>">Register</a></li>	
                                                                    <li><a href="login.php?nid=<?php echo $_SESSION['branch']; ?>">Login</a></li>-->
                            						            </ul>
                            						        </li>
                            						        <li><a href="dep-gallery.php?nid=<?php echo $_SESSION['branch']; ?>"> Photo Gallery</a></li>
                            						        <li><a href="dep-contact.php?nid=<?php echo $_SESSION['branch']; ?>">Contact Us</a></li>
                            						    </ul>
                                                    </div>
                                                </vnav>
                                            </div>
                                            <div class="col-sm-9 pt-pl-3" style="background-color:#f0f1f2;">
                                                    <?php
                                                        $nid=$_REQUEST['nid'];
                                                        $qry="select * from faculty where did=".$nid." order by dord";
                                                        $res=mysqli_query($conn,$qry);
                                                        $cnt=1;
                                                        $fid="";
                                            
                                                        while($row=mysqli_fetch_assoc($res))
                                                        {
                                                            $fid=$row["fid"];
                                                            if($cnt==1)
                                                           {
                                                                echo "<div class='row'>";
                                                            }
                                                        ?>  
                                                            <div class="col-md-4 col-sm-4 col-xs-12 rounded-top">
                                                              <div class="row ourTeam-box text-center" style="border-color:#008080;border-radius:15px">
                                                                <div class="col-md-12 section1">
                                                                  <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['pimg']); ?>">
                                                                </div>
                                                                <div class="col-md-12 section2 pb-3" style="background-color:#fff">
                                                                  <p style="color:#0a5757;font-size:15px;font-family:Andada Pro"><strong><?php echo $row['fname'];?></strong></p>
                                                                  <span style="color:#000"><?php echo $row['design'];?></span><br>
                                                        		  <span style="color:#000"><?php echo $row['dname'];?></span><br>
                                                        		  <span style="color:#000"><i class="fa fa-phone"></i>&nbsp;<?php echo $row['mob'];?></span><br>
                                                                  <span style="color:#000;font-size:13px"><i class="fa fa-envelope"></i>&nbsp;<?php echo $row['email'];?></span>
                                                                </div>
                                                                <div class="col-md-12 section3" style="height:40px;background-color:#008080">
                                                                   <div id="color" style="width:50%;padding-top:10px;border-right:1px solid #fff">
                                                                        <a href="<?php echo $row['vurl'];?>" target="_blank" style="color:#fff;font-weight:bold;">View Vidwan</a>
                                                                    </div>
                                                                    <?php
                                                                       /* $str="select * from faculty_file where fid=".$fid."";
                                                                        
                                                                        $result=mysqli_query($conn,$str);
                                                                        $row1=mysqli_fetch_assoc($result);
                                                                        $rcnt=mysqli_num_rows($result);*/
                                                                    ?>
                                                                    <div style="width:50%;padding:3px;float:right;postion:absolute;margin-top:-25px;">
                                                                    <?php
                                                                        //if($rcnt>0)
                                                                        if($row['pro_pdf']!="")
                                                                        {
                                                                    ?>
                                                                            <a href="https://www.kud.ac.in/admin_panel/fac/prof/<?php echo $row['pro_pdf'];?>" target="_blank" style="color:#fff;font-weight:bold;">View Profile</a>
                                                                     <?php  }
                                                                        else
                                                                        {
                                                                    ?>
                                                                        <a href="#" style="color:#fff;font-weight:bold;">View Profile</a>
                                                                    <?php 
                                                                        }
                                                                     ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                         if($cnt==3)
                                                            echo "</div>";
                                                        
                                                        if($cnt==3)
                                                           $cnt=1;
                                                        else
                                                         $cnt++;
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section> 
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
         <script>
                $('.sub-menu ul').hide();
                $(".sub-menu a").click(function () {
	                $(this).parent(".sub-menu").children("ul").slideToggle("100");
	                $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
                });
            </script>	
<?php include 'footer.php'; ?>