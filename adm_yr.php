<?php
error_reporting(0);
include 'db_con.php';



?>


   <?php include 'header.php'; ?>
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong|Akaya+Telivigala|Alice|Average|Andada Pro|Enriqueta">
<link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Fredoka+One&family=Roboto+Slab&family=Signika:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">
<link style="css/mytable.css"/>

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
			
			

<div class="inner_page academics">
  <div class="container">
    <div class="row p-3 text-justify">
      <div class="col-sm-12">
        
        <div class="row border_around p-3 text-justify">

          <div class="col-sm-12 pt-3">
		  
        <section class="section1">
            <div class="container">
                <nav class="nav nav-tabs nav-justified">
                    <a class="nav-item nav-link" data-toggle="tab"  href="#home" style="font-family:Enriqueta;"><b>Notifications / Circulars</b></a>
                    <a class="nav-item nav-link" data-toggle="tab"  href="#menu1" style="font-family:Enriqueta;"><b> Examination</b></a>
                    <a class="nav-item nav-link" data-toggle="tab"  href="#menu2" style="font-family:Enriqueta;"><b>Academic</b></a>
                    <a class="nav-item nav-link" data-toggle="tab"  href="#menu3" style="font-family:Enriqueta;"><b>Events</b></a>
                    <a class="nav-item nav-link" data-toggle="tab"  href="#menu4" style="font-family:Enriqueta;"><b>Tenders</b></a>
                    <a class="nav-item nav-link active" data-toggle="tab"  href="#menu6" style="font-family:Enriqueta;"><b>Admission 2022-23</b></a>
                </nav>
                <div class="col-sm-12">
                    <!-- Nav tabs -->
                    <!--<ul class="nav nav-tabs" role="tablist">
                      `<li class="nav-item col-sm-3" style="text-align:center;color:#1F4591;">
                        <a class="nav-link active" data-toggle="tab" href="#home" style="font-family:Enriqueta;"><b>Notifications / Circulars</b></a>
                      </li>
                	  <!--<li class="nav-item" style="width:16.5%;text-align:center;color:#1F4591;margin-right:0.85px">
                        <a class="nav-link" data-toggle="tab" href="#menu5" style="font-family:Enriqueta;font-size:1.10vw;"><b>Circulars</b></a>-->
                     <!-- </li>
                	  
                      <li class="nav-item col-sm-2" style="text-align:center;">
                        <a class="nav-link" data-toggle="tab" href="#menu1" style="font-family:Enriqueta;"><b> Examination</b></a>
                      </li>
                      <li class="nav-item col-sm-2" style="text-align:center;">
                        <a class="nav-link" data-toggle="tab" href="#menu2" style="font-family:Enriqueta;"><b>Academic</b></a>
                      </li>
                      <li class="nav-item col-sm-2" style="text-align:center">
                        <a class="nav-link" data-toggle="tab" href="#menu3" style="font-family:Enriqueta;"><b>Events</b></a>
                      </li>
                      <li class="nav-item col-sm-2" style="text-align:center;">
                        <a class="nav-link" data-toggle="tab" href="#menu4" style="font-family:Enriqueta;"><b>Tenders</b></a>
                      </li>
                    </ul>-->

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="home" class="tab-pane mt-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table id="customers" style="width:100%" align="center">
                                            <tr>
                                                <th style="text-align:center;width:10%" >Sl. No.</th>
                                                <th style="text-align:center;">Notifications</th>
                                                <th style="text-align:center;width:15%">Date</th>
                				            </tr>
                			                <?php
                                                $qry="select * from notification where nstatus ='A' AND ntype in('N','C') order by nid desc, ndate desc";
                                                $res=mysqli_query($conn,$qry);
                                                $cnt=1;
                                                while($row=mysqli_fetch_array($res))
                                                {
                									$mysqldate="$row[ndate]";
                								    $phpdate = strtotime( $mysqldate );
                									$phpdate = date("d-M-Y",$phpdate);
                                                    echo "<tr>";
                                                    echo "<td style='text-align:center'>".$cnt++."</td>";
                                                    echo "<td style='text-align:left'><a href='notifications-circular.php?nid=".$row['nid']."' >".$row['nname']."</a></td>";
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
                        </div>
        				<div id="menu5" class="tab-pane mt-4">
                            <div class="row">
                                <div class="col-lg-12">
                                   <table id="customers"  style="width:100%" align="center">
                                        <tr>
                                            <th style="text-align:center;width:10%" >Sl. No.</th>
                                            <th>&nbsp;&nbsp;Circulars</th>
                                            <th style="text-align:center;width:15%">Date</th>
                                        </tr>
        			         			<?php
                                            $qry="select * from notification where nstatus ='A' AND ntype = 'C' order by nid desc, ndate desc";
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
                        <div id="menu1" class="tab-pane mt-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table id="customers"  style="width:100%" align="center">
                                            <tr>
                                                <th style="text-align:center;width:10%" >Sl. No.</th>
                                                <th style="text-align:center">Examination</th>
                                                <th style="text-align:center;width:15%">Date</th>
                                            </tr>
                            			    <?php
                                                $qry="select * from notification where nstatus ='A' AND ntype = 'E' order by nid desc, ndate desc";
                                                $res=mysqli_query($conn,$qry);
                                                $cnt=1;
                                                while($row=mysqli_fetch_array($res))
                                                {
                								$mysqldate="$row[ndate]";
                								
                								    $phpdate = strtotime( $mysqldate );
                											
                									$phpdate = date("d-M-Y",$phpdate);
                                                    echo "<tr>";
                                                    echo "<td style='text-align:center'>".$cnt++."</td>";
                                                    echo "<td><a href='notifications-circular.php?nid=".$row['nid']."'>".$row['nname']."</a></td>";
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
                        </div>      
                        <div id="menu2" class="tab-pane mt-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table id="customers"  style="width:100%" align="center">
                                            <tr >
                                                <th style="text-align:center;width:10%" >Sl. No.</th>
                                                <th >&nbsp;&nbsp;Academic</th>
                                                <th style="text-align:center;width:15%">Date</th>
                                            </tr>
			                                <?php
                                                $qry="select * from notification where nstatus ='A' AND ntype = 'A' order by nid desc, ndate desc";
                                                $res=mysqli_query($conn,$qry);
                                                $cnt=1;
                                                while($row=mysqli_fetch_array($res))
                                                {
                                                $mysqldate="$row[ndate]";
                								
                								    $phpdate = strtotime( $mysqldate );
                											
                									$phpdate = date("d-M-Y",$phpdate);
                                                    echo "<tr>";
                                                    echo "<td style='text-align:center'>".$cnt++."</td>";
                                                    echo "<td><a href='notifications-circular.php?nid=".$row['nid']."'>".$row['nname']."</a></td>";
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
	                    </div>
                        <div id="menu3" class="tab-pane mt-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table id="customers" style="width:100%" align="center">
                                            <tr>
                                                <th style="text-align:center;width:10%" >Sl. No.</th>
                                                <th style="text-align:center">Events</th>
                                                <th style="text-align:center;width:15%">Date</th>
                                            </tr>
			        			            <?php
                                                $qry="select * from notification where nstatus ='A' AND ntype = 'EV' order by nid desc, ndate desc";
                                                $res=mysqli_query($conn,$qry);
                                                $cnt=1;
                                                while($row=mysqli_fetch_array($res))
                                                {
                                                 $mysqldate="$row[ndate]";
                								
                								    $phpdate = strtotime( $mysqldate );
                											
                									$phpdate = date("d-M-Y",$phpdate);
                                                    echo "<tr>";
                                                    echo "<td style='text-align:center'>".$cnt++."</td>";
                                                    echo "<td><a href='notifications-circular.php?nid=".$row['nid']."'>".$row['nname']."</a></td>";
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
                        </div>
                        <div id="menu4" class="tab-pane mt-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table id="customers"  style="width:100%" align="center">
                                            <tr>
                                                <th style="text-align:center;width:10%" >Sl. No.</th>
                                                <th style="text-align:center">Tenders</th>
                                                <th style="text-align:center;width:15%">Date</th>
				                            </tr>
			                			   <?php
                                                $qry="select * from notification where nstatus ='A' AND ntype = 'T' order by nid desc, ndate desc";
                                                $res=mysqli_query($conn,$qry);
                                                $cnt=1;
                                                while($row=mysqli_fetch_array($res))
                                                {
                                                $mysqldate="$row[ndate]";
                								
                								    $phpdate = strtotime( $mysqldate );
                											
                									$phpdate = date("d-M-Y",$phpdate);
                                                    echo "<tr>";
                                                    echo "<td style='text-align:center'>".$cnt++."</td>";
                                                    echo "<td><a href='notifications-circular.php?nid=".$row['nid']."'>".$row['nname']."</a></td>";
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
                        </div>
                        <div id="menu6" class="tab-pane active mt-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table id="customers"  style="width:100%" align="center">
                                            <tr>
                                                <th style="text-align:center;width:10%" >Sl. No.</th>
                                                <th style="text-align:center">Details</th>
                                                <th style="text-align:center;width:15%">Date</th>
				                            </tr>
			                			   <?php
                                                $qry="select * from notification where nstatus ='A' AND ntype = 'AD' order by nid desc, ndate desc";
                                                $res=mysqli_query($conn,$qry);
                                                $cnt=1;
                                                while($row=mysqli_fetch_array($res))
                                                {
                                                $mysqldate="$row[ndate]";
                								
                								    $phpdate = strtotime( $mysqldate );
                											
                									$phpdate = date("d-M-Y",$phpdate);
                                                    echo "<tr>";
                                                    echo "<td style='text-align:center'>".$cnt++."</td>";
                                                    echo "<td><a href='notifications-circular.php?nid=".$row['nid']."'>".$row['nname']."</a></td>";
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
                        </div>
 	                    <div class="clearfix"></div>
                    <!-- </div>      
                    </div>
                    </div> -->
                    </div>
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
<script>
$(document).ready(function(){
  $(".nav-tabs a").click(function(){
    $(this).tab('show');
  });
});
</script>




<?php include 'footer.php'; ?>
