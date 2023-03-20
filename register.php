<?php
    session_start();
    error_reporting(0);
    include 'branch_session.php';
    require('db_con.php');
    $_SESSION['branch'];
    include 'header.php'; 
?>
    <link href="css/dep_mytable.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong|Akaya+Telivigala|Alice|Average|Andada Pro|Enriqueta">
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Fredoka+One&family=Roboto+Slab&family=Signika:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/css/dep_sidebar.css">


    <div class="inner_page">
        <div class="container">
            <div class="row border_around p-3 text-justify">
                <div class="col-lg-12">
                    <?php
				 		$_SESSION['branch'];
				 	 	$qry="select * from dep_mas where did='".$_SESSION['branch']."'";
                        $res=mysqli_query($conn,$qry);
                        
                        while($row=mysqli_fetch_assoc($res))
						{
						    $nid=$row['did'];
						    $dn=$row['dname'];
					?>    
					        <h2 class="title_head" style="font-family:Domine; font-weight:600; padding-top:30px;"><?php echo $row['dname']; ?> &nbsp;<i class="fa fa-caret-right"></i> Register</h2>
                    <?
						    
						}
					?>    
                    <section class="section1">
                        <div class="container">
                        
                            <!-- Tab panes -->
                            <div class="tab-content clearfix">
                                <div id="home" class="container tab-pane active"><br>
                                    <div class="row">
                                        <div class="col-sm-3 sidebar" style="background-color:#fff;border:1px solid #005b96;">
    	                                    <vnav class='animated bounceInDown navbar-expand-lg mb-2'>
                                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                                    <span class="navbar-toggler-icon" style="color:#000"></span>
                                                </button>
                                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                                    <ul>
                                                        <li><a href="dep_home.php">Home</a></li>
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
                                                                <li><a href="register.php?nid=<?php echo $_SESSION['branch']; ?>">Register</a></li>	
                                                                <li><a href="login.php?nid=<?php echo $_SESSION['branch']; ?>">Login</a></li>
                        						            </ul>
                        						        </li>
                        						        <li><a href="dep-gallery.php?nid=<?php echo $_SESSION['branch']; ?>"> Photo Gallery</a></li>
                        						        <li><a href="dep-contact.php?nid=<?php echo $_SESSION['branch']; ?>">Contact Us</a></li>
                        						    </ul>
                                                </div>
                                            </vnav>
                                        
                                        </div>
                    
                                        <div class="col-lg-9">
                                            <form method="post" action="register.php">
                                                <div class="row">
                                                    <div class="form-group col-md-12">
    							                        <label class="label" for="name" style="font-size:14px;color:#000">Department</label>
    							                        <input type="text" class="form-control" name="deo" style="font-size:14px" value="<?echo $dn;?>" readonly required>
    						                        </div>
    						                        <div class="form-group col-md-6">
    							                        <label class="label" for="name" style="font-size:14px;color:#000">Register No</label>
    							                        <input type="text" class="form-control" name="rn" style="font-size:14px" required>
    						                        </div>
    						                        <div class="form-group col-md-6">
    							                        <label class="label" for="name" style="font-size:14px;color:#000">Academic Year</label>
    							                        <select name="ac" class="form-control">
    							                            <?
    							                                for($yr=Date('Y');$yr>=2010;$yr--)
    							                                {
    							                                    echo "<option>". $yr. "-" . ($yr+1) ."</option>";        
    							                                }
    							                            ?>
    							                        </select>
    						                        </div>
                                                    <div class="form-group col-md-12">
    							                        <label class="label" for="name" style="font-size:14px;color:#000">Name</label>
    							                        <input type="text" class="form-control" name="fn" style="font-size:14px" required>
    						                        </div>
    						                        <div class="form-group col-md-6">
    							                        <label class="label" for="name" style="font-size:14px;color:#000">Mobile No.1</label>
    							                        <input type="text" class="form-control" name="mob" style="font-size:14px;" required>
    						                        </div>
    						                        <div class="form-group col-md-6">
    							                        <label class="label" for="name" style="font-size:14px;color:#000">Mobile No.2</label>
    							                        <input type="text" class="form-control" name="mob" style="font-size:14px;" required>
    						                        </div>
    						                        <div class="form-group col-md-12">
    							                        <label class="label" for="name" style="font-size:14px;color:#000">Email</label>
    							                        <input type="text" class="form-control" name="em" style="font-size:14px" required>
    						                        </div>
    						                        <div class="form-group col-md-12">
    							                        <label class="label" for="name" style="font-size:14px;color:#000">Company Working for</label>
    							                        <input type="text" class="form-control" name="cn" style="font-size:14px">
    						                        </div>
    						                        <div class="form-group col-md-12">
    							                        <label class="label" for="name" style="font-size:14px;color:#000">Designation</label>
    							                        <input type="text" class="form-control" name="dg" style="font-size:14px">
    						                        </div>
    						                        <div class="form-group col-md-12" style="padding-top:20px;text-align:center">
    							                        <input type="submit" value="Submit" class="btn btn-primary rounded py-3 px-5">
    						                        </div>
    						                        <input type="text" class="form-control" name="nid" style="font-size:14px;visibility:hidden" value="<?echo $nid;?>">
    						                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
	                <div class="clearfix"></div>
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