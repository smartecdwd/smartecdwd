<?php
    error_reporting(0);
    include 'db_con.php';
?>
<?php include 'header.php'; ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong|Akaya+Telivigala|Alice|Average|Andada Pro|Enriqueta">
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Fredoka+One&family=Roboto+Slab&family=Signika:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">
    <style>
        p{font-family:Average;font-size:17px;color:#000;margin:10px;}
    </style>

<div class="inner_page">
    <div class="container">
        <div class="row border_around p-3 text-justify">
            <div class="col-sm-12">
                 <h2 class="title_head" style="font-family:Domine; font-weight:600; padding-top:30px;">Karnatak University Audio Gallery &nbsp;<i class="fa fa-caret-right"></i>  </h2>
            <div id="portfoliolist">
        
                        <?php
			 	 	        $qry="select * from gal_audio order by ftitle";
                            $res=mysqli_query($conn,$qry);
                            $cnt=1;
                            while($row=mysqli_fetch_assoc($res))
		    			    {
			    	    ?>	    <div class="portfolio foundation col-sm-3" data-cat="">
                                    <div class="portfolio-wrapper">
				                        <audio controls >
                                            <source src="https://kud.ac.in/admin_panel/gallery/file_upload/audio/<?php echo $row['fname']; ?>">
                                        </audio>  
                                         <br><br><br>
                                        <div class="pic_title" style="background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(6,81,169,1) 58%, rgba(5,93,177,1) 62%, rgba(0,212,255,1) 100%)">
                                             <?php echo $cnt++ . ". " . $row['ftitle']; ?>
                                        </div>
                                    </div>
                                </div>
                            <?}?>
                    
            </div>
            </div>
        </div>
        </div>
    
    </div>

<div class="clearfix"></div>



  <script type="text/javascript">
  $(function () {

    var filterList = {

      init: function () {

        $('#portfoliolist').mixItUp({

          selectors: {
            target: '.portfolio',
            filter: '.filter'
          },
          load: {
            filter: '.foundation'
          }
        });

      }

    };

    // Run the show!
    filterList.init();


  });
  </script>
<div class="clearfix"></div>
<?php include'footer.php'; ?>
