<?php
error_reporting(0);
include 'db_con.php';



?>


   <?php include 'header.php'; ?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong|Akaya+Telivigala|Alice|Average|Andada Pro|Enriqueta">
<link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Fredoka+One&family=Roboto+Slab&family=Signika:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">
<link style="css/mytable.css"/>

<div class="inner_page academics">
  <div class="container">
    <div class="row p-3 text-justify">
      <div class="col-sm-12">

        <div class="row border_around p-3 text-justify">

          <div class="col-sm-12 pt-3">
		  
<section class="section1">
  <div class="container">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item col-sm-3" style="text-align:center;color:#1F4591;">
        <a class="nav-link" data-toggle="tab" href="#home" style="font-family:Enriqueta;"><b>Notifications / Circulars</b></a>
      </li>
	  <!--<li class="nav-item" style="width:16.5%;text-align:center;color:#1F4591;margin-right:0.85px">
        <a class="nav-link" data-toggle="tab" href="#menu5" style="font-family:Enriqueta;font-size:1.10vw;"><b>Circulars</b></a>-->
      </li>
	  
      <li class="nav-item col-sm-2" style="text-align:center;">
        <a class="nav-link" data-toggle="tab" href="#menu1" style="font-family:Enriqueta;"><b> Examination</b></a>
      </li>
      <li class="nav-item col-sm-2" style="text-align:center;">
        <a class="nav-link active" data-toggle="tab" href="#menu2" style="font-family:Enriqueta;"><b>Academic</b></a>
      </li>
      <li class="nav-item col-sm-2" style="text-align:center">
        <a class="nav-link" data-toggle="tab" href="#menu3" style="font-family:Enriqueta;"><b>Events</b></a>
      </li>
      <li class="nav-item col-sm-2" style="text-align:center;">
        <a class="nav-link" data-toggle="tab" href="#menu4" style="font-family:Enriqueta;"><b>Tenders</b></a>
      </li>
	  
      
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div id="home" class="tab-pane"><br>
            <div class="row">
                <div class="col-lg-12">
              <table class="table table-bordered" id="customers">
              <tr>
                <th style="text-align:center;width:10%" >Sl. No.</th>
                <th >&nbsp;&nbsp;Notifications</th>
                <th style="text-align:center;width:15%">Date</th>
				
              </tr>
			  
			   <?php
                                $qry="select * from notification where nstatus ='A' AND ntype = 'N' order by ndate desc";
                                $res=mysqli_query($conn,$qry);
                                $cnt=1;
                                while($row=mysqli_fetch_array($res))
									
								
								
                                {
									$mysqldate="$row[ndate]";
								
								    $phpdate = strtotime( $mysqldate );
											
									$phpdate = date("d-M-Y",$phpdate);
									
                                    echo "<tr>";
                                    echo "<td style='text-align:center'>".$cnt++."</td>";
                                    echo "<td><a href='notifications-circular.php?nid=".$row['nid']."' >&nbsp;&nbsp;".$row['nname']."</a></td>";
									?>
									
                                    <td style="text-align:center;"><?php echo $phpdate; ?> </td>                                   
                                    
									<?php 
                                    echo "</tr>";
                                }
                            ?>
              
             

            </table>
                        </div>
                    </div>
                </div>
				 <div id="menu5" class="tab-pane"><br>
                    <div class="row">
                        <div class="col-lg-12">
                           <table class="table table-bordered" id="customers">
              <tr>
                <th style="text-align:center;width:10%" >Sl. No.</th>
                <th >&nbsp;&nbsp;Circulars</th>
                <th style="text-align:center;width:15%">Date</th>
				
              </tr>
			  
			   <?php
                                $qry="select * from notification where nstatus ='A' AND ntype = 'C' order by ndate desc";
                                $res=mysqli_query($conn,$qry);
                                $cnt=1;
                                while($row=mysqli_fetch_array($res))
                                {
								$mysqldate="$row[ndate]";
								
								    $phpdate = strtotime( $mysqldate );
											
									$phpdate = date("d-M-Y",$phpdate);
                                    echo "<tr>";
                                    echo "<td style='text-align:center'>".$cnt++."</td>";
                                    echo "<td><a href='notifications-circular.php?nid=".$row['nid']."' >&nbsp;&nbsp;".$row['nname']."</a></td>";
									?>
									
                                    <td style="text-align:center;"><?php echo $phpdate; ?> </td>                                   
                                    
									<?php 
                                    echo "</tr>";
                                }
                            ?>
              
             

            </table>
                        </div>
                    </div>
                </div>
                <div id="menu1" class="tab-pane"><br>
                    <div class="row">
                        <div class="col-lg-12">
                           <table class="table table-bordered" id="customers">
              <tr>
                <th style="text-align:center;width:10%" >Sl. No.</th>
                <th >&nbsp;&nbsp;Examination</th>
                <th style="text-align:center;width:15%">Date</th>
				
              </tr>
			  
			   <?php
                                $qry="select * from notification where nstatus ='A' AND ntype = 'E' order by ndate desc";
                                $res=mysqli_query($conn,$qry);
                                $cnt=1;
                                while($row=mysqli_fetch_array($res))
                                {
								$mysqldate="$row[ndate]";
								
								    $phpdate = strtotime( $mysqldate );
											
									$phpdate = date("d-M-Y",$phpdate);
                                    echo "<tr>";
                                    echo "<td style='text-align:center'>".$cnt++."</td>";
                                    echo "<td><a href='notifications-circular.php?nid=".$row['nid']."' >&nbsp;&nbsp;".$row['nname']."</a></td>";
									?>
									
                                    <td style="text-align:center;"><?php echo $phpdate; ?> </td>                                   
                                    
									<?php 
                                    echo "</tr>";
                                }
                            ?>
              
             

            </table>
                        </div>
                    </div>
                </div>      
                <div id="menu2" class="tab-pane active"><br>
                    <div class="row">
                        <div class="col-lg-12">
                          <table class="table table-bordered" id="customers">
              <tr>
                <th style="text-align:center;width:10%" >Sl. No.</th>
                <th >&nbsp;&nbsp;Academic</th>
                <th style="text-align:center;width:15%">Date</th>
				
              </tr>
			  
			   <?php
                                $qry="select * from notification where nstatus ='A' AND ntype = 'A' order by ndate desc";
                                $res=mysqli_query($conn,$qry);
                                $cnt=1;
                                while($row=mysqli_fetch_array($res))
                                {
                                $mysqldate="$row[ndate]";
								
								    $phpdate = strtotime( $mysqldate );
											
									$phpdate = date("d-M-Y",$phpdate);
                                    echo "<tr>";
                                    echo "<td style='text-align:center'>".$cnt++."</td>";
                                    echo "<td><a href='notifications-circular.php?nid=".$row['nid']."' >".$row['nname']."</a></td>";
									?>
									
                                    <td style="text-align:center;"><?php echo $phpdate; ?> </td>                                   
                                    
									<?php 
                                    echo "</tr>";
                                }
                            ?>
              
             

            </table>
                        </div>
	                </div>      
	            </div>
                <div id="menu3" class="tab-pane"><br>
                   
                    <div class="row">
                        <div class="col-lg-12">
               <table class="table table-bordered" id="customers">
              <tr>
                <th style="text-align:center;width:10%" >Sl. No.</th>
                <th >&nbsp;&nbsp;Events</th>
                <th style="text-align:center;width:15%">Date</th>
				
              </tr>
			  
			   <?php
                                $qry="select * from notification where nstatus ='A' AND ntype = 'EV' order by ndate desc";
                                $res=mysqli_query($conn,$qry);
                                $cnt=1;
                                while($row=mysqli_fetch_array($res))
                                {
                                 $mysqldate="$row[ndate]";
								
								    $phpdate = strtotime( $mysqldate );
											
									$phpdate = date("d-M-Y",$phpdate);
                                    echo "<tr>";
                                    echo "<td style='text-align:center'>".$cnt++."</td>";
                                    echo "<td><a href='notifications-circular.php?nid=".$row['nid']."' >".$row['nname']."</a></td>";
									?>
									
                                    <td style="text-align:center;"><?php echo $phpdate; ?> </td>                                   
                                    
									<?php 
                                    echo "</tr>";
                                }
                            ?>
              
             

            </table>
                        </div>
	                </div>      
                </div>
                <div id="menu4" class="tab-pane"><br>
                   
                    <div class="row">
                        <div class="col-lg-12">
                          <table class="table table-bordered" id="customers">
              <tr>
                <th style="text-align:center;width:10%" >Sl. No.</th>
                <th >&nbsp;&nbsp;Tenders</th>
                <th style="text-align:center;width:15%">Date</th>
				
              </tr>
			  
			   <?php
                                $qry="select * from notification where nstatus ='A' AND ntype = 'T' order by ndate desc";
                                $res=mysqli_query($conn,$qry);
                                $cnt=1;
                                while($row=mysqli_fetch_array($res))
                                {
                                $mysqldate="$row[ndate]";
								
								    $phpdate = strtotime( $mysqldate );
											
									$phpdate = date("d-M-Y",$phpdate);
                                    echo "<tr>";
                                    echo "<td style='text-align:center'>".$cnt++."</td>";
                                    echo "<td><a href='notifications-circular.php?nid=".$row['nid']."' >".$row['nname']."</a></td>";
									?>
									
                                    <td style="text-align:center;"><?php echo $phpdate; ?> </td>                                   
                                    
									<?php 
                                    echo "</tr>";
                                }
                            ?>
              
             

            </table>
                        </div>
                	</div>      
                </div>

 
	
	
	<div class="clearfix"></div>
<!-- </div>      
                                                                                                                                                                     
</div>
</div> -->
</div>

</section>

</div>
							
							
			

          
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="clearfix"></div>





<?php include 'footer.php'; ?>
