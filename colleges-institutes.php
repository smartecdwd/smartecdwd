<?php
error_reporting(0);
include 'db_con.php';



?>


   <?php include 'header.php'; ?>
<link href="css/css/vstyle.css" rel="stylesheet" type="text/css" />
<link href="css/mytable.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Fredoka+One&family=Roboto+Slab&family=Signika:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Domine&family=Kanit:wght@300&family=PT+Serif&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong|Akaya+Telivigala|Alice|Average|Andada Pro|Enriqueta">
<link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Fredoka+One&family=Roboto+Slab&family=Signika:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<div class="inner_page">
  <div class="container">
    <div class="row border_around p-3 text-justify">
        <div class="col-sm-12">
            <div class="m-4">
                <ul class="nav nav-pills">
                    <div class="col-sm-4">
                        <li class="nav-item">
                            <a href="#" class="nav-link active" style="border:1px solid #E9A200;text-align:center;font-size:16px;font-family:Enriqueta;font-weight:bold">Constituent Colleges</a>
                        </li>
                    </div>
                    <div class="col-sm-4">
                        <li class="nav-item">
                            <a href="affiliated-college.php" class="nav-link" style="border:1px solid #E9A200;text-align:center;font-size:16px;font-family:Enriqueta;font-weight:bold">Affiliated Colleges</a>
                        </li>
                    </div>
                </ul>
</div>
        </div>
      <!--<div class="col-sm-3" style="background-color:#eee">
	  <h5 style="text-align:center;color:#145DA0;height:50px;padding:20px;font-size:17px;border-bottom:2px solid #145DA0;font-family:Alice"><b>COLLEGES AND INSTITUTES</b></h5>
           <br>

            <div class="vertical-menu" style="width:90%">
              
                  <a href="colleges-institutes.php"class="active" style="background-color:#6495ED">Constituent Colleges</a>
                <a href="affiliated-college.php" >Affiliated Colleges</a>
				
                
            </div>
        
      </div><br>-->
<br>

      <div class="col-sm-12">



<section class="sectione2">
  <div class="container">
  
    <!-- Tab panes -->
    <div class="tab-content">
      <div id="home" class="container tab-pane active"><br>
      
        <h3 style="font-family:Trirong; font-weight:600;">Constituent Colleges</h3>
        <div class="table-responsive">
        <table id="customers" style="width:100%;text-align:left;cursor:auto">
            <tr>
                <th>Sl. No</th>  
                <th>College Name</th>
                <th>Year Est</th>
                <th>Course Offered</th> 
                <th>College Code</th>
                <th>Nature of Affiliation</th>
                <th>UGC Status</th>
                <th>NAAC</th>
                <th>Principal</th>
                <th>Phone</th>
                <th>Email</th>
            </tr>
<?php 
				$qry="select * from constituent_colleges";
				$res=mysqli_query($conn,$qry);
				$cnt=1;
				while($row = mysqli_fetch_array($res))
				{
				?>
                    <tr>
                        <td align="center;" style="font-size:14px;"><?php echo $cnt++; ?></td>
                        <td style="font-size:14px;width:25%"><a href='<?php echo $row['wsite'];?>'> <b><?php echo str_replace(';',',',$row['col_name']); ?></b></a></td>
                        <td style="font-size:14px;"><?php echo $row['yr_est']; ?></td>
                        <td style="font-size:14px;"><?php echo str_replace(';',',',$row['course_off']); ?></td>
                        <td style="font-size:14px;"><?php echo $row['coll_code']; ?></td>
                        <td style="font-size:14px;"><?php echo $row['nat_of_affliation']; ?></td>
                        <td style="font-size:14px;"><?php echo $row['ugc_status']; ?></td>
                        <td style="font-size:14px;"><?php echo $row['naac_acc']; ?></td>
                        <td style="font-size:14px;"><?php echo $row['principal']; ?></td>
                        <td style="font-size:14px;"><?php echo $row['phone']; ?></td>
                        <td style="font-size:14px;"><?php echo $row['email']; ?></td>
                    </tr>
                <?php 
                    }
                ?>
            </table>
            </div>


				      <div class="clearfix"></div>
	</div>
		</section>
	</div>
	</div>
	                                                                                                                                                                          
	</div>
	</div>
	</div>
	




	
<?php include 'footer.php'; ?>
