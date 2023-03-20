<?php
error_reporting(0);
include 'db_con.php';



?>


   <?php include 'header.php'; ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong|Akaya+Telivigala|Alice|Average|Andada Pro|Enriqueta">
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@10%0&family=Fredoka+One&family=Roboto+Slab&family=Signika:wght@10%0&family=Zen+Kurenaido&display=swap" rel="stylesheet">
    <link href="css/mytable.css">
    <style>
       /* @font-face {
            font-family: 'Kedage-n.ttf';
            src: url('fonts/Kedage-n.ttf');
        }*/
        
        @font-face {
            font-family: NUDIUNI01E;
            src: url(https://karnataka.gov.in/frontend/opt1/fonts/NUDI UNI 01E.ttf) format(truetype);
        }
        
        table{
            font-family:'NUDIUNI01E';
            font-size:16px;
        }
        table a{color:red;}
        table td{padding:5px;}
    </style>

<div class="inner_page">
  <div class="container">
    <div class="row border_around p-3 text-justify">
      <div class="col-md-3 d-none d-sm-block col-sm-6" style="background-color:#e1ebea">
	  <h5 style="text-align:center;color:#BB6464;height:10%px;padding:20px;font-size:17px;border-bottom:2px solid #BB6464;font-family:Alice"><b>MORE LINKS</b></h5>
           <br>

            <div class="vertical-menu" style="width:100%">
               <!--  <a href="index.php">Home</a> -->
               <!--<a href="email-directory.php">Email Directory</a>-->
                <a href="good_gov.php" class="active">Good Governance Initiatives</a>
                <!--<a href="good_gov_init.php">Good Governance Initiatives (ಸುಶಾಸನ) </a>-->
				<a href="statutes-acts.php">Statutes and Acts</a>
				<!--<a href="RTI-act-2005-PIO.php">RTI Act 2005 / PIO's</a>-->
				<a href="UGC-regulations.php">Regulations / Guidelines / Ordinance</a>
                <a href="rti.php">RTI</a>
                <a href="fin_officer.php">Finance Section</a>
            </div>
        
      </div><br>
<br>

      <div class="col-sm-6 col-md-9 director_img">
        <h2 class="title_head" style="font-family:Trirong;text-align:center">Good Governance Initiatives</h2>
        <hr>
			   <div class="table-responsive">
			       <?php
			            $qry="select * from good_gov order by ggid desc limit 1";
                            $res=mysqli_query($conn,$qry);
                            $row=mysqli_fetch_array($res);
                            echo $row['gdesc'];
                    ?>
			        <!--<table id="customers" style="width:80%;font-family:'Kedage-n';font-size:17px;" align="center">
                    <tr>
                        <th colspan="2" class="text-center" width="640">Good Governance Initiatives</th>
                    </tr>
                    <tr>
                        <td class="text-center" width="10%" style="font-family:exo;font-size:14px">1</td>
                        <td width="90%"> 
                            ಯುಜಿಸಿ ಮಾರ್ಗಸೂಚಿಗಳು ಹಾಗೂ ಮಾನದಂಡಗಳಂತೆ ಮಾನ್ಯ ರಾಜ್ಯಪಾಲರು ಮತ್ತು ಕುಲಾಧಿಪತಿಗಳಿಂದ ಅನುಮೋದನೆಗೊಂಡ ಸಂಬಂಧಪಟ್ಟ ವಿಶ್ವವಿದ್ಯಾಲಯದ ಎಲ್ಲಾ ಪರಿನಿಯಮಗಳು (ಪಿಡಿಎಫ್ ವಿನ್ಯಾಸದಲ್ಲಿ)
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" width="10%" style="font-family:exo;font-size:14px">2</td>
                        <td width="90%"> 
                            ವಾರ್ಷಿಕ ಆಯವ್ಯಯದ ಸಂಪೂರ್ಣ ಮಾಹಿತಿಗಳನ್ನೊಳಗೊಂಡ ಕಾಲಾನುಕ್ರಮವಾಗಿ ವಾರ್ಷಿಕ ಆಯವ್ಯಯಗಳ ಎಲ್ಲಾ ದಾಖಲೆಗಳುಗಳು 
                        </td>
                    </tr>
                   
                   <tr>
                        <td class="text-center" width="10%" style="font-family:exo;font-size:14px">3</td>
                        <td width="90%"> 
                            ಕಾಲಾನುಕ್ರಮವಾಗಿ ಎಲ್ಲಾ ವಾರ್ಷಿಕ ವರದಿಗಳು ಹಾಗೂ ಲೆಕ್ಕಪರಿಶೋಧನಾ ವರದಿಗಳುವರದಿಗಳು 
                        </td>
                        
                    </tr>
                    
                    <tr>
                        <td class="text-center" width="10%" style="font-family:exo;font-size:14px">4</td>
                        <td width="90%"> 
                            <a href="https://www.kud.ac.in/syndicate-proceedings.php" style="color:#DF362D" target="_blank">
                                ಸಿಂಡಿಕೇಟ್, ಶೈಕ್ಷಣಿಕ ಪರಿಷತ್ತು ಹಾಗೂ ಹಣಕಾಸು ಸಮಿತಿಗಳ ರಚನೆಯ ವಿಧಿ ವಿಧಾನ, ಈ ಪ್ರಾಧಿಕಾರಗಳ ಪಾತ್ರ ಹಾಗೂ ಹೊಣೆಗಾರಿಕೆಗಳು, ಇವುಗಳ ಸದಸ್ಯರ ವಿವರಗಳು. ಈ ಪ್ರಾಧಿಕಾರಗಳ ಸಭೆಗಳ ಕಾರ್ಯಸೂಚಿ ಮತ್ತು ನಡವಳಿಗಳು 
                            </a> 
                        </td>
                       
                    </tr>
                
                    <tr>
                        <td class="text-center" width="10%" style="font-family:exo;font-size:14px">5</td>
                        <td width="90%"> 
                            <a href="https://www.kud.ac.in/admin_panel/noti/6.KUD%20Assests...pdf" style="color:#DF362D" target="_blank">
                                 ವಿಶ್ವವಿದ್ಯಾಲಯದ ಎಲ್ಲಾ ಸ್ಥಿರಾಸ್ತಿಗಳ ವಿವರಗಳುಳ ವಿವರಗಳು 
                            </a>
                        </td>
                    </tr>
                    
                    <tr>
                        <td class="text-center" width="10%" style="font-family:exo;font-size:14px">6</td>
                        <td width="90%"> 
                            ವಿಶ್ವವಿದ್ಯಾಲಯದ ಎಲ್ಲಾ ಸ್ಥಿರಾಸ್ತಿಗಳ ಚರಾಸ್ತಿಗಳ ಅಧ್ಯಯನ ವಿಭಾಗವಾರು ವಿವರಗಳು
                        </td>
                    </tr>
                    
                     <tr>
                        <td class="text-center" width="10%" style="font-family:exo;font-size:14px">7</td>
                        <td width="90%"> 
                            ವಿಶ್ವವಿದ್ಯಾಲಯದ ಎಲ್ಲಾ ಬ್ಯಾಂಕ್ ಖಾತೆಗಳ ವಿವರಗಳು, ಬ್ಯಾಂಕ್ ಖಾತೆಗಳ ಆರಂಭ ಮತ್ತು ನಿರ್ವಹಣೆಯ ಉದ್ದೇಶಗಳು ಹಾಗೂ ಬ್ಯಾಂಕ್ ಖಾತೆಗಳಲ್ಲಿ ಲಭ್ಯವಿರುವ ಬಾಂಕ್ ಬ್ಯಾಲೆನ್ಸ್ ಹಾಗೂ ಠೇವಣಿಗಳ ಬಗ್ಗೆ ವಿವರಗಳು
                        </td>
                       
                    </tr>
                    
                    <tr>
                        <td class="text-center" width="10%" style="font-family:exo;font-size:14px">8</td>
                        <td width="90%"> 
                            ವಿಶ್ವವಿದ್ಯಾಲಯಕ್ಕೆ ಪ್ರಸ್ತುತ ಆರ್ಥಿಕ ವರ್ಷದಲ್ಲಿ ವಿವಿಧ ಸರ್ಕಾರದ ಇಲಾಖೆಗಳಿಂದ/ಪ್ರಾಧಿಕಾರಗಳಿಂದ/ನಿಗಮಗಳಿಂದ/ ಮಂಡಳಿಗಳಿಂದ/ ಸಂಸ್ಥೆಗಳಿಂದ ಮಂಜೂರಾಗಿರುವ ಅನುದಾನ, ಮಂಜೂರಾತಿ ಆದೇಶಗಳು, ಅನುದಾನವನ್ನು ಜಮಾ ಮಾಡಿರುವ ಬ್ಯಾಂಕ್ ಖಾತೆಯ ವಿವರಗಳು, ಅನುದಾನದ ಉಪಯೋಗಕ್ಕಾಗಿ/ಬಳಕೆಗಾಗಿ ತೆಗೆದುಕೊಂಡ ಕ್ರಮ, ಕ್ರಿಯಾ ಯೋಜನೆಯ ವಿವರ, ಸಾಧಿಸಿರುವ ಮಾಹೆವಾರು ಭೌತಿಕ ಹಾಗೂ ಆರ್ಥಿಕ ಪ್ರಗತಿಯ ವಿವರಗಳು
                        </td>
                    </tr>
                      <tr>
                        <td class="text-center" width="10%" style="font-family:exo;font-size:14px">9</td>
                        <td width="90%"> 
                            ವಿಶ್ವವಿದ್ಯಾಲಯಕ್ಕೆ ಪ್ರಸ್ತುತ ಆರ್ಥಿಕ ವರ್ಷದಲ್ಲಿ ಸರ್ಕಾರೇತರ ಮೂಲಗಳಿಂದ ಮಂಜೂರಾಗಿರುವ ಸಂದಾಯವಾಗಿರುವ ಸಂಪನ್ಮೂಲಗಳ ವಿವರಗಳು (Including all forms of own source Revenue ) ಅದರ ಜಮಾ, ಖರ್ಚು ಹಾಗೂ ಠೇವಣಿಸಿದ ಬ್ಯಾಂಕ್  ಖಾತೆಯ ವಿವರಗಳು
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" width="10%" style="font-family:exo;font-size:14px">10</td>
                        <td width="90%"> 
                            ವಿಶ್ವವಿದ್ಯಾಲಯದ  Pension Fund ಬಗ್ಗೆ ಸಂಪೂರ್ಣ ವಿವರ, ಮಾಹೆವಾರು ಜಮಾ ಮತ್ತು ವಿಲೇವಾರಿ ವಿವರಗಳುವರಗಳು 
                        </td>
                       
                    </tr>
                    <tr>
                        <td class="text-center" width="10%"style="font-family:exo;font-size:14px">11</td>
                        <td width="90%"> 
                              ವಿಶ್ವವಿದ್ಯಾಲಯಲದಲ್ಲಿ ಪ್ರತಿ ತಿಂಗಳು HRMS ಹಾಗೂ non-HRMS pyments ವಿವರಗಳುಿವರಗಳು 
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" width="10%"style="font-family:exo;font-size:14px">12</td>
                        <td width="90%"> 
                               ವಿಶ್ವವಿದ್ಯಾಲಯಲದಲ್ಲಿ ಇರುವ ವಿವಿಧ Corpus Fund  ವಿವರಗಳುಗಳು 
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" width="10%"style="font-family:exo;font-size:14px">13</td>
                        <td width="90%"> 
                              ವಿಶ್ವವಿದ್ಯಾಲಯಲದಲ್ಲಿ ಮಾಹೆವಾರು ಮಾಸಿಕ ಆದಾಯ ಹಾಗೂ ವೆಚ್ಚದ ಸಂಪೂರ್ಣ ವಿವರಗಳು 
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" width="10%"style="font-family:exo;font-size:14px">14</td>
                        <td width="90%"> 
                            <a href="https://kud.ac.in/admin_panel/noti/14.Store%20&%20Purchase%20.pdf"style="font-family:exo;font-size:14px;color:#DF362D" target="_blank">
                                2022-23ನೇ ಸಾಲಿನಲ್ಲಿ ಪ್ರಕಟಿಸಲಾಗಿರುವ ಟೆಂಡರ್‍ಗಳು Technical ಮತ್ತು Financial bid  ನಡವಳಿಗಳು. ಖರೀದಿಗಳ ಆದೇಶಗಳು, ಕೈಗೊಳ್ಳಲಾದ ಸಂಗ್ರಹಣೆಗಳ ಸಂಪೂರ್ಣ ವಿವರ ಹಾಗೂ ಅನ್ವಯಿಸುವ ಸಂಗ್ರಹಣೆಗಳಿಗೆ ಸಂಬಂಧಪಟ್ಟ  Stock book register extract
                            
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" width="10%"style="font-family:exo;font-size:14px">15</td>
                        <td width="90%"> 
                           ವಿಶ್ವವಿದ್ಯಾಲಯವು ಪ್ರಸ್ತುತ ತೆಗೆದುಕೊಂಡಿರುವ ಎಲ್ಲ ಮೂಲಭೂತ ಅಭಿವೃದ್ಧಿ ಕಾಮಗಾರಿಗಳ ವಿವರಗಳು (tender details, approved estimate, work order agreement with the agency ) ಹಾಗೂ ಪ್ರತಿ ತಿಂಗಳು ಸಾಧಿಸುವ ಆರ್ಥಿಕ ಮತ್ತು ಭೌತಿಕ ಪ್ರಗತಿಯ ವಿವರಗಳು
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" width="10%"style="font-family:exo;font-size:14px">16</td>
                        <td width="90%"> 
                            ಸ್ಥಾಪನೆ ವರ್ಷ ಹಾಗೂ ಮೂಲ ಉದ್ದೇಶಗಳ ಮಾಹಿತಿಯೊಂದಿಗೆ ವಿಶ್ವವಿದ್ಯಾಲಯ ಅಧ್ಯಯನ ವಿಭಾಗ, ಅಧ್ಯಯನ ಕೇಂದ್ರ, ಅಧ್ಯಯನ ಪೀಠಗಳ ವಿವರಗಲು ಅಧ್ಯಯನ ವಿಭಾಗಗಳಲ್ಲಿ ನಡೆಸಲಾಗುತ್ತಿರುವ ಶೈಕ್ಷಣಿಕ ಕಾರ್ಯಕ್ರಮಗಳು ಕೋರ್ಸುಗಳು, Details of accreditation etc.,  ಬೋಧಕ ಸಿಬ್ಬಂದಿಯ curriculum vitae ಹಾಗೂ ಅವರ ಆಸಕ್ತಿಗಳು, ಅವರಿಂದ ಕೈಗೆಳ್ಳಲಾದ ಸಂಶೋಧನೆ, ಅವರ ಪ್ರಕಟಣೆಗಳು, ಸಾಧನೆಗಳು ಮತ್ತು ಅವರ ಸಂಪರ್ಕದ ವಿವರಗಳು; ಇದೇ ರೀತಿಯ  ಮಾಹಿತಿಯನ್ನು ವಿಶ್ವವಿದ್ಯಾಲಯದ ಎಲ್ಲಾ ಸಂಯೋಜಿತ ಕಾಲೇಜುಗಳು ಮತ್ತು ಘಟಕ ಕಾಲೇಜುಗಳು. ಈ ವರ್ಷವು ಸೇರಿದಂತೆಕಳೆದ ಐದು ವರ್ಷಗಳ ಶೈಕ್ಷಣಿಕ ಕಾರ್ಯಕ್ರಮಗಳ ಸೆಮಿಸ್ಟರ್‍ವಾರು ಫಲಿತಾಂಶಗಳ ವಿವರಗಳು
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" width="10%"style="font-family:exo;font-size:14px">17</td>
                        <td width="90%"> 
                            ಕರ್ತವ್ಯ ಹಾಗೂ ಹೊಣೆಗಾರಿಕೆಯ ವಿವರಗಳೊಂದಿಗೆ ಬೋಧಕೇತರ ಸಿಬ್ಬಂದಿಯ ಮಾಹಿತಿ
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" width="10%"style="font-family:exo;font-size:14px">18</td>
                        <td width="90%"> 
                            ವಿಶ್ವವಿದ್ಯಾಲಯದಲ್ಲಿ ನಡೆಯುತ್ತಿರುವ ವಿವಿಧ  Programmes  ಮತು Courses ಗಳ ಶೀರ್ಷಿಕೆ ಮಾನ್ಯತೆಯ ವಿವರಗಳು, ವಿವರವಾದ ಶುಲ್ಕ ವಿನ್ಯಾಸ, ಕೋರ್ಸ್‍ಗಳ ಪಠ್ಯಕ್ರಮ (syllabus and Curriculum ) 2022-23ನೇ ಸಾಲಿನ ಅನುಮೋದಿತ ವಿದ್ಯಾರ್ಥಿ ಪ್ರಮಾಣ  ಮತ್ತು ಪ್ರವೇಶ ಪಡೆದ ವಿದ್ಯಾರ್ಥಿ ಪ್ರಮಾಣ  ವಿಶ್ವವಿದ್ಯಾಲಯಗಳು ನಡೆಸುವ ಎಲ್ಲಾ ಪದವಿ ಮತ್ತು ಸ್ನಾತಕೋತ್ತರ  ಕಾರ್ಯಕ್ರಮಗಳು, ಇದೇ ರೀತಿಯ ಮಾಹಿತಿಯನ್ನು ಅದರ ಎಲ್ಲಾ ಸಂಯೋಜಿತ ಕಾಲೇಜುಗಳು ಮತ್ತು ಘಟಕ ಕಾಲೇಜುಗಳು. ಈ ವರ್ಷವು ಸೇರಿದಂತೆ ಕಳೆದ ಐದು ವರ್ಷಗಳ ಶೈಕ್ಷಣಿಕ ಕಾರ್ಯಕ್ರಮಗಳ ಸೆಮಿಸ್ಟ್‍ರ್‍ವಾರು ಫಲಿತಾಂಶಗಳ ವಿವರಗಳು
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" width="10%"style="font-family:exo;font-size:14px">19</td>
                        <td width="90%"> 
                            <a href="https://kud.ac.in/admin_panel/noti/19.CDC.pdf" style="color:#DF362D" target="_blank"> 
                                ವಿಶ್ವವಿದ್ಯಾಲಯದ ಸಂಯೋಜಿತ ಕಾಲೇಜುಗಳ ವಿವರ, ಅವರ ಅನುಮೋದಿತ  courses and course intake, details of accreditation ect.
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" width="10%"style="font-family:exo;font-size:14px" style="color:#DF362D" target="_blank">20</td>
                        <td width="90%"> 
                            <a href="https://www.kud.ac.in/academic.php"> 
                                 ಸೆಮಿಸ್ಟ್‍ರ್‍ವಾರು ತರಗತಿಗಳ ವೇಳಾಪಟ್ಟಿ ಹಾಗೂ ಸ್ನಾತಕ ಮತ್ತು ಸ್ನಾತಕೋತ್ತರ ಕಾರ್ಯಕ್ರಮಗಳ ಕಾರ್ಯಹಂಚಿಕೆ ವಿವರಗಳು ಹಾಗೂ ಶೈಕ್ಷಣಿಕ ಕಾರ್ಯಕ್ರಮಗಳ ದಿನಾಂಕವಾರು ಅನುಸೂಚನೆ/ವೇಳಾಪಟ್ಟಿ
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" width="10%"style="font-family:exo;font-size:14px">21</td>
                        <td width="90%"> 
                            <a href="https://www.kud.ac.in/examination.php" style="color:#DF362D" target="_blank">
                                 ಸೆಮಿಸ್ಟ್‍ರ್‍ವಾರು ಪರೀಕ್ಷಾ ವೇಳಾಪಟ್ಟಿ, ಪರೀಕ್ಷಾ ಶುಲ್ಕದ ವಿವರಗಳು ಹಾಗೂ ಪರೀಕ್ಷಾ ಪ್ರಕ್ರಿಯೆಯ ಹಂತಗಳ ಹಾಗೂ ಒಟ್ಟಾರೆ ಅವಧಿಯ ಮಾಹಿತಿ ಮತ್ತು  ಫಲಿತಾಂಶದ ವಿವರಗಳು
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" width="10%"style="font-family:exo;font-size:14px">22</td>
                        <td width="90%"> 
                             ವಿಶ್ವವಿದ್ಯಾಲಯವು ವಿಧಿಸುತ್ತಿರು ಎಲ್ಲಾ  Fines and Penalties ಗೆ ಸಂಬಂಧಿಸಿದಂತೆ ವಿವಿಧ ಆದೇಶಗಳು ಹಾಗೂ ಮಾಹೆವಾರು ಇಂತಹ Fines and Penalties ಇಂದ ಸಂಗ್ರಹಿಸಲಾಗುತ್ತಿರುವ ಮೊತ್ತ
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" width="10%"style="font-family:exo;font-size:14px">23</td>
                        <td width="90%"> 
                              ಸಂಶೋಧನಾ ಕೇಂದ್ರಗಳು ಸೇರಿದಂತೆ ಅಧ್ಯಯನ ಪೀಠಗಳು, ಯೋಜನೆಗಳು, ಪ್ರಕಟಣೆಗಳು, ವರ್ಷವಾರು ಪಡೆದ ಅನುದಾನಗಳು, ಜರ್ನಲ್‍ಗಳು ಮತ್ತು ಉದ್ಯಮ ಪ್ರಾಯೋಜಿತ ಸಂಶೋಧನೆಯ  ವಿವರಗಳು
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" width="10%"style="font-family:exo;font-size:14px">24</td>
                        <td width="90%"> 
                            <a href="https://www.kudlibrary.ac.in" style="color:#DF362D" target="_blank">
                                 ಗ್ರಂಥಸೂಚಿ (catalogue), ಡೇಟಾಬೇಸ್ (ದತ್ತ ಸಂಚಯ) ನೊಂದಿಗೆ ಚಂದಾದಾರರಾಗಿರುವ ಎಲ್ಲಾ ಜರ್ನಲ್‍ಗಳ ಹೆಸರುಗಳು, ಡಿಜಿಟಲ್ ಸಂಪುಟಗಳನ್ನು ಒಳಗೊಂಡಂತೆ ಎಲ್ಲಾ ಸಂಪುಟಗಳು, ವಿಶ್ವವಿದ್ಯಾಲಯದ ಜರ್ನಲ್‍ಗಳನ್ನು ವಿಶ್ವವಿದ್ಯಾಲಯದ ಪ್ರಕಟಣೆಗಳು, ವಿಶ್ವವಿದ್ಯಾಲಯದ ಬೋಧಕರ ಪ್ರಕಟಣೆಗಳು, ವಿಶ್ವವಿದ್ಯಾಲಯದ ಪ್ರಶ್ನೆ ಪತ್ರಿಕೆಗಳು ಮತ್ತು ಪತ್ರಾಗಾರಗಳು, ಗ್ರಂಥಾಯದ ಸಮಯ, ಅಲ್ಲಿನ ಸೇವೆಗಳು, ಗ್ರಂಥಾಲಯದಲ್ಲಿ ಲಭ್ಯವಿರುವ ಪೋಟೋಕಾಫಿ ಮುದ್ರಣ ಸ್ಕ್ಯಾನ್, ವಿತರಣೆ, ತಾಂತ್ರಿಕ ಸಹಾಯ, ರೆಫರಲ್ ಸೇವೆ/ಸಂಶೋಧನಾ ಸಹಾಯದಂತಹ ವಿವರಗಳು
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" width="10%"style="font-family:exo;font-size:14px">25</td>
                        <td width="90%"> 
                             ವಾರ್ಷಿಕ ರಜಾ ದಿನಗಳ ಸೂಚಿಪಟ್ಟಿ
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" width="10%"style="font-family:exo;font-size:14px">26</td>
                        <td width="90%"> 
                            <a href="https://www.kud.ac.in/notifications.php" style="color:#DF362D" target="_blank">
                                 ವಿಶ್ವವಿದ್ಯಾಲಯಗಳ ವಿವಿಧ ಶಾಖೆಗಳಿಂದ ಹೊರಡಿಸಲಾಗುವ ಎಲ್ಲಾ ಶೈಕ್ಷಣಿಕ ಮತ್ತು ಆಡಳಿತಾತ್ಮಕ ಮತ್ತು ಇತರೆ ಸುತ್ತೋಲೆಗಳನ್ನು ಆ ದಿನವೇ ಜಾಲತಾಣದಲ್ಲಿ ಅಳವಡಿಸುವುದು
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" width="10%"style="font-family:exo;font-size:14px">27</td>
                        <td width="90%"> 
                            ಪ್ಲೇಸ್‍ಮೆಂಟ್ ಕೋಶಗಳ ವಿವರಗಳು ಮತ್ತು ಕಳೆದ ಮೂರು ವರ್ಷಗಳಲ್ಲಿ ನೀಡಲಾದ ಉದ್ಯೋಗದ ವಿವರಗಳು
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" width="10%"style="font-family:exo;font-size:14px">28</td>
                        <td width="90%"> 
                             ಹಳೆಯ ವಿದ್ಯಾರ್ಥಿಗಳ ಸಂಪರ್ಕ ಮತ್ತು ವಿಶ್ವವಿದ್ಯಾಲಯದಿಂದ ಪ್ರಾರಂಭಿಸಿ ಹಳೆಯ ವಿದ್ಯಾರ್ಥಿಗಳ ಸಂಘದ ವಿವರಗಳು ಮತ್ತು ಅದರ ಸದಸ್ಯತ್ವದ ವಿವರಗಳು
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" width="10%"style="font-family:exo;font-size:14px">29</td>
                        <td width="90%"> 
                            ಯೋಜನೆಗಳು, ಇಂಟರ್ನ್‍ಶಿಪ್‍ಗಳು ಮತ್ತು ವಿದ್ಯಾರ್ಥಿ ಮಾರ್ಗದರ್ಶನ ಕಾರ್ಯಕ್ರಮ, ಇಂಟರ್‍ಶಿಪ್/ಅಪ್ರಂಟಿಸ್‍ಶಿಪ್ ಎಂಬೆಡೆಡ್ ಪದವಿ ಕಾರ್ಯಕ್ರಮಗಳ ವಿವರಗಳು
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" width="10%"style="font-family:exo;font-size:14px">30</td>
                        <td width="90%"> 
                            <a href="https://www.kud.ac.in/research-pol.php" style="color:#DF362D" target="_blank">
                                ಪಿಎಚ್‍ಡಿ ಪ್ರವೇಶಗಳು, ವಿದ್ಯಾರ್ಥಿ ಪ್ರಮಾಣ ಸಂಖ್ಯೆ ಹಾಗೂ ಪ್ರಸ್ತುತ ಪಿಎಚ್‍ಡಿ  ವಿದ್ವಾಂಸರ ವಿವರಗಳ ಜೊತೆಗೆ ಸಂಶೋಧನಾ ವಿವರಗಳು ಮತ್ತು ನಿಯೋಜಿಸಲಾದ  ಕೆಲಸ, ವಿಶ್ವವಿದ್ಯಾಲಯದಿಂದ ವಿಷಯವಾರು ಗುರುತಿಸಲಾಗಿರುವ  Research Centres ಸಂಪೂರ್ಣ ವಿವರಗಳು Research Guides ವಿವರ ಹಾಗೂ ಅವರಿಗೆ  ನಿಯೋಜಿಸಲಾಗಿರುವ ಸಂಶೋಧಕರ ವಿವರ 
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" width="10%"style="font-family:exo;font-size:14px">31</td>
                        <td width="90%"> 
                            <a href="https://www.pavatefoundation.org/home/main" style="color:#DF362D" target="_blank"> 
                                ವಿಶ್ವವಿದ್ಯಾಲಯದಲ್ಲಿ ಅಂತರಾಷ್ಟ್ರೀಯ ಕೋಶದ ವಿವರಗಳು
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" width="10%"style="font-family:exo;font-size:14px">32</td>
                        <td width="90%"> 
                              ವಿಶ್ವವಿದ್ಯಾಲಯದಲ್ಲಿ ಆವಿಷ್ಕಾರ ಕೇಂದ್ರದ ವಿವರಗಳು
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" width="10%"style="font-family:exo;font-size:14px">33</td>
                        <td width="90%"> 
                            <a href="https://kud.ac.in/admin_panel/noti/33.SCST%20Cell%20.pdf" style="color:#DF362D" target="_blank">
                                ವಿಶ್ವವಿದ್ಯಾಲಯದಿಂದ ಜಾರಿಗೊಳಿಸಲಾದ ಕಲ್ಯಾಣ ಕಾರ್ಯಕ್ರಮಗಳು, ವಿದ್ಯಾರ್ಥಿ ವೇತನಗಳು, ಉಚಿತ ಶಿಕ್ಷಣ, ಹಾಸ್ಟೆಲ್ ಸೌಲಭ್ಯಗಳು ಇತ್ಯಾದಿಗಳ ವಿವರಗಳು ಹಾಗೂ ನಿಗಧಿಪಡಿಸಿರುವ ಅನುದಾನ ಆರ್ಥಿಕ ಮತ್ತು ಭೌತಿಕ ವಿವರಗಳು
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" width="10%"style="font-family:exo;font-size:14px">34</td>
                        <td width="90%"> 
                             ವಿಶ್ವವಿದ್ಯಾಲಯದಲ್ಲಿ ವಿದ್ಯಾರ್ಥಿ ಕುಂದುಕೊರತೆ ಕೋಶದ ವಿವರಗಳು ಹಾಗೂ ದಾಖಲಾಗುವ ವಿವಿಧ ಕುಂದುಕೊರತೆಗಳ ವಿಲೇವಾರಿಯ ವಿವರಗಳು.
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" width="10%"style="font-family:exo;font-size:14px">35</td>
                        <td width="90%"> 
                            ವಿಶ್ವವಿದ್ಯಾಲಯದಲ್ಲಿ ಆನ್‍ಲೈನ್ ಮತ್ತು ಡಿಜಿಟಲ್ ಕಾರ್ಯಕ್ರಮಗಳ ಸಂಪೂರ್ಣ ವಿವರಗಳು. 
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" width="10%"style="font-family:exo;font-size:14px">36</td>
                        <td width="90%"> 
                            ವಿಶ್ವವಿದ್ಯಾಲಯದಲ್ಲಿ ಲಭ್ಯವಿರುವ ದೂರ ಶಿಕ್ಷಣ ಕೋರ್ಸ್‍ಗಳ ವಿವರಗಳು
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" width="10%"style="font-family:exo;font-size:14px">37</td>
                        <td width="90%"> 
                            <a href="https://www.kud.ac.in/notifications-circular.php?nid=531" style="color:#DF362D" target="_blank">
                                 ವಿಶ್ವವಿದ್ಯಾಲಯವು ಸಹಿ ಮಾಡಿರುವ ಎಲ್ಲಾ ಒಡಂಬಡಿಕೆ (Mou) ಗಳ ವಿವರಗಳು 
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" width="10%"style="font-family:exo;font-size:14px">38</td>
                        <td width="90%"> 
                            ವಿಶ್ವವಿದ್ಯಾಲಯದಲ್ಲಿ ನಡೆಯುವ ಎಲ್ಲಾ ಪದ್ನೋತಿ ಹಾಗೂ CAS ನಡವಳಿಗಳು
                        </td>
                    </tr>
               </table>-->
            </div>
      </div>
    </div>
    



    
  </div>
</div>
<div class="clearfix"></div>






	
	
<?php include'footer.php'; ?>