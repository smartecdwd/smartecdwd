<?php
    error_reporting(0);
    include 'db_con.php';
?>
<?php include 'header.php'; ?>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong|Akaya+Telivigala|Alice|Average|Andada Pro|Enriqueta">
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Fredoka+One&family=Roboto+Slab&family=Signika:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/css/vstyle1.css">
    <style>
        /*.nav-link1 li a {
          background-color: #e1ebea;
          color: black;
          display: block;
          padding: 12px;
          text-decoration: none;
          border-bottom:1px dotted #BB6464;
          font-family:exo;
        }
        
        .nav-link1 li a:hover {
          background-color: #ccc;
        }
        
        .nav-link1 li a.active {
          background-color:#BB6464 ; /*#6495ED;*/
         /* color: white;
        }
        
        
        .nav-link1[data-toggle].collapsed:after {
            content: " ▾";
        }
        .nav-link1[data-toggle]:not(.collapsed):after {
            content: " ▴";
        }*/
        
        p{font-family:Average;font-size:17px;color:#000;margin:10px;padding:10px}
        h5{font-family:Alice;color:#0074B7;font-weight:bold;}
        
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

                            
                          
                            <!--</a>-->
                            
                        </div>
                    
                </div><br>
                <br>

                <div class="col-sm-9 director_img">
                    <h2 class="title_head" style="font-family:Trirong;text-align:center;color:#000">Post Graduate Center, Karwar</h2>
                    <hr>
                    
                    <h5 class="my-5">INFRASTRUCTURE</h5>
                    <div class="table-responsive">
                        <table id="customers" style="width:60%;" align="center">
                            <tr style="font-size:12px">
                                <th style="text-align:center;width:10%">Sl. No.</th>
                                <th>Rooms</th>	
                                <th style="text-align:center;width:10%"> Nos.</th>
                            </tr>
                            <tr><td style="text-align:center;width:10%">1</td><td>Class Rooms</td><td style="text-align:center;width:15%">6</td></tr>
                            <tr><td style="text-align:center;width:10%">2</td><td>Smart Class Rooms </td><td style="text-align:center;width:15%">4</td></tr>
                            <tr><td style="text-align:center;width:10%">3</td><td>Computer Laboratories</td><td style="text-align:center;width:15%">2</td></tr>
                            <tr><td style="text-align:center;width:10%">4</td><td>Laboratories</td><td style="text-align:center;width:15%">4</td></tr>
                            <tr><td style="text-align:center;width:10%">5</td><td>Total Computers</td></td><td style="text-align:center;width:15%">30</td></tr>
                            <tr><td style="text-align:center;width:10%">6</td><td>Faculty / HoD Cabins</td><td style="text-align:center;width:15%">3</td></tr>
                            <tr><td style="text-align:center;width:10%">7</td><td>TA / GF Cabins</td><td style="text-align:center;width:15%">2</td></tr>
                            <!--<tr><td style="text-align:center;width:10%">8</td><td>Books</td><td style="text-align:center;width:15%">2176</td></tr>-->
                            
                        </table>
                    </div>
                    
                    <h5 class="my-5">LIBRARY</h5>
                    <div class="table-responsive">
                        <table id="customers" style="width:60%;" align="center">
                            <tr style="font-size:12px">
                                <th style="text-align:center;width:10%">Sl. No.</th>
                                <th>Details</th>	
                                <th style="text-align:center;width:10%"> Nos.</th>
                            </tr>
                            <tr><td style="text-align:center;width:10%">1</td><td>Marine Biology</td><td style="text-align:center;width:15%">2214</td></tr>
                            <tr><td style="text-align:center;width:10%">2</td><td>Commerce</td><td style="text-align:center;width:15%">2361</td></tr>
                            <tr><td style="text-align:center;width:10%">3</td><td>M. A. English</td><td style="text-align:center;width:15%">1869</td></tr>
                            <tr><td style="text-align:center;width:10%">4</td><td>Total No. of Books</td><td style="text-align:center;width:15%">6444</td></tr>
                        </table>
                    </div>
                    <div class="table-responsive my-5">
                        <table id="customers" style="width:60%;" align="center">
                            <td>No. of Journals</td>
                            <td class="text-center">08</td>
                        </table>
                    </div>
                    
                    <h5 class="my-5">LIBRARY</h5>
                    <center><img src="images/karwar/lib.jpg" class="img-fluid" style="width:100%;height:400px"></center><br>
                    
                    <h5 class="my-5">COMPUTER LAB</h5>
                    <center><img src="images/karwar/comp_lab.jpg" class="img-fluid" style="width:100%;height:400px"></center><br>
                </div>
                
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script>
      $('.sub-menu ul').hide();
$(".sub-menu a").click(function () {
	$(this).parent(".sub-menu").children("ul").slideToggle("100");
	$(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
});
      </script>
	
<?php include'footer.php'; ?>
