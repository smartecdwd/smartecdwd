<?php
    error_reporting(0);
    include 'db_con.php';
    include 'iqac-header.php'; 
?>



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
      <h2 class="title_head" style="font-family:Trirong;text-align:center;color:#000">NIRF</h2>
      <br>
      <br>
   
				
				 <div id="menu8" class="tab-pane"><br>
                   
                    <div class="row">
                        <div class="col-12 mb-sm-3">
                          <table class="table table-striped" id="customers" align="center" style="width:80%;font-family:exo">
                            <tr>
                                <th style="text-align:center; width:10%;border:1px solid #eee">Sl. No.</th>
                                <th style="width:90%;border:1px solid #eee">&nbsp;&nbsp;NIRF </th>
                            </tr>
			  
			   <?php
                                $qry="select * from iq_nrif_file";
                                $res=mysqli_query($conn,$qry);
								$cnt=1;
                                while($row=mysqli_fetch_assoc($res))
                                {
		                            echo "<tr>";
									 echo "<td style='text-align:center;border:1px solid #eee'>".$cnt++."</td>";
									echo  "<td style='border:1px solid #eee'><a href='https://www.kud.ac.in/admin_panel/iqac/pol/". $row['fname']."'>". $row['fname'] ."</a></td>";
									 echo "</tr>";
		                       
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
