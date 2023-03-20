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

<div class="inner_page">
  <div class="container">
    <div class="row border_around p-3 text-justify">
      <div class="col-md-3 d-none d-sm-block col-sm-6" style="background-color:#e1ebea">
	  <h5 style="text-align:center;color:#BB6464;height:50px;padding:20px;font-size:17px;border-bottom:2px solid #BB6464;font-family:Alice"><b>ADMINISTRATION</b></h5>
           <br>

            <div class="vertical-menu" style="width:100%">
               <!--  <a href="index.php">Home</a> -->
                <a href="chancellor.php">Chancellor</a>
                <a href="pro-chancellor.php">Pro - Chancellor</a>
				<a href="vice-chancellor.php">Vice - Chancellor</a>
				<a href="registrar.php">Registrar</a>
				<a href="registrar-evaluation.php">Registrar (Evaluation)</a>
				<a href="finance-officer.php">Finance officer</a>
				<a href="the-syndicat.php" class="active">The Syndicate</a>
				<a href="syndicate-proceedings.php">Syndicate Proceedings</a>
				<a href="the-academic-council.php">The Academic Council</a>
				<a href="the-finance-committee.php">The Finance Committee</a>
				<a href="deans-of-faculty.php" >Deans of Faculties</a>
				<a href="chairperson-Of-departments.php">Chairpersons of Departments</a>
				<a href="telephone-directory.php">Contact Details</a>
                
            </div>
        
      </div>
      <div class="col-sm-6 col-md-9">
<section class="sectione2">
  <div class="container">
  
    <!-- Tab panes -->
    <div class="tab-content">
      <div id="home" class="container tab-pane active">
        <h3 style="font-weight:600;font-family:Trirong;text-align:center">Syndicate Members</h3>
               <!-- <h4 class="pt-2">List of Members of Syndicate K.U. Dharwad. (As on 14.07.2021)</h4> -->
                <div class="row">
                    <table style="width:100%;color:#000" id="customers">
                        <tr>
                            <th style="width:10%">Sl. No.</th>
                            <th style="width:90%">Members</th>
                        </tr>
                        <?php
                            $qry="select * from adm_mem where design like 'Syndicate' order by vord";
                            $res=mysqli_query($conn,$qry);
                            $cnt=1;
                            while($row=mysqli_fetch_array($res))
                            {
                                echo "<tr>";
                                //echo "<td style='text-align:center'>".$cnt++."</td>";
                                echo "<td style='text-align:center'>".$row['vord']."</td>";
                                echo "<td><strong>".$row['name']."</strong><br>".nl2br($row['details']);
                                if($row['phone']!="")
                                    echo "<br>".$row['phone'];
                                if($row['email']!="")
                                    echo "<br>".$row['email'];
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
