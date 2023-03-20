<?php
    error_reporting(0);
    include 'db_con.php';
?>
<?php include 'header.php'; ?>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong|Akaya+Telivigala|Alice|Average|Andada Pro|Enriqueta">
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Fredoka+One&family=Roboto+Slab&family=Signika:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/css/vstyle1.css">
    
    <style>
        p{font-family:Average;font-size:17px;color:#000;margin:10px;padding:10px}
        h5{font-family:Alice;color:#0074B7;font-weight:bold;}
        h5.x{font-family:Alice;color:#000;font-weight:bold;font-size:15px;padding-top:10px;margin-left:40px;}
        p.y{font-family:Average;font-size:15px;color:#000;padding:0px 30px}
        
    </style>
    <div class="inner_page">
        <div class="container">
            <div class="row border_around p-3 text-justify">
                <div class="col-sm-3" style="background-color:#e1ebea">
            	    <h5 style="text-align:center;color:#BB6464;height:50px;padding:20px;font-size:17px;border-bottom:2px solid #BB6464;font-family:Alice"><b>PG CENTRES</b></h5>
                       <br>
                        <br>
                        <div class="vertical-menu" style="width:100%">
                           <vnav class='animated bounceInDown bg-dark'>
                            	<ul>
                            		<li class='sub-menu'><a href='#kar' class="active">Karwar<div class='fa fa-caret-down right'></div></a>
                            			<ul>
                            				 <li><a href="karwar.php" style="color:#0E86D4">About</a></li>
                                            <li><a href="karwar-ranks.php" style="color:#0E86D4">Medals & Ranks</a></li>
                                            <li><a href="karwar-aca.php" style="color:#0E86D4">Academic</a></li>
                                            <li><a href="#" style="color:#0E86D4">LMS</a></li>
                                            <li><a href="karwar-infr.php" style="color:#0E86D4">Infrastructure</a></li>
                                            <li><a href="karwar-fac.php" style="color:#0E86D4">Faculty</a></li>
                                            <li><a href="karwar-rea.php" style="color:#0E86D4">Research</a></li>
                                            <li><a href="karwar-act.php" style="color:#0E86D4">Activities</a></li>
                                            <li><a href="karwar-awd.php" style="color:#0E86D4">Awards / Achievements</a></li>
                                            <li><a href="karwar-hos.php" style="color:#0E86D4">Hostel Facility</a></li>
                                            <li><a href="karwar-slet.php" style="color:#0E86D4">SLET / NET</a></li>
                                            <li><a href="karwar-alm.php" style="color:#0E86D4">Alumni</a></li>
                                            <li><a href="karwar-gal.php" style="color:#0E86D4">Gallery</a></li>
                                            <li><a href="karwar-con.php" style="color:#0E86D4">Contact Us</a></li>
                            			</ul>
                            		</li>
                            		<li><a href="haveri.php">Haveri</a></li>
                                    <li><a href="gadag.php">Gadag</a></li>
                            	</ul>
                            </vnav>
                        </div>
                    
                </div><br>
                <br>

                <div class="col-sm-9 director_img">
                    <h2 class="title_head" style="font-family:Trirong;text-align:center;color:#000">Post Graduate Center, Karwar</h2>
                    <hr>
                    
                    <h5 class="my-5">ACADEMIC</h5>
                    
                    <h5 class="x my-4">PROGRAMMES OFFERED</h5>
                    <div class="table-responsive">
                        <table id="customers" style="width:50%;" align="center">
                            <tr style="font-size:12px">
                                <th class="text-center" style="width:10%">Sl. No.</th>
                                <th style="width:50%">Name of the Department</th>
                                <th style="width:20%">Year of Establishment</th>	
                                <th style="width:20%">Intake Capacity</th>
                            </tr>
                            <tr>
                                <td class="text-center">1.</td>
                                <td>Marine Biology</td>
                                <td class="text-center">1975</td>
                                <td>20</td>
                                
                            </tr>
                            <tr>
                                <td class="text-center">2.</td>
                                <td>Commerce</td>
                                <td class="text-center">1998</td>
                                <td>40</td>
                                
                            </tr>
                            <tr>
                                <td class="text-center">3.</td>
                                <td>M. A. English</td>
                                <td class="text-center">2013</td>
                                <td>55</td>
                                
                            </tr>
                        </table>
                    </div>
                    
                    <h5 class="x my-4">ADMISSION PROCESS</h5>
                    <p class="y">
                        Entrance test will be conducted. Admission shall be made on the basis of the merit list prepared by taking into consideration 50% of the aggregate marks obtained in the relevant subject(s) at qualifying degree examination (Aggregate of all three years) and 50% of marks obtained in the entrance test.
                    </p>
                    
                    <h5 class="x my-4">COURSE STRUCTURE</h5>
                    <p class="y">
                        <ul class="ml-5">
                            <li>Choice Based Credit System (CBCS)</li>
                            <li>Two Years (Four Semesters)</li>
                        </ul>
                    
                    <h5 class="x my-4">FEE STRUCTURE</h5>
                    <p class="y">
                        As per Karnatak University, Dharwad Admission Notification. For further details visit <a href="https://www.kud.ac.in" target-"_blank">www.kud.ac.in</a>
                    </p>
    
                    <h5 class="x my-4">SYLLABUS</h5>
                    <p class="y">For further details visit <a href="https://www.kud.ac.in" target-"_blank">www.kud.ac.in</a> </p>
    
                    <!--<h5 class="x my-4">PRGOGRAMME SPECIFIC OUTCOMES</h5>
                    <p class="y">Understandings of Ocean functions and phenomena and associated biology. Interdisciplinary nature of science, ecosystem, competency of research, entrepreneurship and integrity skills.</p>
                    -->
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
<?php include'footer.php'; ?>
