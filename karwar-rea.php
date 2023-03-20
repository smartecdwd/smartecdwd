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
                    
                    <h5 class="my-5">RESEARCH</h5>
                    <ul class="mx-4 p-5">
                        <li><a href="https://www.kud.ac.in/file_upload/karwar/phd-awarded.pdf" target="_blank" style="font-family:average;font-size:17px;padding:10px;display:block;color:#9F2B00"> Ph. D. Awarded</a></li>
                        <li><a href="https://www.kud.ac.in/file_upload/karwar/phd-ongoing.pdf" target="_blank" style="font-family:average;font-size:17px;padding:10px;display:block;color:#9F2B00"> Ph. D. Ongoing</a></li>
                        <li><a href="https://www.kud.ac.in/file_upload/karwar/phd-undertaking.pdf" target="_blank" style="font-family:average;font-size:17px;padding:10px;display:block;color:#9F2B00"> Ph. D. Undertaken</a></li>
                    </ul>
                    
                    <h5 class="x">EXTENSION PROJECTS</h5>
                    <ul class="mx-4 p-5" style="font-family:average; font-size:17px;text-align:justify">
                        <li class="pb-3">
                            Project Entitled <strong>“Composition and Distributions of Planktons along the Karwar Coast”</strong>  Funded by Grasim Chemical Division Ltd, Binaga, Karwar, Karnataka. Grant – Rs. 3,50,000/-.
                        </li>
                        <li class="pb-3">
                            Project Entitled <strong>“Economic evaluation of Bivalve Fisheries along the Aghanashini estuary in connection with Development of Multipurpose All Weather Sea Port” </strong> at Tadadi, Karnataka.  Funded by Karnataka State Industrial Infrastructure Development Agency. Govt. of Karnataka.  March 2017. Total Grant – Rs. 4,95,000/-.
                        </li>
                        <li class="pb-3">
                            Project Entitled <strong>“Ecological Assessments of Marine Ecosystem Around the Effluent Discharge Site of Aditya Birla Chemical Division, Karwar”</strong>. Funded by Grasim Chemical Division, Binaga, Karwar, Karnataka. 2016. Total Grant – Rs. 4,50,000/- 
                        </li>
                        <li class="pb-3">
                            Project Entitled <strong>“Fisheries resource along the upstream and downstream of river Gangavali in view of construction of Ventad barrage at Honnalli, Ankola, Uttara Kannada”</strong>. Funded by Karnataka Urban Water and Drainage Board. Bangalore. 2019. Grant: 175,000/-
                        </li>
                    </ul>
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
