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
   
    h4{font-family:Enriqueta;color:#0074B7;text-align:jusitfy;font-size:16px}
</style>

<div class="inner_page academics">
  <div class="container">
    <div class="row p-3 text-justify">
      <div class="col-sm-12">
        <div class="row border_around p-3 text-justify">

          <div class="col-lg-12">
		         <?php
                    $nid=$_REQUEST['nid'];
                    /*$qry="select * from announce where status ='Active' AND aid=$nid order by adate desc";
                    $res=mysqli_query($conn,$qry);
                    
                    $row1=mysqli_fetch_array($res);
                    {
                       /// echo "<h4 style='font-size:18px'>".$row['adata']."</h4>";
                        //echo $row['ndesc'];
                    */
                    $qry="select * from announce_file where aid=".$nid;
                    $res=mysqli_query($conn,$qry);
                    
                    $rcnt=mysqli_num_rows($res);
                    echo $rcnt;
                        if($rcnt>0)
                        {
        				    $row=mysqli_fetch_array($res);
        					
        					header("Content-type: application/pdf");  
                            header("Content-disposition: inline; filename=".$row['ftitle'].".pdf");
                            header('Content-Transfer-Encoding: binary');
                            header('Accept-Ranges: bytes');
                            echo $row['fname'];
                        }       
					  ?>
                    
               
			 <!-- <h4 style="margin-top:12px !important;"><a href="index.php" style="font-family: 'Jockey One', sans-serif; font-size:14px"><i class="fa fa-caret-left"></i>&nbsp;&nbsp;BACK TO PAGE</a> </h4> -->
			
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="clearfix"></div>


	<!-- <div class="clearfix"></div> -->

	
<?php include 'footer.php'; ?>
