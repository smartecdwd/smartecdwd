<?php
    error_reporting(0);
    include 'db_con.php';
?>
<?php include 'header.php'; ?>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong|Akaya+Telivigala|Alice|Average|Andada Pro|Enriqueta|Titillium+Web">
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
                    
                    <h5 class="my-5">ACTIVITIES</h5>
                    <h5 class="x">CONFERENCES / SEMINARS ORGANIZED</h5>
                    <div class="table-responsive">
                        <table id="customers" style="width:90%;" align="center">
                            <tr style="font-size:12px">
                                <th style="text-align:center;width:10%">Sl. No.</th> 				
                                <th>Title</th>
                                <th>Conference / Seminar / Workshop</th>	
                                <th>Date (From to To)</th>
                                <th>Organizing Secretary</th>
                                <th>Remarks / Collaboration</th>
                            </tr>
                            <tr>
                               <td style="text-align:center;width:10%">1.</td>
                               <td>“Taxonomy and Biogeography”</td>
                               <td>Symposium</td>
                               <td>7 Dec 2013</td>
                               <td>Dr J. L. Rathod<br>
                                    Dr. Shivakumar Haragi	</td>
                                <td></td>
                            </tr>
                            <tr>
                               <td style="text-align:center;width:10%">2.</td>
                               <td>Fisheries Resource Conservation and Management</td>
                               <td>Workshop</td>
                               <td>25th May 2019</td>
                               <td>Dr J. L. Rathod<br>
                                    Dr. Shivakumar Haragi	</td>
                                <td>CCARI, GOA</td>
                            </tr>
                        </table>
                    </div>
                    <h5 class="x mt-4" >MoUs</h5>
                    <ul class="m-4" style="font-family:average;font-size:17px;color:#000">
                        <li>National Institute of Oceanography, Panaji, Goa</li>
                    	<li>Central Marine Fisheries Research Institute, Research Centre, Karwar</li>
	                    <li> Reef Watch Marine Conservation, Karnataka.</li>
                    </ul>
                    
                    <h5 class="x mt-4" >ALUMNI MEET</h5>
                    <p class="m-4">Twice in a year Alumni meetings are arranged</p>
                    
                    <h5 class="x mt-4" >EXTENSION ACTIVITIES</h5>
                    <p class="m-4">Department is carrying out EIA works, Water Quality testing, Aquaculture related consultancy works etc., under the  banner of Fishermen’s Guidance Bureau (FGB) since 1992.</p>


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
