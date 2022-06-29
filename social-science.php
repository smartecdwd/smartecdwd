<?php
session_start();
error_reporting(0);
include 'db_con.php';

  $_SESSION['dbranch']='Social Science';

?>


   <?php include 'header.php'; ?>
      <link href="css/mytable.css" rel="stylesheet" />
<style>
    /*table tr:hover
    {
        background-color:#87cefa;
        color:#000;
    }
    tr:first-child:hover {
        background-color:#fff;
        color:#000;}*/
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
            <li class="breadcrumb-item active" aria-current="page">Social Science</li>
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
               
                <a href="arts.php" >Arts</a>
                <a href="science.php">Science</a>
				<a href="social-science.php" style="background-color:#6495ED" class="active">Social Science</a>
				<a href="commerce.php">Commerce</a>
				<a href="law.php">Law</a>
				<a href="education.php">Education</a>
				<a href="management.php">Management</a>
				<a href="diploma.php">Diploma</a>
            </div>
        
      </div><br>
<br> -->

      <div class="col-lg-12" style="padding:15px">

        <h2 style="font-family:Domine; font-weight:600; text-align:center;font-size:26px">Faculty of Social Science</h2>
		    
            <table id="customers"  align="center" style="width:80%;text-align:left">
                <tr>
                    <th style="text-align:center;width:10%">Sl. No.</th>
                    <th >Departments</th>  
                </tr>
		<?php
		
		
				$qry="select * from dep_mas where branch='Social Science' order by dname";
				
				$res=mysqli_query($conn,$qry);
				$cnt=1;
				while($row=mysqli_fetch_array($res))
				{
				/**$dn=$row['dname'];
				$dj=$row['dobj'];
				$fn=$row['fname'];
				$fid=$row['dmf_id'];**/
				
				
				echo "<tr style='height:35px'>";
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