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
    h3{font-family:Enriqueta;font-size:15px;text-align:center}
</style>
<div class="inner_page academics">
  <div class="container">
    <div class="row p-3 text-justify">
      <div class="col-sm-12">
        <div class="row border_around text-justify">

          <div class="col-sm-12 pt-3">
		  
<section class="section1">
  <div class="container">
     <!-- <h2 class="title_head" style="font-family:Trirong;text-align:center;color:#000">Best Practice</h2>-->
     
	<div id="menu10" class="tab-pane"><br>
                   
                    <div class="row">
                        <div class="col-12 mb-sm-4">
                            <?php
                                $qry="select * from iq_bp";
                                $res=mysqli_query($conn,$qry);
                                $cnt=1;
                                $fid="";
                                while($row=mysqli_fetch_array($res))
                                {
                                    $fid=$row['iq_bpid'];
                                    echo "<div>".$row['bp_det']."</div>";
                                    
                                }
                            ?>
                            <br>
                         <!-- <table class="table table-bordered" style="width:70%" align="center">
                            <tr style="background-color:#6495ED; color:#FFFFFF;" >
                                <th style="text-align:center; width:10%;border:1px solid #eee">Sl. No.</th>
                                <th style="width:90%;border:1px solid #eee">&nbsp;&nbsp;Best Practice </th>
                            </tr>-->
			  
			   <?php
                                $qry="select * from iq_bp_file";
                                $res=mysqli_query($conn,$qry);
								$cnt=1;
                                while($row=mysqli_fetch_assoc($res))
                                {
		                            echo "<tr>";
									 echo "<td style='text-align:center;border:1px solid #eee'>".$cnt++."</td>";
									echo  "<td style='border:1px solid #eee'><a href='https://www.kud.ac.in/admin_panel/iqac/bp/". $row['fname']."'>". $row['fname'] ."</a></td>";
									 echo "</tr>";
		                       
                                }
                            ?>
              
             

          <!--  </table>-->
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
