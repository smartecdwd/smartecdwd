<?php
    session_start();
    error_reporting(0);
    require('db_con_ext_res.php');

    $cou=$_REQUEST['cou'];
    $rno=$_REQUEST['reg'];
    $deg1=$_REQUEST['deg'];
    
    $tbl="";
    if($deg1=='UG')
        $qry="select stream,degree from course where course=$cou";
    else if($deg1=='PG')
        $qry="select stream,degree from course_pg where course=$cou";
    $res=mysqli_query($conn,$qry);
    //echo $qry;
    $row=mysqli_fetch_array($res);
    $tbl=$row['stream'];
    $deg=$row['degree'];
?>


<?php include 'header.php'; ?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong|Akaya+Telivigala|Alice|Average|Andada Pro|Enriqueta">
<link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Fredoka+One&family=Roboto+Slab&family=Signika:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/css/dvstyle.css">
<link rel="stylesheet" href="css/dep_mytable.css">
<style>
        h5{font-family:Alice;color:#0074B7;text-align:center;font-size:20px;font-weight:bold}
	    p{font-family:Average;font-size:17px;color:#000;margin:10px;;text-align:justify}
	    form{ display: block !important; visibility:visible !important}
	    #customers th{padding:2px;}
	    #customers td{padding:2px;}
	    
	    @media print {
            #pnt_img {
            display: none;
            }
        }
</style>


<div class="inner_page">
  <div class="container">
    <div class="row border_around p-3 text-justify">
        <div class="col-sm-12">
            <h2 class="title_head" style="font-family:Domine;text-align:center">Karnatak University, Dharwad</h2>
            <hr>
             <h5>EXTERRNAL RESULTS</h5>
            <div class="tab-content clearfix">
                 <!--<div id="home" class="container tab-pane active">-->
                    <form method="post">
                        <div class="row">
                            <div class="col-sm-8 offset-md-2">
                                <?
                                    if($deg=='UG'){?>
                                        <p style="font-size:12px">Download Application for RV / RT / Challenge valuation and photo copy by clicking <a href="http://kudrevalapplication.aargeessoftware.com/default.aspx" target="_blank" style="font-size:12px">here</a>
                                <?  }else if($deg=='PG'){?>
                                        <p style="font-size:12px">Download Application for RV / RT / Challenge valuation and photo copy by clicking <a href="http://kudrevalapplicationpg.aargeessoftware.com/default.aspx" target="_blank" style="font-size:12px">here</a>
                                <?  }?>
                                    
                                    <!--<p>Download Application for RV / RT / Challenge valuation and photo copy by clicking <a href="https://www.kud.ac.in/results.php" target="_blank">here</a>. </p>-->
                                <p></p>
                                <p style="font-weight:600;font-size:12px;">ATTENTION</p>
                                <ul style="font-size:12px;font-family:average;color:#000">
                                    <li>The candidate wiling to apply for RV/RT/Challenge valuation and photo copy should submit the application along with the internet result copy available on website within 10 days from the date of declaration of the result on web: kud.ac.in to the Principal concerned. 
                                    </li>
                                    <li>
                                        However, candidate is allowed to apply either for revaluation or challenge valuation for maximum two theory papers only (Practicals/OMR/Dissertation/IA are not permitted).
                                    </li>
                                    <li>
                                        The Principals are informed to accept the application with the self attested internet copy without waiting for the original marks cards up to 10 days.
                                    </li>
                                    <li>
                                        Further, the college will up-load the information of all the candidates of the college within 12 days.
                                    </li>
                                    <li>	
                                        On 12th day, college will remit the fees to university through SBI collect.
                                    </li>
                                    <li>
                                        On 14th day, the college will submit the applications received by the candidates to the special officer, RV/CV Cell, Room No. 203, Vishwachetan Building, Karnatak University, Dharwad along with a challan copy of the fees paid.
                                    </li>
                                    <li>
                                        Further, Principals are informed to surrender the original marks cards of those who have applied for RV/Challenge Valuation to The Special Officer to the address given above, subsequently as and when the original marks cards are received from the University.
                                    </li>
                                </ul>
                                <br><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-10 mx-auto">
                                <?php
                                    $name="";
                                    $cour="";
                                    $sem="";
                                    $result="";
                                    $col="";
                                    $rdt="";
                                    $ldt="";
                                    $ehd="";
                                    $ccode="";
                                    $mprac="";
                                   
                                    
                                    $qry="select * from $tbl where seatno='$rno' and course='$cou'";
                                    //echo "<br>".$qry;
                                    $res=mysqli_query($conn,$qry);
                                    $cnt=0;
                                    
                                    while($row=mysqli_fetch_array($res))
                                    {
                                       $name=$row['Name'];
                                       $cour=$row['CourseName'];
                                       $sno=$row['SEATNO'];
                                       $result=$row['Result'];
                                       $col=$row['collegename'];
                                       $rs_dt=$row['resultdate'];
                                       //$rs_dt=date('d/m/Y',strtotime($rs_dt1));
                                       $ldt=date('d-M-Y',strtotime($row['lastdateforRV']));
                                       $ehd=$row['term'];
                                       $ccode=$row['course'];
                                       $mprac=$row['malpractice'];
                                       $cnt++;
                                    }
                                    
                                    
                                    if($cnt==0)
                                    {
                                        echo "<script>window.location.href='ext_result_m.php?msg=true';</script>";
                                    }
        							?>
        							<div class="table-responsive">
                                        <table id="customers" style="width:80%;font-size:12px;font-family:Average;padding:0px 3px" align="center">
                                    <tr>
                                        <th style="width:25%;text-align:right;background-color:#eee;color:#000;font-family:Average">Course Name</th>
                                        <td style="background-color:#fff"><strong><?php echo $cour;?></strong></td>
                                    </tr>
                                    <tr>
                                        <th style="width:25%;text-align:right;background-color:#eee;color:#000;font-family:Average">Seat No</th>
                                        <td style="background-color:#fff"><strong><?php echo $sno;?></strong></td>
                                    </tr>
                                    <tr>
                                        <th style="width:25%;text-align:right;background-color:#eee;color:#000;font-family:Average">Student Name</th>
                                        <td style="background-color:#fff"><strong><?php echo $name;?></strong></td>
                                    </tr>
                                    <tr>
                                        <th style="width:25%;text-align:right;background-color:#eee;color:#000;font-family:Average">College Name</th>
                                        <td style="background-color:#fff"><strong><?php echo $col;?></strong></td>
                                    </tr>
                                    <?if($deg1=='UG'){?>
                                        <tr>
                                            <th style="width:25%;text-align:right;background-color:#eee;color:#000;font-family:Average">Result Declaration Date</th>
                                            <td style="background-color:#fff"><strong><?php echo $rs_dt;?></strong></td>
                                        </tr>
                                    <?}?>
                                    <!--<tr>
                                        <th style="width:25%;text-align:right;background-color:#eee;color:#000;font-family:Average">Last Date to Apply for RV / CV / RT / Photocopy</th>
                                        <td><strong><?php echo $ldt;?></strong></td>
                                    </tr>-->
                                    <tr>
                                        <th style="width:25%;text-align:right;background-color:#eee;color:#000;font-family:Average">Examination Term</th>
                                        <td style="background-color:#fff"><strong>March 2022</strong></td>
                                    </tr>
                                </table>
                                </div>
                                <br><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-10 mx-auto">
                                <div class="table-responsive">
                                    <?php
                                        if($mprac==0){?>
                                            <table class="table-striped table-bordered" id="customers" style="width:100%;font-size:11px;padding-left:3px;color:#000;" align="center">
                                                <tr>
                                                    <th>Subject Code</th>
                                                    <th>Subject Name</th>
                                                    <?if($deg=='UG'){?>
                                                        <th>Sub Type</th>
                                                    <?}?>
                                                    <th>Max Marks</th>
                                                    <th>Min Marks</th>
                                                    <th>Marks Obtained</th>
                                                    <?if($deg=='UG')
                                                        {?>
                                                            <th>Ext Obtained</th>
                                                        <?}?>
                                                    <th>IA Marks</th>
                                                   <!-- <th>Total Marks</th>-->
                                                    
                                                    <th>IA Marks Obtained</th>
                                                    <th style="width:8%">Tot. Marks Obtained</th>
                                                    <th>Status</th>
                                                    
                                                </tr>
                                                <?php
                                                    $qry="select * from ".$tbl."_Dtl where seatno='$rno' and course='$ccode' ORDER BY SUBJECTCODE";
                                                    $res=mysqli_query($conn,$qry);
                                                    //echo $qry;
                                                    $mx_mark=0;
                                                    $mn_mark=0;
                                                    $ia_mark=0;
                                                    $mx_omark=0;
                                                    $mn_omark=0;
                                                    $ia_omark=0;
                                                    $tm=0;
                                                    $tm_obt=0;
                                                    $pflag=true;
                                                    $th1="";
                                                    $th2="";
                                                    $th3="";
                                                    $ttot=0;
                                                    $gmrk=0;
                                                    
                                                    while($row=mysqli_fetch_array($res))
                                                    {
                                                        $tot_mark=$row["TheoryMax"] + $row["IAMax"];
                                                        $tot_omark=$row["TheoryObtained"] + $row["IAObtained"];
                                                        $mx_mark=$mx_mark + $row["TheoryMax"];
                                                        $mn_mark=$mn_mark + $row["TheoryMin"];
                                                        $ia_mark=$ia_mark + $row["IAMax"];
                                                        $mx_omark=$mx_omark + $row["TheoryObtained"];
                                                        $ttot=0;
                                                        $gmrk=0;
                                                        $th1="";
                                                        $th2="";
                                                        $th3="";
                                                        if($deg=='UG')
                                                        {
                                                            if($row["NoOfPapers"]==1)
                                                            {
                                                                $th1="Theory1: ". $row["Theory1"] ;
                                                                $ttot= $row["Theory1"] ;
                                                            }
                                                            else if($row["NoOfPapers"]==2)
                                                            {
                                                                $th1="Theory1: ". $row["Theory1"] ;
                                                                $th2="Theory2: ". $row["Theory2"] ;
                                                                $ttot= ($row["Theory1"]  + $row["Theory2"]) ;
                                                            }
                                                            else if($row["NoOfPapers"]==3)
                                                            {
                                                                $th1="Theory1: ". $row["Theory1"] ;
                                                                $th2="Theory2: ". $row["Theory2"] ;
                                                                $th3="Theory3: ". $row["Theory3"] ;
                                                                $ttot=($row["Theory1"]  + $row["Theory2"] + $row["Theory3"]);
                                                            }
                                                            else{
                                                                $th1="";
                                                                $th2="";
                                                                $th3="";
                                                            }
                                                            
                                                           /* if($row["Theory1"]!="0" && $row["Theory1"]!=null)
                                                            {   
                                                                $th1="Theory1: ". $row["Theory1"] ;
                                                                $ttot= $row["Theory1"] ;
                                                            }
                                                            else
                                                                $th1="";
                                                                
                                                            if($row["Theory2"]!="0" && $row["Theory2"]!=null)
                                                            {
                                                                $th2="Theory2: ". $row["Theory2"] ;
                                                                $ttot=$ttot + $row["Theory2"] ;
                                                            }
                                                            else
                                                                $th2="";
                                                            
                                                            if($row["Theory3"]!="0" && $row["Theory3"]!=null)
                                                            {
                                                                $th3="Theory3: ". $row["Theory3"] ;
                                                                $ttot=$ttot + $row["Theory3"] ;
                                                            }
                                                            else
                                                                $th3="";
                                                            */
                                                        }
                                                        $ia_omark=$ia_omark + $row["IAObtained"];
                                                        
                                                        $st="";
                                                        
                                                        //if($row["status"]=="0")
                                                        if($row["fail"]=="FAIL")
                                                        {
                                                            $st="F";
                                                            $pflag=false;
                                                        }
                                                        else
                                                            $st="P";
                                                        //elseif($row["status"]=="1")
                                                        //    $st="P";
                                                        echo "<tr><td style='text-align:center;width:8%'>".$row['subjectcode']."</td>";
                                                        if($deg1=='UG'){
                                                            echo "<td style='font-family:10px;background-color:#fff;width:15%'>".$row['SubjectName']."</td>";
                                                            echo "<td style='text-align:center;background-color:#fff;width:5%'>".$row['theorypracticle']."</td>";
                                                        }
                                                        else
                                                            echo "<td style='font-family:10px;background-color:#fff;width:25%'>".$row['SubjectName']."</td>";
                                                            
                                                        
                                                        echo "<td style='text-align:center;background-color:#fff'>".$row["TheoryMax"]."</td>".
                                                        "<td style='text-align:center;background-color:#fff'>".$row['TheoryMin']."</td>".
                                                        "<td style='text-align:center;background-color:#fff;width:8%'>".$row["TheoryObtained"]."</td>";
                                                        if($deg=='UG')
                                                        {
                                                            echo "<td style='text-align:center;background-color:#fff'>";
                                                            if($th1!="")
                                                                echo $th1."<br>";
                                                            if($th2!="")
                                                                echo $th2."<br>";
                                                            if($th3!="")
                                                                echo $th3."<br>";
                                                            if($ttot>=0 && $th1!=""){
                                                                    echo "Grace Marks :". $row["GraceMarks"]."<br>"; 
                                                                    echo "Total : ". ($ttot + $row["GraceMarks"]) ; 
                                                                    
                                                            }
                                                                
                                                        }
                                                        echo "<td style='text-align:center;background-color:#fff;width:8%'>".$row["IAMax"]."</td>".
                                                        //"<td style='text-align:center;background-color:#fff'>".$tot_mark."</td>".
                                                        "<td style='text-align:center;background-color:#fff;width:8%'>".$row["IAObtained"]."</td>".
                                                        "<td style='text-align:center;background-color:#fff'>".$tot_omark."</td>".
                                                        "<td style='text-align:center;background-color:#fff'>".$st."</td></tr>";
                                                       
                                                       $tm=$tm + $tot_mark;
                                                       $tm_obt=$tm_obt + $tot_omark;
                                                        
                                                    }
                                                    
                                                    $res="";
                                                    if($pflag==false)
                                                        $res="Fail";
                                                    else
                                                        $res="Pass";
                                                        
                                                    echo "<tr><td colspan='2' style='text-align:center;font-weight:bold'>Total</td>";
                                                    if($deg1=='UG')
                                                        echo "<td style='text-align:center;font-weight:bold'></td>";
                                                    
                                                    echo "<td style='text-align:center;font-weight:bold'>".$mx_mark."</td>".
                                                        "<td style='text-align:center;font-weight:bold'>".$mn_mark."</td>".
                                                        "<td style='text-align:center;font-weight:bold'>".$mx_omark."</td>";
                                                        if($deg=='UG')
                                                        {
                                                            echo "<td style='text-align:center;font-weight:bold'></td>";
                                                        }
                                                        echo "<td style='text-align:center;font-weight:bold'>".$ia_mark."</td>".
                                                        //"<td style='text-align:center;font-weight:bold'>".$tm."</td>".
                                                        
                                                        "<td style='text-align:center;font-weight:bold;width:8%'>".$ia_omark."</td>".
                                                        "<td style='text-align:center;font-weight:bold'>".$tm_obt."</td>".
                                                        "<td style='text-align:center;font-weight:bold'>".$res."</td>";
                                               ?>
                                                <tr>
                                                    <td colspan="2" style='text-align:right;font-weight:bold'>Result : </td>
                                                    <td colspan="8" style='text-align:left;font-weight:bold;padding:2px 7px;font-size:14px'> <?echo $result;?></td>
                                                    <td></td>
                                                </tr>
                                               </table>
                                        <?}
                                        else{?>
                                            <p style="color:red;font-weight:bold;font-size:18px;text-align:center">Result is withheld</p>
                                        <?}
                                        mysqli_close();
                                        ?>
                               </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-8 mx-auto">
                                 <!--<span style="float:right">
                                    <!--<a href="#"  class="form-control btn-success noprint" onclick="window.print();"> Print</a>-->
                                    <center><img src="image/print.png" id="pnt_img" onclick="window.print();" class="noprint" style="cursor:pointer;width:20%"></center>
                                <!--</span>
                                <!--<span style="float:right">
                                    <input type="submit" class="form-control bg-primary" style="width:200px;color:#fff">
                                </span>-->
                            </div>
                        </div>
                    </form>
                        </div>
                    </div>
                </div>
	<div class="clearfix"></div>
</div>  
</div>
</div>
</div>
  
</section>
<!-- <h4 style="margin-top:12px !important;"><a href="arts.php" style="font-family: 'Jockey One', sans-serif; font-size:14px"><i class="fa fa-caret-left"></i>&nbsp;&nbsp;BACK TO PAGE</a> </h4> -->


          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="clearfix"></div>
<script>
    
</script>
<?php include 'footer-res.php'; ?>