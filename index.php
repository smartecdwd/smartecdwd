<?php
error_reporting(0);
include 'db_con.php';

?>
<?php 
  include 'header.php';
  ?>

    <link href="https://fonts.googleapis.com/css2?family=Arvo&family=Libre+Baskerville&family=Merriweather+Sans:wght@300&family=Montserrat&family=Roboto,wght@1,300&family=Noto+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong|Akaya+Telivigala|Alice|Average|Andada Pro|Righteous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!--<link rel="stylesheet" href="css/popup.css">-->
    <script href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/61ebb60581.js" crossorigin="anonymous"></script>
    <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4000">
	<div class="carousel-inner">
	<div class="carousel-item active">
			<img class="d-block w-100" src="image/banner-3.jpg"  />
		</div>
	

		<div class="carousel-item">
			<img class="d-block w-100" src="image/banner-1.jpg"  />
		</div>
		
		<div class="carousel-item">
			<img class="d-block w-100" src="image/banner-6.jpg"  />
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="image/banner-7.jpg"  />
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="image/banner-8.jpg"  />
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="image/banner-9.jpg"  />
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="image/banner-10.jpg"  />
		</div>
		<!-- <div class="carousel-item">
			<img class="d-block w-100" src="image/banner-2.jpg"  />
		</div>

	</div>
	<div class="carousel-item">
			<img class="d-block w-100" src="image/banner-5.jpg"  />
			
		</div> -->
	
	
	

	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
<div class="clearfix"></div>

			<div>
			    <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-between align-items-center breaking-news" style="background-color:#3A4968">
                            <div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center py-2 text-white px-1 news"></div>
                                <marquee class="news-scroll" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"> 
                                        <?php
						                   /* $qry="select * from announce where status ='Active' order by adate desc";
						                    $res=mysqli_query($conn,$qry);
						                    $cnt=1;
						                    while($row=mysqli_fetch_array($res))
						                    {
                                                 echo "<a href='announcement1.php?nid=".$row['aid']."' style='font-family:Andada Pro;font-size:15px;border-right:1px solid #fff;padding:15px;color:#fff' target='_blank'>".$row['adata']."<!--<img src='image/new-gif-image-6.gif' width='50' height='30' />--></a><span class='dot'></span>";
						                    }*/
                                        ?>
                                        <a style='font-family:Andada Pro;font-size:15px;border-right:1px solid #fff;padding:15px;color:#fff' target='_blank'>Accredited by NAAC with 'A' Grade </a><span class='dot'></span>
                                        <a style='font-family:Andada Pro;font-size:15px;color:#fff;padding:15px' target='_blank'>University with Potential for Excellence</a><span class='dot'></span>
                                </marquee>
                            </div>
                        </div>
                    </div>
		<!--	<div class="layout layout--onecol">
			<!--<div  class="layout__region layout__region--content" style="background-color:#3A4968">
			<div data-block-plugin-id="views_block:home_page-hpg_announcements">
			<div class="content block-content">
			<div class="views-element-container" style="background-color:#3A4968">
			<div class="view view-home-page view-id-home_page view-display-id-hpg_announcements js-view-dom-id-87efe3a01df099c59889f7e149ac0b24d707c1af47b0ef052d8f12dd799e5887" style="background-color:#3A4968">
			
			
			
			
			<div class="view-content" style="background-color:#3A4968">
			<!-- Announcements Section Start -->
		<!--	<div class="announcements" style="background-color:#3A4968">
			<div class="container" style="background-color:#3A4968">-->
			<!--<p class="announcements__text" aria-hidden="true" style="padding:0px 0px;"><span class="fa fa-bullhorn"></span> Announcements</p>-->
			    <!--<p class="announcements__text" aria-hidden="true" style="padding:0px 0px;"><img src="images/ann2.png">Announcements</p> -->
			<!--<div class="marquee__movecotent">
			<div id="marqueeContent" class="marquee__content clearfix">-->
			   <!-- <div class="d-flex justify-content-between align-items-center breaking-news" style="background-color:#3A4968">
                    <div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center bg-danger py-2  px-1 news"></div>
                <marquee class="news-scroll" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"> <!--<a href="#">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </a> <span class="dot"></span> <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut </a> <span class="dot"></span> <a href="#">Duis aute irure dolor in reprehenderit in voluptate velit esse </a>--> 
            <!--</div>-->
                   <!-- <a href='#' style='font-family:Andada Pro;font-size:14px;border-right:1px solid #fff;padding-left:10px'>Accredited by NAAC with "A" Grade </a>-->
				<?php
						/*$qry="select * from announce where status ='Active' order by adate desc";
						$res=mysqli_query($conn,$qry);
						$cnt=1;
						while($row=mysqli_fetch_array($res))
						{*/
						//echo "<div class='announcements__list'>";
						
						//echo "<a href='announcements.php?nid=".$row['aid']."' style='font-family:Andada Pro;font-size:12px'>".$row['adata']."<img src='image/new-gif-image-6.gif' width='50' height='30'/></a></li>";
						//echo "</div>";
						   /* echo "<a href='announcement1.php?nid=".$row['aid']."' style='font-family:Andada Pro;font-size:14px;border-right:1px solid #fff;padding-left:10px'>".$row['adata']."<img src='image/new-gif-image-6.gif' width='50' height='30' target='_blank' /></a>";
						}*/
				?>
			   <!-- </marquee>
			    </div>
			</div>-->
			<!--<div class="announcements__list">
			<a href="# " style="font-family:Andada Pro;font-size:12px">Webex and classes starts on 29th November, 2021 Online. Details will be sent to candidates by email.</a>
			</div>
			<div class="announcements__list">
			<a href="# " style="font-family:Andada Pro;font-size:12px">Karnatak University Dharwad</a>
			</div>
			<div class="announcements__list">
			<a href="#"style="font-family:Andada Pro;font-size:12px">Research Degree Programmes</a>
			</div>-->
			
			
			<!--</div>-->
		<!--	</div>
			</div>
			</div>
			
			</div>
			
			</div>
			</div>
			
			</div>-->
			</div>
			
			</div>
			</div>	
			</div>
			
			
			
			
