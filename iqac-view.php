<?php
error_reporting(0);
require('db_con.php');



?>


<?php include 'iqac-header.php'; ?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong|Akaya+Telivigala|Alice|Average|Andada Pro|Enriqueta">
<link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Fredoka+One&family=Roboto+Slab&family=Signika:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">
<link href="css/dep_mytable.css">
			
<style>
    h5{font-family:Alice;color:#0074B7;text-align:center;font-size:20px}
    p{font-family:Average;font-size:17px;text-align:justify;margin:20px}
    h3{font-family:Enriqueta;font-size:15px;text-align:center}
</style>
<div class="inner_page academics">
  <div class="container">
    <div class="row p-3 text-justify">
      <div class="col-12 mb-sm-3">
	  <?php
                                $nid=$_REQUEST['nid'];
                                $qry="select * from iq_team where iq_tid=".$nid."";
                                $res=mysqli_query($conn,$qry);
                               $row=mysqli_fetch_assoc($res);
                               // while($row==mysqli_fetch_assoc($res))
                                {
                               
                                ?>
        <!--<h2 class="title_head" style="font-family:Trirong; font-weight:600;"><?php echo $row['status']; ?></h2>
		-->
        
        <div class="row border_around text-justify">

          <div class="col-sm-12 pt-3">
                        
<section class="section1">
  <div class="container">
    <!-- Nav tabs -->
    <!--<ul class="nav nav-tabs" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#home"><?php //echo $row['status']; ?></a>
      </li>
      
     <?php 
		                        }
		                      
		   
           						?>
      
    </ul>-->

    <!-- Tab panes -->
    <div class="tab-content clearfix">
        <div id="home" class="container tab-pane active"><br>
            <div class="row">
                <div class="col-lg-12">
                     <?php
                                $nid=$_REQUEST['nid'];
                                $qry="select * from iq_team ";
                                $res=mysqli_query($conn,$qry);
                                $cnt=1;
                                $fid="";
                                while($row=mysqli_fetch_assoc($res))
                                {
                                   // $fid=$row['did'];
                                    echo "<p>".$row['tm_iqc']."</p>";
                                    
                                }
							?>
							    <!-- <br> -->
                                <!-- <table class="table table-bordered " style="width:100%;background-color:#eee"> -->
                            <?php
                               // $qry="select * from vw_dep_file where did=".$nid."";
                               // $res=mysqli_query($conn,$qry);
                               // while($row=mysqli_fetch_assoc($res))
                               // {
		                           // echo "<tr><td><a href='https://www.kud.ac.in/admin_panel/dept/branch/". $row['fname']."'>". $row['fname'] ."</a></td></tr>";
		                        //<!-- <iframe width="100%" height="500" src="https://smartechd.online/kud/admin_panel/dept/branch/"//></iframe> -->
                               // }
                            ?>
                               <!--  </table> -->
							  
                        </div>
                    </div>
                </div>
                  
                
	<div class="clearfix"></div>
</div>      
                                                                                                                                                                     
</div>
</div>
</div>

</section>






		  
					
			  
			 
                                 
             
            
    </div>
  </div>
</div>
    </div>
  </div>
</div>
<div class="clearfix"></div>
<?php include 'footer.php'; ?>