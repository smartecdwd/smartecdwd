<?php
    error_reporting(0);
    include 'db_con.php';

    $qry="select Distinct(year(pdate)) as pd from adm_pro order by pd";
    $res=mysqli_query($conn,$qry);
    $j=0;$yr;
    while($row=mysqli_fetch_array($res))
    {
        $yr[$j++]=$row['pd'];
    }
?>


   <?php include 'header.php'; ?>
<link href="css/css/vstyle.css" rel="stylesheet" type="text/css" />
<link href="css/mytable.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Fredoka+One&family=Roboto+Slab&family=Signika:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Domine&family=Kanit:wght@300&family=PT+Serif&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong|Akaya+Telivigala|Alice|Average|Andada Pro|Enriqueta">

<link href="css/css/acc.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


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
				<a href="the-syndicat.php">The Syndicate</a>
				<a href="syndicate-proceedings.php" class="active">Syndicate Proceedings</a>
				<a href="the-academic-council.php">The Academic Council</a>
				<a href="the-finance-committee.php">The Finance Committee</a>
				<a href="deans-of-faculty.php" >Deans of Faculties</a>
				<a href="chairperson-Of-departments.php">Chairpersons of Departments</a>
				<a href="telephone-directory.php">Contact Details</a>
                
            </div>
        
      </div>
      <div class="col-md-9 col-sm-6">
<section class="sectione2">
  <div class="container">
  
    <!-- Tab panes -->
    <div class="tab-content">
      <div id="home" class="container tab-pane active">
        <h3 style="font-family:Domine; font-weight:600;text-align:center">Syndicate Meeting Proceedings</h3>
              <!-- <h4 style="font-family:Average;font-size:17px">Syndicate Meeting Proceedings 2019, 2020, 2021</h4>-->
               <br>
                <div class="row">
                    <div class="col-sm-12">
                        <?php
                            for($i=0;$i<$j;$i++)
                            {
                        ?>
                            <div class="row">
                                <div class="col-sm-10 mx-auto">
                                    <div class="card">  
                                        <div class="card-header" id="heading-2">  
                                            <h2 class="mb-0">  
                                                <a class="collapsed" role="button" data-toggle="collapse" href="#y<? echo $yr[$i];?>" aria-expanded="false" aria-controls="collapse-2">  
                                                <? echo $yr[$i]; ?>
                                                </a>  
                                            </h2>  
                                        </div>  
                                        <div id="y<? echo $yr[$i];?>" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">  
                                            <div class="card-body">  
                                               <!--<ul style="list-style:none">-->
                                               <table id="customers" style="width:100%;">
                                                    <tr>
                                                        <th width="10%" style="text-align:center">Sl. No.</th>
                                                        <th width="70%" style="text-align:center">Proceedings</th>
                                                        <th width="20%" style="text-align:center">Date</th>
                                                    </tr>
                                               
                            <?php
                                                $qry="select * from adm_pro where year(pdate)=".$yr[$i]. " order by pdate";
                                                $res=mysqli_query($conn,$qry);
                                                $cnt=1;
                                                while($row=mysqli_fetch_array($res))
                                                {
                            ?>
                                                    <tr>
                                                        <td style="text-align:center"><? echo $cnt++; ?></td>
                                                        <td><a href="https://www.kud.ac.in/admin_panel/admin/file_upload/syn_pro/<? echo $row['fname'];?>" target="_blank"><? echo $row['details']; ?></a></td>
                                                        <td style="text-align:center"><? echo date('d-M-Y',strtotime($row['pdate'])); ?></td>
                                                    </tr>
                                                   <!--<li>
                                                       <a href='#' style="height:35px;color:#151983;font-size:14px;font-family:Average;margin-left:10px;" target='blank'><? //echo  $row['details'];?>
                                                       </a></li>-->
                            <?
                                                }
                            ?>
                                              </table>
                                                </ul>
                                            </div>  
                                        </div>  
                </div>              </div>
                                </div>
                            <?
                                
                            }
                        ?>      
                        
               		  
					  
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
