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
    #tbl a:hover{color:#0000FF;}
</style>
<div class="inner_page academics">
  <div class="container">
    <div class="row p-3 text-justify">
      <div class="col-sm-12">
        <div class="row border_around text-justify">

          <div class="col-sm-12 pt-3">
		  
<section class="section1">
  <div class="container">
      <!--<h2 class="title_head" style="font-family:Trirong;text-align:center;color:#000">Miscellaneous</h2>-->
      <h5><strong>MISCELLANEOUS</strong></h5>
	<div id="menu12" class="tab-pane"><br>
                   
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="table-responsive">
                          <table class="table table-striped" id="customers" style="width:70%;font-family:exo" align="center">
              <tr>
                <th>Sl. No.</th>
                <th style="width:90%;border:1px solid #eee">&nbsp;&nbsp;Misc </th>
                
				
              </tr>
			  
			   <?php
                              /*  $qry="select * from iq_ext_file";
                                $res=mysqli_query($conn,$qry);
								$cnt=1;
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    $ft= explode('.', $row['fname']);
		                            echo "<tr>";
									 echo "<td style='text-align:center;border:1px solid #eee'>".$cnt++."</td>";
									echo  "<td style='border:1px solid #eee'><a href='https://www.kud.ac.in/admin_panel/iqac/ext/". $row['fname']."'>". $ft[0] ."</a></td>";
									 echo "</tr>";
		                       
                                }*/
                            ?>
                    <tr>
                        <td style='text-align:center;border:1px solid #eee'>1</td>
                        <td style='border:1px solid #eee'><a href="iqac-cal.php">Calendar of Events</a></td>
                    </tr>
                    <tr>
                        <td style='text-align:center;border:1px solid #eee'>2</td>
                        <td style='border:1px solid #eee'><a href="https://www.kud.ac.in/admin_panel/iqac/misc/Advisory Committee Proceedings.pdf" target="blank">Advisory Committee Proceedings</a></td>
                    </tr>
                    <tr>
                        <td style='text-align:center;border:1px solid #eee'>3</td>
                        <td style='border:1px solid #eee'><a href="https://www.kud.ac.in/admin_panel/iqac/misc/ATR 2020 and ATR 2021.pdf" target="blank">ATR 2020 and ATR 2021</a></td>
                    </tr>
                    <tr>
                        <td style='text-align:center;border:1px solid #eee'>4</td>
                        <td style='border:1px solid #eee'><a href="https://www.kud.ac.in/admin_panel/iqac/misc/KUD Best Practices.pdf" target="blank">KUD Best Practices</a></td>
                    </tr>
                    <tr>
                        <td style='text-align:center;border:1px solid #eee'>5</td>
                        <td style='border:1px solid #eee'><a href="https://www.kud.ac.in/admin_panel/iqac/misc/POs and PSOs.pdf" target="blank">POs and PSOs</a></td>
                    </tr>
                    <tr>
                        <td style='text-align:center;border:1px solid #eee'>6</td>
                        <td style='border:1px solid #eee'><a href="https://www.kud.ac.in/admin_panel/iqac/misc/Right to Information Act 2005.pdf" target="blank">Right to Information Act 2005</a></td>
                    </tr>
                    <tr>
                        <td style='text-align:center;border:1px solid #eee'>7</td>
                        <td style='border:1px solid #eee'><a href="https://www.kud.ac.in/admin_panel/iqac/misc/SSS Report 2019-20.pdf" target="blank">SSS Report 2019-20</a></td>
                    </tr>
                    <tr>
                        <td style='text-align:center;border:1px solid #eee'>8</td>
                        <td style='border:1px solid #eee'><a href="https://www.kud.ac.in/admin_panel/iqac/misc/Anti Ragging and Grievance Cell.pdf" target="blank">Anti Ragging and Grievance Cell</a></td>
                    </tr>
                    <tr>
                        <td style='text-align:center;border:1px solid #eee'>9</td>
                        <td style='border:1px solid #eee'><a href="https://www.kud.ac.in/admin_panel/iqac/misc/Internal Complaint Committee and Special Cell.pdf" target="blank">Internal Complaint Committee & Special Cell</a></td>
                    </tr>

            </table>
                    </div>
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
