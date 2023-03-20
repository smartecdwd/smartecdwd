<?php
error_reporting(0);
require('db_con.php');



?>


<?php include 'header.php'; ?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong|Akaya+Telivigala|Alice|Average|Andada Pro|Enriqueta">
<link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Fredoka+One&family=Roboto+Slab&family=Signika:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="css/mytable.css">
<style>
    h5{font-family:Alice;color:#0074B7;text-align:center;font-size:22px}
	 p{font-family:Average;font-size:17px;color:#000;margin:10px;;text-align:justify}
   
    h4.x{font-family:Average;color:#0074B7;text-align:jusitfy;font-size:16px;font-weight:bold;}
    
</style>

        <div class="inner_page academics">
            <div class="container">
                <div class="row p-3 text-justify">
                    <div class="col-sm-12">
                        <div class="row border_around p-3 text-justify">
                            <div class="col-lg-12">
                                <!--<form method="post">-->
                    		         <?php
                                        $nid=mysqli_real_escape_string($conn,$_REQUEST['nid']);
                                        $qry="select * from notification where nid=$nid and nstatus ='A' order by ndate desc";
                                        $res=mysqli_query($conn,$qry);
                                        
                                        $row=mysqli_fetch_array($res);
                                        {
                                            echo "<h4 class='x' style='font-size:18px'>".trim($row['nname'])."</h4>";
                                            echo $row['ndesc'];
                                        }
                    			  
                                  
                                        $qry="select * from notification_file where nid=".$nid;
                                        $res=mysqli_query($conn,$qry);
                                       
                                        $rcnt=mysqli_num_rows($res);
                                        if($rcnt>0)
                                        {?>
                                            <br>
                                            <div class="table-responsive">
                                            <table id="customers" align="center">
                                                <tr>
                                                    <th style="font-size:16px;width:10%">Sl. No.</th>
                                                    <th style="font-size:16px;width:90%">Documents</th>                
                                              </tr>
                                        <?php
                                                $cnt=1;
                                                while($row=mysqli_fetch_array($res))
                    					        {
                                                    echo "<tr>";
                                                    echo "<td style='text-align:center'>".$cnt++."</td>";
                                                    echo "<td style='text-align:left'><a href='https://www.kud.ac.in/admin_panel/noti/".$row['fname']."' target='_blank'>".$row['fname']."</a></td>";
                                                    echo"</tr>";
                    					        }
                                        
                    					  ?>
                                        </table>
                                        </div>
                                    <?}?>
			                        <h4 style="margin-top:12px !important;"><a href="notifications.php" style="font-family: 'Jockey One', sans-serif; font-size:14px"><i class="fa fa-caret-left"></i>&nbsp;&nbsp;BACK TO PAGE</a> </h4>
			                    <!--</form>-->
			                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>


	<!-- <div class="clearfix"></div> -->

	
<?php include 'footer.php'; ?>
