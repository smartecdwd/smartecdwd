<?php
error_reporting(0);
include 'db_con.php';



?>


   <?php include 'header.php'; ?>
<link href="css/mytable.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong|Akaya+Telivigala|Alice|Average|Andada Pro|Enriqueta">
<link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Fredoka+One&family=Roboto+Slab&family=Signika:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">
<style>
    ol.x{
        font-size:17px;font-family:average;color:#000;   
    }
    ol.x li{
        padding-bottom:10px;
    }
    ol.x li a{
        color:;
    }
    ol.x li a:hover{
        color:#7267CB;
    }
    ul.y{
        font-size:15px;font-family:average;color:#000;
    }
    ul.y{
        padding-bottom:10px;
    }
    ul.y li a:hover{
        color:#7267CB;
    }
</style>
<div class="inner_page">
  <div class="container">
    <div class="row border_around p-3 text-justify">
      <div class="col-sm-3" style="background-color:#e1ebea">
	  <h5 style="text-align:center;color:#BB6464;height:50px;padding:20px;font-size:17px;border-bottom:2px solid #BB6464;font-family:Alice"><b>MORE LINKS</b></h5>
           <br>

            <div class="vertical-menu" style="width:100%">
               <!--  <a href="index.php">Home</a> -->
                <!--<a href="email-directory.php">Email Directory</a>-->
				<a href="statutes-acts.php">Statutes and Acts</a>
				<a href="RTI-act-2005-PIO.php">RTI Act 2005 / PIO's</a>
				<a href="UGC-regulations.php">Regulations / Guidelines / Ordinance</a>
                <a href="rti.php" class="active">RTI</a>
                <br>
            </div>
        
      </div><br>
<br>

      <div class="col-sm-9 director_img">
        <h2 class="title_head" style="font-family:Trirong;text-align:center">RTI</h2>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <ol class="x">
                    <li>Application form for seeking information</li>
                    <li><a href="file_upload/rti/RTI Manual.pdf" target="_blank">RTI Act2005 Manual</a></li>
                    <li>RTI Circulars   
                        <ul>
                            <li><a href="file_upload/rti/RTI circular.pdf" target="_blank">RTI Circular 1</a></li>
                            <li><a href="file_upload/rti/RTI circular2.pdf" target="_blank">RTI Circular 2</a></li>
                            <li><a href="file_upload/rti/RTI statement.pdf" target="_blank">RTI Statement</a></li>
                        </ul>
                    </li>
                </ol>
                          
            </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    



    
  </div>
</div>
<div class="clearfix"></div>






	
	
<?php include'footer.php'; ?>
