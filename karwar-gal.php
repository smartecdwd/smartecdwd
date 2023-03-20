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
        
        .lightbox-gallery{background-image: linear-gradient(#4A148C, #E53935);background-repeat: no-repeat;color: #000;overflow-x: hidden}.lightbox-gallery p{color:#fff}.lightbox-gallery h2{font-weight:bold;margin-bottom:40px;padding-top:40px;color:#fff}@media (max-width:767px){.lightbox-gallery h2{margin-bottom:25px;padding-top:25px;font-size:24px}}.lightbox-gallery .intro{font-size:16px;max-width:500px;margin:0 auto 40px}.lightbox-gallery .intro p{margin-bottom:0}.lightbox-gallery .photos{padding-bottom:20px}.lightbox-gallery .item{padding-bottom:30px}
		.img-fluid{
			width:100%;
			height:250px;
			border:2px solid #81B622;
		}
		.row{padding:15px 0;		}
		
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
                    
                    <h5 class="my-5">GALLERY</h5>
                    <div class="row photos gy-3">
						<div class="col-sm-6 col-md-6 col-lg-6 item"><a href="https://www.kud.ac.in/file_upload/karwar/gal/1kar.jpg" data-lightbox="photos"><img class="img-fluid" src="https://www.kud.ac.in/file_upload/karwar/gal/1kar.jpg" style="border-width:2px"></a></div>
						<div class="col-sm-6 col-md-6 col-lg-6 item"><a href="https://www.kud.ac.in/file_upload/karwar/gal/2kar.jpg" data-lightbox="photos"><img class="img-fluid" src="https://www.kud.ac.in/file_upload/karwar/gal/2kar.jpg" style="border-width:2px"></a></div>
					</div>
					<div class="row photos gy-3">
						<div class="col-sm-6 col-md-6 col-lg-6 item"><a href="https://www.kud.ac.in/file_upload/karwar/gal/3kar.jpg" data-lightbox="photos"><img class="img-fluid" src="https://www.kud.ac.in/file_upload/karwar/gal/3kar.jpg" style="border-width:2px"></a></div>
						<div class="col-sm-6 col-md-6 col-lg-6 item"><a href="https://www.kud.ac.in/file_upload/karwar/gal/4kar.jpg" data-lightbox="photos"><img class="img-fluid" src="https://www.kud.ac.in/file_upload/karwar/gal/4kar.jpg" style="border-width:2px"></a></div>
					</div>	
					<div class="row photos gy-3">
						<div class="col-sm-6 col-md-6 col-lg-6 item"><a href="https://www.kud.ac.in/file_upload/karwar/gal/5kar.jpg" data-lightbox="photos"><img class="img-fluid" src="https://www.kud.ac.in/file_upload/karwar/gal/5kar.jpg" style="border-width:2px"></a></div>
						<div class="col-sm-6 col-md-6 col-lg-6 item"><a href="https://www.kud.ac.in/file_upload/karwar/gal/6kar.jpg" data-lightbox="photos"><img class="img-fluid" src="https://www.kud.ac.in/file_upload/karwar/gal/6kar.jpg" style="border-width:2px"></a></div>
					</div>	
					<div class="row photos gy-3">
						<div class="col-sm-6 col-md-6 col-lg-6 item"><a href="https://www.kud.ac.in/file_upload/karwar/gal/7kar.jpg" data-lightbox="photos"><img class="img-fluid" src="https://www.kud.ac.in/file_upload/karwar/gal/7kar.jpg" style="border-width:2px"></a></div>
						<div class="col-sm-6 col-md-6 col-lg-6 item"><a href="https://www.kud.ac.in/file_upload/karwar/gal/9kar.jpg" data-lightbox="photos"><img class="img-fluid" src="https://www.kud.ac.in/file_upload/karwar/gal/9kar.jpg" style="border-width:2px"></a></div>
					<!--	<div class="col-sm-6 col-md-6 col-lg-6 item"><a href="https://www.kud.ac.in/file_upload/karwar/gal/8kar.jpg" data-lightbox="photos"><img class="img-fluid" src="https://www.kud.ac.in/file_upload/karwar/gal/8kar.jpg" style="border-width:2px"></a></div>-->
					
					</div>	
					<div class="row photos gy-3">
						<div class="col-sm-6 col-md-6 col-lg-6 item"><a href="https://www.kud.ac.in/file_upload/karwar/gal/10kar.jpg" data-lightbox="photos"><img class="img-fluid" src="https://www.kud.ac.in/file_upload/karwar/gal/10kar.jpg" style="border-width:2px"></a></div>
						<div class="col-sm-6 col-md-6 col-lg-6 item"><a href="https://www.kud.ac.in/file_upload/karwar/gal/11kar.jpg" data-lightbox="photos"><img class="img-fluid" src="https://www.kud.ac.in/file_upload/karwar/gal/11kar.jpg" style="border-width:2px"></a></div>
					</div>	
					<div class="row photos gy-3">
						<div class="col-sm-6 col-md-6 col-lg-6 item"><a href="https://www.kud.ac.in/file_upload/karwar/gal/12kar.jpg" data-lightbox="photos"><img class="img-fluid" src="https://www.kud.ac.in/file_upload/karwar/gal/12kar.jpg" style="border-width:2px"></a></div>
						<div class="col-sm-6 col-md-6 col-lg-6 item"><a href="https://www.kud.ac.in/file_upload/karwar/gal/13kar.jpg" data-lightbox="photos"><img class="img-fluid" src="https://www.kud.ac.in/file_upload/karwar/gal/13kar.jpg" style="border-width:2px"></a></div>
					</div>	
					<div class="row photos gy-3">
						<div class="col-sm-6 col-md-6 col-lg-6 item"><a href="https://www.kud.ac.in/file_upload/karwar/gal/14kar.jpg" data-lightbox="photos"><img class="img-fluid" src="https://www.kud.ac.in/file_upload/karwar/gal/14kar.jpg" style="border-width:2px"></a></div>
						<div class="col-sm-6 col-md-6 col-lg-6 item"><a href="https://www.kud.ac.in/file_upload/karwar/gal/15kar.jpg" data-lightbox="photos"><img class="img-fluid" src="https://www.kud.ac.in/file_upload/karwar/gal/15kar.jpg" style="border-width:2px"></a></div>
					</div>	
					<div class="row photos gy-3">
						<div class="col-sm-6 col-md-6 col-lg-6 item"><a href="https://www.kud.ac.in/file_upload/karwar/gal/16kar.jpg" data-lightbox="photos"><img class="img-fluid" src="https://www.kud.ac.in/file_upload/karwar/gal/16kar.jpg" style="border-width:2px"></a></div>
						<div class="col-sm-6 col-md-6 col-lg-6 item"><a href="https://www.kud.ac.in/file_upload/karwar/gal/17kar.jpg" data-lightbox="photos"><img class="img-fluid" src="https://www.kud.ac.in/file_upload/karwar/gal/17kar.jpg" style="border-width:2px"></a></div>
					</div>	
					<div class="row photos gy-3">
						<div class="col-sm-6 col-md-6 col-lg-6 item"><a href="https://www.kud.ac.in/file_upload/karwar/gal/18kar.jpg" data-lightbox="photos"><img class="img-fluid" src="https://www.kud.ac.in/file_upload/karwar/gal/18kar.jpg" style="border-width:2px"></a></div>
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
