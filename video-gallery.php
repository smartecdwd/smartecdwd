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
<!--<div class="page_head">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1 class="d-block">Karnatak University Dharwad</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
			
            <li class="breadcrumb-item active" aria-current="page">Video Gallery</li>
            
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>
-->

<div class="inner_page">
  <div class="container">


    <div id="portfoliolist">
     
      <div class="portfolio events" data-cat="events">

  <div class="portfolio-wrapper">
    <iframe width="100%" height="200" src="https://www.youtube.com/embed/erKiwMQ4u7k" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  </div>
</div>

<div class="portfolio events" data-cat="events">

  <div class="portfolio-wrapper">
    <iframe width="100%" height="200" src="https://www.youtube.com/embed/91RnMdePs0Y" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
            filter: '.events'
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
