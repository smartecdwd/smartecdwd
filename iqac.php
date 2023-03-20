<?php
error_reporting(0);
include 'db_con.php';



?>


   <?php include 'iqac-header.php'; ?>



<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong|Akaya+Telivigala|Alice|Average|Andada Pro|Enriqueta">
<link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Fredoka+One&family=Roboto+Slab&family=Signika:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">
<link href="css/mytable.css">
			
<style>
    h5{font-family:Alice;color:#0074B7;text-align:center;font-size:20px}
    p{font-family:Average;font-size:17px;text-align:justify;margin:20px}
    h3{font-family:Enriqueta;font-size:17px;text-align:center}
</style>
<div class="inner_page academics">
  <div class="container">
    <div class="row p-3 text-justify">
      <div class="col-sm-12">
        <div class="row border_around text-justify">

          <div class="col-sm-12 pt-3">
		  
<section class="section1">
  <div class="container">
      <h2 class="title_head" style="font-family:Trirong;text-align:center;color:#000">Internal Quality Assurance Cell</h2>
     
    <!-- Tab panes -->
    <div class="tab-content">
        <div id="home" class="tab-pane active"><br>
            <div class="row">
                <div class="col-sm-12">
               <?php
                                //$nid=$_REQUEST['nid'];
                                $qry="select * from iq_about";
                                $res=mysqli_query($conn,$qry);
                                $cnt=1;
                                $fid="";
                                while($row=mysqli_fetch_array($res))
                                {
                                    $fid=$row['iq_aid'];
                                    echo "<div>".$row['abt_det']."</div>";
                                    
                                }
							?>
							    <br>
                                <table class="table table-bordered " style="width:100%;background-color:#eee">
                            <?php
                                $qry="select * from iq_abt_file where iq_tid=".$fid."";
                                $res=mysqli_query($conn,$qry);
                                while($row=mysqli_fetch_assoc($res))
                                {
		                           // echo "<tr><td><a href='https://smartechd.online/kud/admin_panel/dept/branch/". $row['fname']."'>". $row['fname'] ."</a></td></tr>";
		                        //<!-- <iframe width="100%" height="500" src="https://smartechd.online/kud/admin_panel/dept/branch/"//></iframe> -->
                                }
                            ?>
                                </table>

			  
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
