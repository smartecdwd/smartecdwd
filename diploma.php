
<?php
session_start();
error_reporting(0);
include 'db_con.php';
  $_SESSION['dbranch']='Diploma';


?>


   <?php include 'header.php'; ?>
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong|Akaya+Telivigala|Alice|Average|Andada Pro|Enriqueta">
<link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Fredoka+One&family=Roboto+Slab&family=Signika:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">
<link href="css/mytable.css">
<style>
    h5{font-family:Alice;color:#0074B7;text-align:center;font-size:20px}
	 p{font-family:Average;font-size:17px;color:#000;margin:10px;;text-align:justify}
</style>

<!--<div class="page_head">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1 class="d-block">Karnatak University Dharwad</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Departments</li>
            <li class="breadcrumb-item active" aria-current="page">Diploma</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>-->



<div class="inner_page">
  <div class="container">
    <div class="row border_around p-3 text-justify">
     <!--  <div class="col-sm-3" style="background-color:#eee">
	  <h5 style="text-align:center; padding-top:20px; "><b>DEPARTMENTS</b></h5>
           <br>

            <div class="vertical-menu" style="width:100%">
               
                <a href="arts.php">Arts</a>
                <a href="science.php">Science</a>
				<a href="social-science.php">Social Science</a>
				<a href="commerce.php">Commerce</a>
				<a href="law.php">Law</a>
				<a href="education.php">Education</a>
				<a href="management.php">Management</a>
				<a href="diploma.php" class="active" style="background-color:#6495ED">Diploma</a>
				
				
                
            </div>
        
      </div><br>
<br> -->

      <div class="col-lg-12">

<h2 style="font-family:Domine; font-weight:600; text-align:center;font-size:26px">PG Diploma</h2>
							
							
			

             <table id="customers" align="center" style="width:80%;text-align:left">
              <tr>
                <th style="text-align:center;width:10%" >Sl. No.</th>
                <th >Departments</th>               
				
              </tr>
		<?php
		
		
				$qry="select * from vw_dep_file where branch='Diploma' order by dname";
				
				$res=mysqli_query($conn,$qry);
				$cnt=1;
				while($row=mysqli_fetch_array($res))
				{
				/**$dn=$row['dname'];
				$dj=$row['dobj'];
				$fn=$row['fname'];
				$fid=$row['dmf_id'];**/
				
				
				echo "<tr>";
				echo "<td style='text-align:center; width:10%;'>".$cnt++."</td>";
				echo "<td style='width:95%'><a href='history-development.php?nid=".$row['did']."' >".$row['dname']."</a></td>";
				
				
				echo "</tr>";
				}
		?>
             

            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="clearfix"></div>


	
<?php include'footer.php'; ?>