<div class="inner_page">
  <div class="container">
    <div class="row border_around p-3 text-justify">
        
            <div class="col-sm-12">
                <h2 class="title_head"><span style="font-family:Alice"> Vice - Chancellor Message</span></h2>
                <hr style="width:100%">
            </div>
        
        <div class="row" >
            <div class="col-sm-3 vc_img text-center">
                <center><img src="images/Dr.KBGudasi-VC.jpg" class="img-fluid center-block img-responsive"/> <span style="color:#000099; font-weight:600; text-align:center;font-family:Trirong"><br>Prof. K.B. Gudasi<br>Vice-Chancellor</span></center>
            </div>
            <div class="col-sm-8">
                <p style="font-family:Average;font-size:18px;color:#000">The Bombay legislature of the erstwhile Bombay Presidency established Karnatak University through the Karnatak University Act 1949. It became a statutory University on 1st March 1950. The jurisdiction of the University covers Dharwad. Gadag, Haveri and Uttar Kannada districts. It has several Post Graduate centres.</p>
        
		            <a href="#" class="view_btn" style="height:100px">View more</a>
            </div>
        </div>
	   <!-- <div class="col-sm-6">
        <h2 class="title_head">Karnatak University Dharwad</h2>
        <hr>
        <p>The Bombay legislature of the erstwhile Bombay Presidency established Karnatak University through the Karnatak University Act 1949. It became a statutory University on 1st March 1950. The jurisdiction of the University covers Dharwad. Gadag, Haveri and Uttar Kannada districts. It has several Post Graduate centres.</p>
		<a href="about-kud.php" class="view_btn">View more</a>
      </div> -->
    </div>
  </div>
</div>


<div class="pricing-div">
			<ul class="plan">
    			<a href="uucms.php">
    			    <i class="fa fa-mortar-board sub-ct" aria-hidden="true"></i>
    			    <li><h4 style="font-family: 'Jockey One';">UUCMS - UG Admission 2022-23  </h4></li>
    			</a>
			</ul>
			<ul class="plan">
    			<a href="colleges-institutes.php">
    		    	<i class="fa fa-university sub-ct" aria-hidden="true"></i>
    			    <li><h4 style="font-family: 'Jockey One', sans-serif;">Colleges and Institutes</h4></li>
    			</a>
			</ul>
			<ul class="plan">
			    <a href="USIC.php">
			        <i class="fa fa-microscope sub-ct"  style="font-size:24px" aria-hidden="true"></i>
			        <li><h4 style="font-family: 'Jockey One', sans-serif;">University Scientific and Instruments Centre</h4></li>
			    </a>
			</ul>
			<ul class="plan">
			<a href="#" target="_blank">
			<i class="fa fa-book-reader sub-ct" aria-hidden="true"></i>
			<li><h4 style="font-family: 'Jockey One', sans-serif;">School of <span>Correspondence</span></h4></li></a>
			</ul>
			<ul class="plan">
			<a href="iqac.php">
			<i class="fa fa-dice-d20 sub-ct" aria-hidden="true"></i>
			
			<li><h4 style="font-family: 'Jockey One', sans-serif;">Internal Quality Assurance Cell</h4></li></a>
			</ul>



			<ul class="plan">
			<a href="results.php">
			
			 <div class="ssub-ct">
			<i class="fa fa-clipboard" aria-hidden="true"></i> 
			</div> 
			  
			<li><h4 style="font-family: 'Jockey One', sans-serif;">Results</h4></li></a>
			</ul> 



