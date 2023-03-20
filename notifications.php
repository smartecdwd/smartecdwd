<?php
    error_reporting(0);
    include 'db_con.php';
    include 'header.php'; 
?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong|Akaya+Telivigala|Alice|Average|Andada Pro|Enriqueta">
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Fredoka+One&family=Roboto+Slab&family=Signika:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">
    <link style="css/mytable.css" rel="stylesheet"/>
    <link style="css/responsive_tab.css" rel="stylesheet"/>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://pagead2.googlesyndication.com/pagead/show_ads.js"></script>


<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
	
			

    <div class="inner_page academics">
        <div class="container">
            <div class="row text-justify">
                <div class="col-sm-12">
                    <div class="row border_around p-3 text-justify">
                        <div class="col-sm-12 pt-3">
		                    <!--<form method="post">-->
                                <section class="section1">
                                    <div class="container">
                                        <nav class="nav nav-tabs nav-justified responsive-tabs">
                                            <a class="nav-item nav-link active" data-toggle="tab"  href="#home" style="font-family:Enriqueta;"><b>Notifications / Circulars</b></a>
                                            <a class="nav-item nav-link" data-toggle="tab"  href="#menu1" style="font-family:Enriqueta;"><b> Examination</b></a>
                                            <a class="nav-item nav-link" data-toggle="tab"  href="#menu2" style="font-family:Enriqueta;"><b>Academic</b></a>
                                            <a class="nav-item nav-link" data-toggle="tab"  href="#menu3" style="font-family:Enriqueta;"><b>Events</b></a>
                                            <a class="nav-item nav-link" data-toggle="tab"  href="#menu4" style="font-family:Enriqueta;"><b>Tenders</b></a>
                                            <a class="nav-item nav-link" data-toggle="tab"  href="#menu6" style="font-family:Enriqueta;"><b>Admission 2022-23</b></a>
                                        </nav>
                                        <div class="col-sm-12">
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div id="home" class="tab-pane active mt-4">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="table-responsive">
                                                                <table id="customers" align="center">
                                                                    <tr>
                                                                        <th style="text-align:center;width:7%">Sl. No.</th>
                                                                        <th style="text-align:center;">Notifications</th>
                                                                        <th style="text-align:center;width:15%">Date</th>
                                        				            </tr>
                                        			                <?php
                                                                        $qry="select * from notification where nstatus ='A' AND ntype in('N','C') order by nid desc,ndate desc";
                                                                        $res=mysqli_query($conn,$qry);
                                                                        $cnt=1;
                                                                        while($row=mysqli_fetch_array($res))
                                                                        {
                                        									$mysqldate="$row[ndate]";
                                        								    $phpdate = strtotime( $mysqldate );
                                        									$phpdate = date("d-M-Y",$phpdate);
                                                                            echo "<tr>";
                                                                            echo "<td style='text-align:center;'>".$cnt++."</td>";
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
                                                <div id="menu6" class="tab-pane mt-4">
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
     	                                    </div>
                                        </div>
                                    </div>
    							</section>
    						<!--</form>-->
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
