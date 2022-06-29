<?php
session_start();
error_reporting(0);
require('db_con.php');
?>


<?php include 'iqac-header.php'; ?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong|Akaya+Telivigala|Alice|Average|Andada Pro|Enriqueta">
<link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Fredoka+One&family=Roboto+Slab&family=Signika:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/fac_img.css">
<style>
    h5{font-family:Alice;color:#0074B7;text-align:center;font-size:20px}
    p{font-family:Average;font-size:17px;text-align:justify;margin:20px}
    h3{font-family:Enriqueta;font-size:15px;text-align:center}
</style>

<div class="inner_page academics">
  <div class="container">
    <div class="row p-3 text-justify">
      <div class="col-12 mb-sm-3">
	  
				
     <!-- </div>
    </div>
  </div>-->
<!--</div>-->



<div class="inner_page">
  <div class="container">
    <div class="row border_around p-3 text-justify">
        
      <!-- <div class="col-sm-3" style="background-color:#eee">
	  <h5 style="text-align:center; padding-top:20px; "><b>DEPARTMENTS</b></h5>
           <br>

            <div class="vertical-menu" style="width:100%">
              
                <a href="arts.php" class="active" style="background-color:#6495ED">Arts</a>
                <a href="science.php">Science</a>
				<a href="social-science.php">Social Science</a>
				<a href="commerce.php">Commerce</a>
				<a href="law.php">Law</a>
				<a href="education.php">Education</a>
				<a href="management.php">Management</a>
				<a href="diploma.php">Diploma</a>
				
				
                
            </div>
        
      </div><br>
<br>
 -->
      <div class="col-lg-12">
   				
   				<br><center>
        <h5><strong>IQAC - CURRENT TEAM</strong></h5></center>
        <br>
                <div class="container" style="background-color:#f1f1f1;padding:30px">
                    
                    <br>
                    <?php
                        $nid=$_REQUEST['nid'];
                        $qry="select * from iq_team_cur order by iq_cid";
                        $res=mysqli_query($conn,$qry);
                        $cnt=1;
                        $fid="";
                        
                        while($row=mysqli_fetch_assoc($res))
                        {
                            $fid=$row["fid"];
                            if($cnt==1)
                           {
                                echo "<div class='row'>";
                                
                            }
                        ?> 
                                        
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                          <div class="row ourTeam-box text-center" style="border-color:#0074B7;border-radius:15px">
                                            <div class="col-md-12 section1">
                                              <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['pimg']); ?>"><br><br>
                                              <span style="color:#000;"><?php echo $row['design'];?></span><br>
                                            </div>
                                            
                                            <div class="col-md-12 section2 pb-3" style="background-color:#fff;margin-top:-30px;zindex:-1">
                                              <p style="text-align:center;color:#0074B7"><?php echo $row['fname'];?></p>
                                              
                                    		  <span style="color:#000"><?php echo $row['dept'];?></span><br>
                                    		  <span style="color:#000"><i class="fa fa-phone"></i>&nbsp;
                                    		    <?php 
                                    		            echo $row['mob']; 
                                    		            if($row['mob2']!="")
                                    		            {
                                    		                echo " / " . $row['mob2'];
                                    		            }
                                    		      ?>
                                    		    </span><br>
                                              <span style="color:#000"><i class="fa fa-envelope"></i>&nbsp;<?php echo $row['email'] ;
                                                        if($row['email2']!="")
                                                        {
                                                            echo " / " . $row['email2'];
                                                        }?>
                                                        </span>
                                            </div>
                                            <div class="col-md-12 section3" style="height:40px;background-color:#0074B7">
                                               <div id="color">
                                                    &nbsp;
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                <?php
                                     if($cnt==3)
                                        echo "</div>";
                                    
                                    if($cnt==3)
                                       $cnt=1;
                                    else
                                     $cnt++;
                                }
                                
                                ?>
                                </div>
                              
                            </div>
     </div>
     </div>
</div>
</div>
 </div>
    </div>
  </div>
</div>
<div class="clearfix"></div>
<?php include 'footer.php'; ?>