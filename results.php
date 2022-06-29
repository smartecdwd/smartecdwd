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
      <div class="col-sm-3" style="background-color:#e1ebea">
	  <h5 style="text-align:center;color:#BB6464;height:50px;padding:20px;font-size:17px;border-bottom:2px solid #BB6464;font-family:Alice"><b>EXAM SECTION</b></h5>
           <br>

            <div class="vertical-menu" style="width:100%">
               <!--  <a href="index.php">Home</a> -->
                <a href="exam-section-regulations.php">Regulations</a>
				<a href="results.php" class="active">Result</a>
				<a href="application-entry-for-colleges.php" >Applications Entry For Colleges</a>
				
                <a href="sub_code_pg.php">Subject Code for PG</a>
                <a href="sub_code_ug.php">Subject Code for UG</a>
            </div>
        
      </div><br>
<br>

      <div class="col-sm-9 director_img">
        <h2 class="title_head" style="font-family:Domine;text-align:center">Results</h2>
        <hr>
            <div class="row">
                <div class="col-sm-12">
                    <table id="customers" style="width:80%" align="center">
                        <tr>
                            <th style="width:10%">Sl. No</th>
                            <th style="width:90%">Links</th>
                        </tr>
                        <tr>
                            <td style="text-align:center">
                                1.
                            </td>
                            <td><a href="http://kudrevalapplication.aargeessoftware.com/default.aspx" target="_blank">Revaluation Application for UG </a></td>
                        </tr>
                        <tr>
                            <td style="text-align:center">
                                2.
                            </td>
                            <td><a href="http://kudrevalapplicationpg.aargeessoftware.com/default.aspx" target="_blank">Revaluation Application for PG </a></td>
                        </tr>
                    </table>                
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-4 mx-auto">
                    <br><br>
                    <center>
                    <a class="btn btn-success" href="result-m.php" role="button" style="border-radius:5px;box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">Click to View Result</a>
                    </center>
                </div>
            </div>
            <div class="clearfix"></div>
      </div>
    </div>
    



    
  </div>
</div>
<div class="clearfix"></div>






	
	
<?php include'footer.php'; ?>
