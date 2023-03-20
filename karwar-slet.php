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
                    
                    <h5 class="my-5">SLET / NET / JRF QUALIFIED STUDENTS</h5>
                    <h5 class="x">LIST OF SRF QUALIFIED STUDENTS</h5>
                    <div class="table-responsive">
                        <table id="customers" style="width:90%;" align="center">
                            <tr style="font-size:12px">
                                <th style="text-align:center;width:8%">Sl. No.</th>
                                <th>Name of the Student / Alumni</th>	
                                <th style="text-align:center;width:10%"> Year of Passing PG </th>
                                <th style="text-align:center;width:15%"> Register No. at Dept. </th>
                                <th style="text-align:center;width:15%"> SLET / NET / JRF Examination passed</th>
                                <th style="text-align:center;width:15%"> Year of Passing SLET / NET / JRF</th>
                                <th style="text-align:center;width:15%"> Register No.</th>
                            </tr>
                            <tr>
                                <td style="text-align:center;width:8%">1.</td>
                                <td> Vinayak Achari</td>
                                <td style="text-align:center;width:10%">2002</td>
                                <td style="text-align:center;width:15%"></td>
                                <td style="text-align:center;width:15%">CSIR-NET</td>
                                <td style="text-align:center;width:15%">2001</td>
                                <td style="text-align:center;width:15%"></td>
                            </tr>
                            <tr>
                                <td style="text-align:center;width:8%">2.</td>
                                <td> Vinayak Kulkarni</td>
                                <td style="text-align:center;width:10%">2006</td>
                                <td style="text-align:center;width:15%">04MS2113</td>
                                <td style="text-align:center;width:15%">CSIR-NET</td>
                                <td style="text-align:center;width:15%"></td>
                                <td style="text-align:center;width:15%"></td>
                            </tr>
                            <tr>
                                <td style="text-align:center;width:8%">3.</td>
                                <td> Roshen Ninan</td>
                                <td style="text-align:center;width:10%">2015</td>
                                <td style="text-align:center;width:15%">13MS2019</td>
                                <td style="text-align:center;width:15%">CSIR-NET</td>
                                <td style="text-align:center;width:15%">2015</td>
                                <td style="text-align:center;width:15%"></td>
                            </tr>
                            <tr>
                                <td style="text-align:center;width:8%">4.</td>	
                                <td> Shalini Sarkar</td>
                                <td style="text-align:center;width:10%">2019</td>
                                <td style="text-align:center;width:15%">17S21009</td>
                                <td style="text-align:center;width:15%">CSIR-NET</td>
                                <td style="text-align:center;width:15%">2021</td>
                                <td style="text-align:center;width:15%"></td>
                            </tr>
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