</div>


			
		
			
			
			
<div class="news_notify" id="news_notification">
	<div class="container">
		<div class="row">
			
			
			

<div class="col-sm-4 mt-4 mb-4">
	<h2 style="font-family:Alice;color:#000;text-align:center;font-size:22px;"><strong>Notifications / Circulars</strong></h2>
	<div class="d-inline-block text-right button">
		<button class="btnDown  btn btn-xs btn-danger"><i class="fa fa-angle-up"></i></button>
		<button class="btnUp btn btn-xs btn-danger"><i class="fa fa-angle-down"></i></button>
	</div>
	<hr />
	<div class="publication demof">
		<ul>
			

			<?php
                                $qry="select * from notification where nstatus ='A' order by ndate desc";
                                $res=mysqli_query($conn,$qry);
                                $cnt=1;
                                while($row=mysqli_fetch_array($res))
                                {
                                   
                                    echo "<li class='odd' style='font-family:Average;color:#000;text-align:justify;font-size:11px;text-transform:capitalize;font-weight:0px'><img src='image/new-gif-image-6.gif' width='10' height='20'/><a href='notifications-circular.php?nid=".$row['nid']."'>".$row['nname']." <br> <span style='color:green'>Posted on :" . date('d-M-Y',strtotime($row['ndate']))."</span></a></li>";
                                   
                                }
                            ?>
		</ul>
		<?php mysqli_close($row); ?>
         
	</div>
	<h4 style="margin-top:5px !important;"><a href="notifications.php" style="font-family: 'Jockey One'; font-size:15px;color:#ee1e1e">View More<span style="margin-left:5px;"><i class="fa fa-angle-right"></i>
                    </span></a> </h4>

</div>

		<div class="col-sm-4 mt-4 mb-4">
				<h2 style="font-family:Alice;color:#000;text-align:center;font-size:22px;"><strong>News/Events</strong></h2>
				<hr>
				
				<div id='news' class="owl-carousel owl-theme">

				<div class="item">
						<figure class="card card-sm card-product relative">
							<div class="img-wrap"><img src="images/Periodicals-min-compressed.jpg" class="img-fluid"> </div>
							<figcaption class="info-wrap text-center">
								<p class="card-text"><strong>
								    Karnatak University Library Section
								     </strong> </p>
								    
							</figcaption>
						</figure>
					</div> 
					<div class="item">
						<figure class="card card-sm card-product relative">
							<div class="img-wrap"><img src="images/Paragola-min-compressed.jpg" class="img-fluid"> </div>
							<figcaption class="info-wrap text-center">
								<p class="card-text"></p>
								<a href="#" class="view_btn" >View more</a>
							</figcaption>
						</figure>
					</div>
			</div>
		</div>
<div class="clearfix"></div>
<div class="col-sm-4 mt-4 mb-4">
	<h2 class="text-center" style="font-family:Alice;color:#000;font-size:22px;">
		<strong>Quick Links</strong>
	</h2>
	<div class="d-inline-block text-right button">
		<button class="butnUp btn btn-xs btn-danger"><i class="fa fa-angle-up"></i></button>
		<button class="butnDown btn btn-xs btn-danger"><i class="fa fa-angle-down"></i></button>
	</div>
	<hr />
	<div class="bg_white">


		<div>
			<ul class="list-unstyled notify_list">


			
				<li>
				    <a href="file_upload/nrif/NIRF 2020-21.pdf" class="btn btn-primary btn-md btn-block" role="button" target="_blank"
					    style="font-family:Andada Pro;background-color:#613659;border:1px solid #C197D2;border-radius:10px">NIRF </a>
					<a href="https://hrdckud.net/" class="btn btn-md btn-block" role="button" target="_blank" 
					    style="font-family:Andada Pro;background-color:#613659;border:1px solid #C197D2;border-radius:10px">Human Resource Development Centre</a>
					<!-- <button type="button" class="btn btn-primary btn-md btn-block">Block level button</button> -->
					<a href="online-fee-payment.php" class="btn btn-primary btn-md btn-block" role="button" 
					    style="font-family:Andada Pro;background-color:#613659;border:1px solid #C197D2;border-radius:10px">Online Fee Payment </a>
					<a href="http://saifora.iitb.ac.in/crnts/Online_Ext_Reg/Web_Portal_DST_SAIF/DST_SAIF_All/DST_SAIF_All_Ext_User_Login.jsp?dsidexurln=wMyxviEHHZGJ0W+Jm2D16A==" class="btn btn-primary btn-md btn-block" role="button" target="_blank"
					style="font-family:Andada Pro;background-color:#613659;border:1px solid #C197D2;border-radius:10px">SAIF Login </a>
					<a href="#" class="btn btn-primary btn-md btn-block" role="button" target="_blank"
					style="font-family:Andada Pro;background-color:#613659;border:1px solid #C197D2;border-radius:10px">CDC </a>
					<a href="http://www.kudlibrary.ac.in/" class="btn btn-primary btn-md btn-block" role="button" target="_blank"
					    style="font-family:Andada Pro;background-color:#613659;border:1px solid #C197D2;border-radius:10px">Library  </a>
					
				</li>
				
				
				

		</ul>
	</div>
