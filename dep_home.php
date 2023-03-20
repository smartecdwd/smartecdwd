<?php
session_start();
error_reporting(0);
include 'db_con.php';
  


?>


   <?php include 'header.php'; ?>
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong|Akaya+Telivigala|Alice|Average|Andada Pro|Enriqueta">
<link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Fredoka+One&family=Roboto+Slab&family=Signika:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">
<link href="css/mytable.css">
<style>
    h5{font-family:Alice;color:#0074B7;text-align:center;font-size:20px}
	 p{font-family:Average;font-size:17px;color:#000;margin:10px;;text-align:justify}
</style>


<div class="inner_page">
  <div class="container">
    <div class="row border_around p-3 text-justify">

      <div class="col-lg-12">

        <h2 style="font-family:Domine; font-weight:600; text-align:center;font-size:26px">Faculty of <?php echo $_SESSION['dbranch']; ?></h2>
             <table id="customers" align="center" style="width:80%;text-align:left">
              <tr>
                <th style="text-align:center;width:10%" >Sl. No.</th>
                <th >Departments</th>               
				
              </tr>
		<?php
		
		
				$qry="select * from dep_mas where branch like '".$_SESSION['dbranch']."'";
				
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