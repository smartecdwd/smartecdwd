<?php
error_reporting(0);
include 'db_con.php';



?>


   <?php include 'header.php'; ?>
<link href="css/css/vstyle.css" rel="stylesheet" type="text/css" />

<link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Fredoka+One&family=Roboto+Slab&family=Signika:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Domine&family=Kanit:wght@300&family=PT+Serif&display=swap" rel="stylesheet" />
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong|Akaya+Telivigala|Alice|Average|Andada Pro|Enriqueta">
<link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Fredoka+One&family=Roboto+Slab&family=Signika:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">
<link href="css/mytable.css">

<div class="inner_page">
  <div class="container">
    <div class="row border_around p-3 text-justify">
        <div class="col-sm-12">

    <section class="section2" style="background-color:#fff">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="m-2">
                        <ul class="nav nav-pills">
                            <div class="col-sm-4">
                                <li class="nav-item">
                                    <a href="colleges-institutes.php" class="nav-link" style="border:1px solid #E87A00;width:100%;text-align:center;font-size:16px;font-family:Enriqueta;font-weight:bold">Constituents College</a>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4"></div>
                <div class="col-sm-8">
        <!--</div>-->
            <br>
            <!--<div class="row">-->
                <ul class="nav nav-pills">
                    <div class="col-sm-3">
                        <li class="nav-item">
                            <a href="affiliated-college.php" class="nav-link" style="border:1px solid #E87A00;width:100%;text-align:center;font-size:16px;font-family:Enriqueta;font-weight:bold">Dharwad</a>
                        </li>
                    </div>
                    <div class="col-sm-3">
                        <li class="nav-item">
                            <a href="gadag-college.php" class="nav-link" style="border:1px solid #E87A00;width:100%;text-align:center;font-size:16px;font-family:Enriqueta;font-weight:bold">Gadag</a>
                            </li>
                    </div>
                    <div class="col-sm-3">
                        <li class="nav-item">
                            <a href="haveri-college.php" class="nav-link active" style="border:1px solid #E87A00;width:100%;text-align:center;font-size:16px;font-family:Enriqueta;font-weight:bold">Haveri</a>
                        </li>
                    </div>
                    <div class="col-sm-3">
                        <li class="nav-item">
                            <a href="karwar-college.php" class="nav-link" style="border:1px solid #E87A00;width:100%;text-align:center;font-size:16px;font-family:Enriqueta;font-weight:bold">Karwar</a>
                        </li>
                    </div>
                </ul>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-12">
                    <h3 style="font-family:Domine; font-weight:600;">Affiliated Colleges Haveri</h3>
                        <div class="table-responsive">
                                <table id="customers" style="width:100%;">
                                    <tr>
                                        <th>Sl. No.</th>
                                        <th style="width:40%;text-align:center">College Name</th>
                                        <th style="width:7%;text-align:center">Year of Est.</th>
                                        <th style="width:12%;text-align:center">Course Offered</th>
                                        <th style="width:7%;text-align:center">College Code</th>
                                        <th style="width:10%;text-align:center">Nature of Affiliation and Type</th>
                                        <th style="width:12%;text-align:center">UGC</th>
                                        <th style="width:10%;text-align:center">NAAC</th>
                                        <th style="width:12%;text-align:center">Principal</th>
                                        <th style="width:12%;text-align:center">Phone</th>
                                        <th style="width:12%;text-align:center">Email</th>
                                    </tr>
                            <?php 
				$qry="select * from aff_colleges where city='Haveri'";
				$res=mysqli_query($conn,$qry);
				$cnt=1;
				
				while($row = mysqli_fetch_array($res))
				{
				
				?>
				    <tr>
				    <td><?php echo $cnt++;?></td>
                    <td style="width:40%;font-weight:bold;text-align:left"><?php echo str_replace(";",",",$row['name']); ?></td>
                    <td style="width:7%;"><?php echo $row['year']; ?></td>
                    <td style="width:12%;text-align:left"><?php echo str_replace(";",",",$row['courses']); ?></td>
                    <td style="width:7%;"><?php echo str_replace(";",",",$row['code']); ?></td>
                    <td style="width:10%;"><?php echo str_replace(";",",",$row['nature']); ?></td>
                    <td><?php echo str_replace(";",",",$row['ugc_status']); ?></td>
                    <td><?php echo str_replace(";",",",$row['naac_acc']); ?></td>
                    <td><?php echo $row['principal']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo trim($row['email']); ?></td>
            </tr>
<?php }

?>
</table>
</div>
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
