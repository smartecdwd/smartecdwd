<?php
    error_reporting(0);
    include 'db_con.php';
?>
<?php include 'header.php'; ?>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong|Akaya+Telivigala|Alice|Average|Andada Pro|Enriqueta">
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Fredoka+One&family=Roboto+Slab&family=Signika:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/css/vstyle1.css">
    <style>
        .nav-link1 li a {
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
          color: white;
        }
        
        
        .nav-link1[data-toggle].collapsed:after {
            content: " ▾";
        }
        .nav-link1[data-toggle]:not(.collapsed):after {
            content: " ▴";
        }
        
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

                        </div>
                    
                </div><br>
                <br>

                <div class="col-sm-9 director_img">
                    <h2 class="title_head" style="font-family:Trirong;text-align:center;color:#000">Post Graduate Center, Karwar</h2>
                    <hr>
                    
                    <h5 class="my-5">GOLD MEDALS & CASH PRIZE</h5>
                    <div class="table-responsive">
                        <table id="customers" style="width:60%;" align="center">
                            <tr style="font-size:12px">
                                <th style="text-align:center;width:10%">Sl. No.</th>
                                <th>Gold Medals / Cash Prize</th>	
                            </tr>
                            <tr><td style="text-align:center;width:10%">1</td><td>	Pradeep H.D</td></tr>
                            <tr><td style="text-align:center;width:10%">2</td><td>	Ganesh K</td></tr>
                            <tr><td style="text-align:center;width:10%">3</td><td>	Baadkar Vaibhav Vilas</td></tr>
                            <tr><td style="text-align:center;width:10%">4</td><td>	Achari Vinayak Shivanand</td></tr>
                            <tr><td style="text-align:center;width:10%">5</td><td>	Sumit Mandal</td></tr>
                            <tr><td style="text-align:center;width:10%">6</td><td>	Achari Sapna Ashok</td></tr>
                            <tr><td style="text-align:center;width:10%">7</td><td>	Surrata Nagendranath Kamat</td></tr>
                            <tr><td style="text-align:center;width:10%">8</td><td>	Dube Praveeen Narayan</td></tr>
                            <tr><td style="text-align:center;width:10%">9</td><td>	Asnotikar Kavita Jayavant</td></tr>
                            <tr><td style="text-align:center;width:10%">10</td><td>	Soniya Gurunath Sawkar</td></tr>
                            <tr><td style="text-align:center;width:10%">11</td><td>	Sheetal Kamalakar Tandel</td></tr>
                            <tr><td style="text-align:center;width:10%">12</td><td>	Feny Jose Fernandis</td></tr>
                            <tr><td style="text-align:center;width:10%">13</td><td>	Naik Roshini Ullhas</td></tr>
                            <tr><td style="text-align:center;width:10%">14</td><td>	Gulnaz Quareshi</td></tr>
                            <tr><td style="text-align:center;width:10%">15</td><td>	Abhisheikh Shyam Jamalabad</td></tr>
                            <tr><td style="text-align:center;width:10%">16</td><td>	Neelam D Pednekar</td></tr>
                            <tr><td style="text-align:center;width:10%">17</td><td>	Sangeeta Narayan Naik</td></tr>
                            <tr><td style="text-align:center;width:10%">18</td><td>	Vijaykumar</td></tr>
                            <tr><td style="text-align:center;width:10%">19</td><td>	Arpita Datta</td></tr>
                            <tr><td style="text-align:center;width:10%">20</td><td>	Anilkumar R Obannavar</td></tr>
                            <tr><td style="text-align:center;width:10%">21</td><td>	Shalini Sarkar</td></tr>
                            <tr><td style="text-align:center;width:10%">22</td><td>	Somani Chinmay Girish</td></tr>
                        </table>
                    </div>
                    
                    <h5 class="my-4">RANK HOLDERS</h5>
                    <div class="table-responsive">
                        <table id="customers" style="width:60%;" align="center">
                            <tr style="font-size:12px">
                                <th style="text-align:center;width:10%">Sl. No.</th>
                                <th>Gold Medals / Cash Prize</th>	
                                <th>Year of Passing</th>
                            </tr>
                            <tr><td style="text-align:center;width:10%">1</td><td>	Pradeep H.D</td><td style="text-align:center;width:15%">1999</td></tr>
                            <tr><td style="text-align:center;width:10%">2</td><td>	Ganesh K</td><td style="text-align:center;width:15%">2000</td></tr>
                            <tr><td style="text-align:center;width:10%">3</td><td>	Baadkar Vaibhav Vilas</td><td style="text-align:center;width:15%">2001</td></tr>
                            <tr><td style="text-align:center;width:10%">4</td><td>	Achari Vinayak Shivanand</td><td style="text-align:center;width:15%">2002</td></tr>
                            <tr><td style="text-align:center;width:10%">5</td><td>	Sumit Mandal</td><td style="text-align:center;width:15%">2003</td></tr>
                            <tr><td style="text-align:center;width:10%">6</td><td>	Achari Sapna Ashok</td><td style="text-align:center;width:15%">2004</td></tr>
                            <tr><td style="text-align:center;width:10%">7</td><td>	Surrata Nagendranath Kamat</td><td style="text-align:center;width:15%">2005</td></tr>
                            <tr><td style="text-align:center;width:10%">8</td><td>	Dube Praveeen Narayan</td><td style="text-align:center;width:15%">2006</td></tr>
                            <tr><td style="text-align:center;width:10%">9</td><td>	Asnotikar Kavita Jayavant</td><td style="text-align:center;width:15%">2007</td></tr>
                            <tr><td style="text-align:center;width:10%">10</td><td>	Soniya Gurunath Sawkar</td><td style="text-align:center;width:15%">2008</td></tr>
                            <tr><td style="text-align:center;width:10%">11</td><td>	Sheetal Kamalakar Tandel</td><td style="text-align:center;width:15%">2009</td></tr>
                            <tr><td style="text-align:center;width:10%">12</td><td>	Feny Jose Fernandis</td><td style="text-align:center;width:15%">2010</td></tr>
                            <tr><td style="text-align:center;width:10%">13</td><td>	Naik Roshini Ullhas</td><td style="text-align:center;width:15%">2011</td></tr>
                            <tr><td style="text-align:center;width:10%">14</td><td>	Gulnaz Quareshi</td><td style="text-align:center;width:15%">2012</td></tr>
                            <tr><td style="text-align:center;width:10%">15</td><td>	Abhisheikh Shyam Jamalabad</td><td style="text-align:center;width:15%">2013</td></tr>
                            <tr><td style="text-align:center;width:10%">16</td><td>	Neelam D Pednekar</td><td style="text-align:center;width:15%">2014</td></tr>
                            <tr><td style="text-align:center;width:10%">17</td><td>	Sangeeta Narayan Naik</td><td style="text-align:center;width:15%">2015</td></tr>
                            <tr><td style="text-align:center;width:10%">18</td><td>	Vijaykumar</td><td style="text-align:center;width:15%">2016</td></tr>
                            <tr><td style="text-align:center;width:10%">19</td><td>	Arpita Datta</td><td style="text-align:center;width:15%">2017</td></tr>
                            <tr><td style="text-align:center;width:10%">20</td><td>	Anilkumar R Obannavar</td><td style="text-align:center;width:15%">2018</td></tr>
                            <tr><td style="text-align:center;width:10%">21</td><td>	Shalini Sarkar</td><td style="text-align:center;width:15%">2019</td></tr>
                            <tr><td style="text-align:center;width:10%">22</td><td>	Somani Chinmay Girish</td><td style="text-align:center;width:15%">2020</td></tr>
                            <tr><td style="text-align:center;width:10%">23</td><td>	Shrutika Raut</td><td style="text-align:center;width:15%">2021</td></tr>
                        </table>
                    </div>
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
