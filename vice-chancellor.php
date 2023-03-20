<?php
    error_reporting(0);
    include 'db_con.php';

    $qry="select * from adm_page where design like 'Vice Chancellor'";
    $res=mysqli_query($conn,$qry);
    $nm="";$dsc="";$imgc="";$ph="";$qu="";$prf="";
    while($row=mysqli_fetch_array($res))
    {
        $cnt++;
        $nm=$row['name'];
        $dsc=$row['descp'];
        $imgc=$row['ch_pic'];
        $ph=$row['ph'];
        $qu=$row['quali'];
        $prf=$row['info'];
        
    }


?>


   <?php include 'header.php'; ?>
    <link href="css/css/vstyle.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Fredoka+One&family=Roboto+Slab&family=Signika:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Domine&family=Kanit:wght@300&family=PT+Serif&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong|Akaya+Telivigala|Alice|Average|Andada Pro|Enriqueta">

<!--<div class="page_head">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1 class="d-block">Karnatak University Dharwad</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Administration</li>
            <li class="breadcrumb-item active" aria-current="page">Vice - Chancellor</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>
-->


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
				<a href="vice-chancellor.php" class="active" >Vice - Chancellor</a>
				<a href="registrar.php">Registrar</a>
				<a href="registrar-evaluation.php">Registrar (Evaluation)</a>
				<a href="finance-officer.php">Finance officer</a>
				<a href="the-syndicat.php">The Syndicate</a>
				<a href="syndicate-proceedings.php">Syndicate Proceedings</a>
				<a href="the-academic-council.php">The Academic Council</a>
				<a href="the-finance-committee.php">The Finance Committee</a>
				<a href="deans-of-faculty.php" >Deans of Faculties</a>
				<a href="chairperson-Of-departments.php">Chairpersons of Departments</a>
				<a href="telephone-directory.php">Contact Details</a>
                
            </div>
        
      </div><br>
<br>

      <div class="col-sm-6 col-md-9">



<section class="sectione2">
  <div class="container">
  
    <!-- Tab panes -->
    <div class="tab-content">
     
	
	<div id="menu2" class="container tab-pane active"><br>
        <h3 style="font-family:Trirong;color:#000; font-weight:600;text-align:center">Vice Chancellor</h3>
            <div class="row">

               <div class="col-lg-12">
                <div class="contains shadow-sm">
                  <div class="administration">
                   <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($imgc); ?>">
                  </div>
                  <div class="administration">
                      
                    <center><h3 style="height:50px;font-family:'Enriqueta';background-color:#e1ebea;font-size:100%;padding:8px;border-right:5px solid #BB6464;border-left:5px solid #BB6464 ;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;width:80%"><strong><?php echo $nm; 
                            if($qu!="")
                            {
                            ?>
                            <br><small><b><? echo $qu; ?></b>
                            </small>
                            <?}?>
                            </strong></h3></center>
                         <div class="mr-auto text-center" style="font-family:Average;font-size:18px">
                        <?php echo $dsc; 
                            if($ph!="")
                            {
                        ?><br>
                        Ph : <?php echo $ph; 
                            }
                        ?>
                        <?php 
                            if($prf=="")
                            {?>
                               <br> <button class="btn2 view_btn"><a href="#">More Details</a></button>
                            <?}else{?>
                               <br> <button class="btn2 view_btn"><a href='<?echo $prf;?>' target="blank">More Details</a></button>
                            <?}?>
                        </div>
                  </div>

                </div> 
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
