<?php
    error_reporting(0);
    include 'db_con.php';
    include 'header.php'; 
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong|Akaya+Telivigala|Alice|Average|Andada Pro|Enriqueta">
<link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Fredoka+One&family=Roboto+Slab&family=Signika:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">

<link href="css/mytable.css">
<div class="inner_page">
  <div class="container">
    <div class="row border_around p-3 text-justify">
      <div class="col-md-3 d-none d-sm-block col-sm-6" style="background-color:#e1ebea">
	  <h5 style="text-align:center;color:#BB6464;height:50px;padding:20px;font-size:17px;border-bottom:2px solid #BB6464;font-family:Alice"><b>RESEARCH</b></h5>
           <br>

            <div class="vertical-menu" style="width:100%;height:-101%">
               <!--  <a href="index.php">Home</a> -->
                <a href="research-pol.php">Research Policies</a>
				<a href="research-sg.php">Research Seed Grants</a>
				<a href="research-dp.php">Departmental Projects</a>
				<a href="ind-fac.php">Individual Faculty Projects</a>
				<a href="research-facilities.php">Research Facilities</a>
                <a href="pmeb.php" class="active">PMEB</a>
                <br>
            </div>
        
      </div><br>
<br>

      <div class="col-sm-6 col-md-9 director_img">
        <h2 class="title_head" style="font-family:Domine;text-align:center">PMEB</h2>
        <hr>
            <div class="row">
                <div class="col-sm-12">
                    <div class="table-responsive">
			            <table id="customers" style="width:80%" align="center">
			                <tr>
			                    <th>Sl. No.</th>
			                    <th>PMEB</th>
			                </tr>
                            <tr>
                                <td class="text-center" width="50">1</td>
                                <td width="540"><a href="https://www.kud.ac.in/file_upload/research/06 PMEB Profile 2022-23.pdf" target="_blank">PMEB Profile 2022-23</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
      </div>
    </div>
    



    
  </div>
</div>
<div class="clearfix"></div>






	
	
<?php include'footer.php'; ?>
