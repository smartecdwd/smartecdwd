<?php
session_start();
error_reporting(0);
include 'branch_session.php';
require('db_con.php');
$_SESSION['branch'];

	
?>


<?php include 'dep-header.php'; ?>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong|Akaya+Telivigala|Alice|Average|Andada Pro|Enriqueta">
<link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Fredoka+One&family=Roboto+Slab&family=Signika:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">
<link href="css/dep_mytable.css" rel="stylesheet">
<link rel="stylesheet" href="css/css/dvstyle.css">
<style>
    h5{font-family:Alice;color:#0074B7;text-align:center;font-size:20px;font-weight:bold}
	 p{font-family:Average;font-size:17px;color:#000;margin:10px;;text-align:justify}
</style>

<div class="inner_page">
  <div class="container">
    <div class="row border_around p-3 text-justify">
     
      <div class="col-lg-12">
                        <?php
							 		$_SESSION['branch'];
							 	 	$qry="select * from dep_mas where did='". $_SESSION['branch']."'";
                                    $res=mysqli_query($conn,$qry);
                                    
                                    while($row=mysqli_fetch_assoc($res))
									{
									    $nid=$row['did'];
	                           ?>
                               <h2 class="title_head" style="font-family:Domine; font-weight:600; padding-top:30px;"><?php echo $row['dname']; ?> &nbsp;<i class="fa fa-caret-right"></i></h2>
                              <?php 
		                            }
           						?>
<section class="section1">
  <div class="container">
    <!-- Tab panes -->
    <div class="tab-content clearfix">
        <div id="home" class="container tab-pane active"><br>
            <div class="row">
                <div class="col-sm-3" style="background-color:#fff;border:1px solid #005b96;">
        			<h5 style="text-align:center;color:#145DA0;height:50px;padding:20px;font-size:17px;border-bottom:2px solid #145DA0;font-family:Alice"><b>DEPARTMENTS</b></h5>
        			<br>
        
        			<div class="vertical-menu" style="width:100%">
        				<a href="arts.php">Faculty of Arts</a>
        				<a href="science.php">Faculty of Science & Technology</a>
        				<a href="social-science.php">Faculty of Social Science</a>
        				<a href="commerce.php">Faculty of Commerce</a>
        				<a href="law.php">Faculty of Law</a>
        				<a href="education.php">Faculty of Education</a>
        				<a href="management.php">Faculty of Management</a>
        				<a href="diploma.php">PG Diploma</a>
        			</div>
        		</div>
                <div class="col-sm-9">
                    <br>
                    <h5>ADMISSION PROCESS</h5>
                     <?php
                                //$nid=$_REQUEST['nid'];
                                $qry="select * from vw_dep_adm where did=".$nid."";
                                $res=mysqli_query($conn,$qry);
                                $cnt=1;
                                $fid="";
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    $fid=$row['dapid'];
                                    echo "<p>".$row['adm_det']."</p>";
                                    
                                }
                                
                                $qry="select * from dep_adm_file where dapid=".$fid."";
                                $res=mysqli_query($conn,$qry);
                                $rcnt=mysqli_num_rows($res);
                               
                                 if($rcnt>0)
                                 {
							?>
							      <br>
							      <div class="table-responsive">
                                <table id="customers" style="width:80%;" align='center'>
								<tr>
								<th style="text-align:center; width:10%;">Sl. No.</th>
								<th style="width:90%">Files</th>
								
								</tr>
                            <?php
                                
								 $cnt=1;
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    $ft= explode('.', $row['fname']);
                                    
							        echo "<tr>";
								    echo "<td style='text-align:center; width:8%;'>".$cnt++."</td>";
		                           // echo "<td style='width:90%'><a href='https://smartechd.online/kud/admin_panel/dept/adm/". $row['fname']."' style='color:blue' target='_blank'>". $ft[0] ."</a></td>";
		                            echo "<td style='width:90%'><a href='https://www.kud.ac.in/admin_panel/dept/adm/". $row['fname']."' style='color:blue' target='_blank'>Admission Process</a></td>";
								   echo "</tr>";
                                }
                            ?>
                                </table>
                                </div>
                            <?}?>
                        </div>
                    </div>
                </div>
                
	
	
	
	<div class="clearfix"></div>
</div>      
                                                                                                                                                                   
</div>
</div>
</div>
  
</section>
<!-- <h4 style="margin-top:12px !important;"><a href="arts.php" style="font-family: 'Jockey One', sans-serif; font-size:14px"><i class="fa fa-caret-left"></i>&nbsp;&nbsp;BACK TO PAGE</a> </h4> -->





		  
					
			  
			 
                                 
             
            

           
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="clearfix"></div>
<?php include 'footer.php'; ?>