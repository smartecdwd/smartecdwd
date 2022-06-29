<?php
session_start();
error_reporting(0);
include 'branch_session.php';
require('db_con.php');
$_SESSION['branch'];

	
?>


<?php include 'dep-header.php'; ?>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/fac_img.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong|Akaya+Telivigala|Alice|Average|Andada Pro|Enriqueta">
<link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Fredoka+One&family=Roboto+Slab&family=Signika:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">
<style>
    #color div:hover{
        background-color:#6E3CBC;
    }
</style>

<!--<div class="page_head">
 <!-- <div class="container">
    <div class="row">-->
      <!--<div class="col-sm-12">
        <h1 class="d-block">Karnatak University Dharwad</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Departments</li>
			<?php 
				$qry="select * from dep_mas where did='". $_SESSION['branch']."'";
				$res=mysqli_query($conn,$qry);
				while($row = mysqli_fetch_assoc($res))
				{
				$branch=$row['branch'];
				//echo $branch
				?>
			
            <li class="breadcrumb-item active" aria-current="page"><?php echo $branch; ?></li>
			<?php  
				}
				
				?>-->
          </ol>
        </nav>
     <!-- </div>
    </div>
  </div>-->
<!--</div>-->



<div class="inner_page">
  <div class="container">
    <div class="row border_around p-3 text-justify">
      <!-- <div class="col-sm-3" style="background-color:#eee">
	  <h5 style="text-align:center; padding-top:20px; "><b>DEPARTMENTS</b></h5>
           <br>

            <div class="vertical-menu" style="width:100%">
              
                <a href="arts.php" class="active" style="background-color:#6495ED">Arts</a>
                <a href="science.php">Science</a>
				<a href="social-science.php">Social Science</a>
				<a href="commerce.php">Commerce</a>
				<a href="law.php">Law</a>
				<a href="education.php">Education</a>
				<a href="management.php">Management</a>
				<a href="diploma.php">Diploma</a>
				
				
                
            </div>
        
      </div><br>
<br>
 -->
      <div class="col-lg-12">
        <?php
	 		$_SESSION['branch'];
	 	 	$qry="select * from dep_mas where did='". $_SESSION['branch']."'";
            $res=mysqli_query($conn,$qry);
            
            while($row=mysqli_fetch_assoc($res))
			{
			    $nid=$row['did'];
			}
			 
                //$nid=$_REQUEST['nid'];
            $qry="select * from vw_dep_file where did=".$nid." ";
            $res=mysqli_query($conn,$qry);
            $row=mysqli_fetch_assoc($res);
            // while($row==mysqli_fetch_assoc($res))
            { ?>
			
               <h2 class="title_head" style="font-family:Domine; font-weight:600; padding-top:30px;"><?php echo $row['dname']; ?> &nbsp;<i class="fa fa-caret-right"></i> Faculty</h2>
              <?php 
                }
   				?>
   				<br>
                <div class="container" style="background-color:#f1f1f1;padding:30px">
                    <?php
                        $nid=$_REQUEST['nid'];
                        $qry="select * from faculty where did=".$nid." order by dord";
                        $res=mysqli_query($conn,$qry);
                        $cnt=1;
                        $fid="";
                        
                        while($row=mysqli_fetch_assoc($res))
                        {
                            $fid=$row["fid"];
                            if($cnt==1)
                           {
                                echo "<div class='row'>";
                            }
                        ?> 
                                        <div class="col-md-4 col-sm-4 col-xs-12 rounded-top" tyle="background-color:#008080">
                                          <div class="row ourTeam-box text-center" style="border-color:#008080;border-radius:15px">
                                            <div class="col-md-12 section1">
                                              <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['pimg']); ?>">
                                            </div>
                                            <div class="col-md-12 section2 pb-3" style="background-color:#fff">
                                              <p style="color:#008080;font-size:18px;font-family:Andada Pro"><?php echo $row['fname'];?></p>
                                              <span style="color:#000"><?php echo $row['design'];?></span><br>
                                    		  <span style="color:#000"><?php echo $row['dname'];?></span><br>
                                    		  <span style="color:#000"><i class="fa fa-phone"></i>&nbsp;<?php echo $row['mob'];?></span><br>
                                              <span style="color:#000"><i class="fa fa-envelope"></i>&nbsp;<?php echo $row['email'];?></span>
                                            </div>
                                            <div class="col-md-12 section3" style="height:40px;background-color:#008080">
                                               <div id="color" style="width:50%;padding-top:10px;border-right:1px solid #fff">
                                                    <a href="<?php echo $row['vurl'];?>" target="_blank" style="color:#fff;font-weight:bold;">View Vidwan</a>
                                                </div>
                                                <?php
                                                   /* $str="select * from faculty_file where fid=".$fid."";
                                                    
                                                    $result=mysqli_query($conn,$str);
                                                    $row1=mysqli_fetch_assoc($result);
                                                    $rcnt=mysqli_num_rows($result);*/
                                                ?>
                                                <div style="width:50%;padding:3px;float:right;postion:absolute;margin-top:-25px;">
                                                <?php
                                                    //if($rcnt>0)
                                                    if($row['pro_pdf']!="")
                                                    {
                                                ?>
                                                        <a href="https://www.kud.ac.in/admin_panel/fac/prof/<?php echo $row['pro_pdf'];?>" target="_blank" style="color:#fff;font-weight:bold;">View Profile</a>
                                                 <?php  }
                                                    else
                                                    {
                                                ?>
                                                    <a href="#" style="color:#fff;font-weight:bold;">View Profile</a>
                                                <?php 
                                                    }
                                                 ?>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                <?php
                                     if($cnt==3)
                                        echo "</div>";
                                    
                                    if($cnt==3)
                                       $cnt=1;
                                    else
                                     $cnt++;
                                }
                                ?>
                              
                            </div>
     </div>
     </div>
</div>
</div>
 </div>
    </div>
  </div>
</div>
<div class="clearfix"></div>
<?php include 'footer.php'; ?>