</div>
</div>
</div>
</div>
</div>


<div class="clearfix"></div>
<br />



 <!--------------------------New Gallery---------------------------------->
    <div class="container">
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 p-slide">
            <h3 style="font-family:Alice;color:#000;font-size:22px;">Photo Gallery</h3>
          <div id="carousel-demo" class="carousel slide" data-ride="carousel">
                <!-- Sliding images statring here -->
                <div class="carousel-inner">

                    <div class="item active"> <img src="images/Front-Elivation-min-compressed.jpg"> </div>
                    <div class="item"> <img src="images/Paragola-min-compressed.jpg"></div>
                    <div class="item"> <img src="images/Browsing-corner-min-compressed.jpg"></div>
                    <div class="item"> <img src="images/Periodicals-min-compressed.jpg"></div>
                    
                </div>
              <!-- Next / Previous controls here -->
              <a class="left carousel-control" href="#carousel-demo" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="right carousel-control" href="#carousel-demo" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            </div>

            <h4 style="margin-top:12px !important;"><a href="gallery.php" style="font-family: 'Jockey One', sans-serif; font-size:14px">More Images<span style="margin-left:5px;"><i class="fa fa-angle-right"></i>
                    </span></a> </h4>
        </div>




        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 p-slide">
            <h3 style="font-family:Alice;color:#000;font-size:22px;">Video Gallery</h3>
            <a href="index.html" style="">
                <div>

                    <div>
                        <div class="item active">



                            <iframe width="100%" height="300px" src="https://www.youtube.com/embed/erKiwMQ4u7k"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>


                            

                        </div>
						
                    </div>
					
					


				<h4 style="margin-top:12px !important;"><a href="video-gallery.php" style="font-family: 'Jockey One', sans-serif; font-size:14px">More Videos<span style="margin-left:5px;"><i class="fa fa-angle-right"></i>
                    </span></a>
                    <a href="gal_audio.php" style="font-family: 'Jockey One', sans-serif; font-size:14px;float:right">Audio Gallery<span style="margin-left:5px;"><i class="fa fa-angle-right"></i>
                    </span></a>
                    </h4>



                </div>


        </div>

        </a>

      

    </div>

  

    </div>
    </div>

    <!-- Popup Modal-->
        <!--<div class="popup" data-keyboard="false" data-backdrop="static">
            <button id="close">&times;</button>
               <h2> ???????????????  ????????????????????? ???????????????????????????   </h2>
                <p>
                    ????????????????????? ?????????????????? 7 ????????????, 2022, ???????????????????????? 3:00 ??????????????????       
                </p>
                <br><br>
                <h2>72nd Annual Convocation   </h2>
                <p>
                    Tuesday 7th June, 2022, at 3:00 p.m.
                </p>
        <a href="file_upload/convo/72nd Annual Convocation Invitation.pdf" target="_blank" class="x">Invitation</a>
        </div>
        <h1>CG Congrats modal</h1>

<!-- Modal -->

        <!--Script-->
        <!--<script type="text/javascript">
                window.addEventListener("load", function(){
                setTimeout(
                    function open(event){
                    document.querySelector(".popup").style.display = "block";
                    },
                    200 
                )
            });


            document.querySelector("#close").addEventListener("click", function(){
            document.querySelector(".popup").style.display = "none";
        });
    </script>-->
  
<!-- End-->

    <script type="text/javascript">

        jQuery(document).ready(function () {

            jQuery("#gallery").unitegallery({
                theme_panel_position: "bottom",
                gallery_autoplay: true,						//true / false - begin slideshow autoplay on start
                gallery_play_interval: 3000,
            });


            jQuery("#gallery1").unitegallery({
                theme_panel_position: "bottom",
                gallery_autoplay: true,						//true / false - begin slideshow autoplay on start
                gallery_play_interval: 3000,
            });


        });


    </script>



	<div class="clearfix"></div>

	
	
<?php include'footer.php'; ?>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
