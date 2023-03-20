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

<!--<div class="page_head">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1 class="d-block">Karnatak University Dharwad</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Administration</li>
            <li class="breadcrumb-item active" aria-current="page">Chairperson of Departments</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>-->



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
				<a href="syndicate-proceedings.php">Syndicate Proceedings</a>
				<a href="the-academic-council.php">The Academic Council</a>
				<a href="the-finance-committee.php">The Finance Committee</a>
				<a href="deans-of-faculty.php">Deans of Faculties</a>
				<a href="chairperson-Of-departments.php" class="active">Chairpersons of Departments</a>
				<a href="telephone-directory.php">Contact Details</a>
                
            </div>
        
      </div><br>
<br>

      <div class="col-sm-6 col-md-9">



<section class="sectione2">
  <div class="container">
  
    <!-- Tab panes -->
    <div class="tab-content">
      <div id="home" class="container tab-pane active">
      
        <h3 style="font-family:Trirong;color:#000; font-weight:600;text-align:center;">Chairpersons of Departments</h3>

               <!--<h3 style="font-family:Alice;font-size:22px">Department Chairman List Present list as on 04.01.2021</h3><br>-->

                <div class="row">

                      <table width="100%" id="customers">
        <tbody>
           <!-- <tr>
                <th style="text-align: left">&nbsp;
                    
                </th>
                <th style="text-align: center;">
                    Department
                </th>
                <th style="text-align: center;">
                    Name and Designation
                </th>
            </tr>-->
            <tr style="background-color:#BB6464; color:#FFFFFF;font-family:'Andada Pro';font-size:17px">
                <td style="text-align: left" colspan='3'><strong>
                    &nbsp;&nbsp;I. &nbsp;&nbsp; Faculty of Arts</strong>
                </td>
            </tr>
            <tr>
                <td width="10%" style="text-align: center;">
                    1
                </td>
                <td width="35%">
                    English
                </td>
                <td width="55%">
                  Dr Ashok Hulibandi <br>

Professor

                </td>
            </tr>
            <tr>
                <td width="10%" style="text-align: center;">
                    2
                </td>
                <td width="35%">
                    Folk-lore 
                </td>
                <td width="55%">
                  Dr. V.L. Patil   <br>

Professor

            </tr>
            <tr>
                <td style="text-align: center;">
                    3
                </td>
                <td>
                    Foreign Languages 
                </td>
                <td>
                   The Dean of Faculty of Arts                  
(Ex-officio)

                   </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    4
                </td>
                <td>
                    Hindi
                </td>
                <td>
                    Dr. S. K. Pawar
                     <br />
                    Professor
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    5
                </td>
                <td>
                    Kannada
                </td>
                <td>
                    Dr. N.Y. Mattihal 
                    <br />
                    Professor
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    6
                </td>
                <td>
                    Marathi
                </td>
                <td>
                   Dean Faculty of Arts <br />(Ex-officio)
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    7
                </td>
                <td>
                    Music, Dance and Painting 
                </td>
                <td>
                    Dr. M.H. Agadi<br />
                    Professor 
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    8
                </td>
                <td>
                   Sanskrit 
                </td>
                <td>
                    The Dean of Faculty of Arts 
                    <br />
                    (Ex-officio) 
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    9
                </td>
                <td>
                    Urdu, Persian and Arabic
                </td>
                <td>
                    Dean Faculty of Arts <br />(Ex-officio)
                </td>
            </tr>
            <tr />
            <tr style="background-color:#BB6464; color:#FFFFFF;font-family:'Andada Pro';font-size:17px">
                <td style="text-align: left" colspan='3'><strong>
                    &nbsp;&nbsp;II.&nbsp;&nbsp; Faculty of Science and Technology</strong>
                </td>
            </tr>
            <tr>
                <td width="10%" style="text-align: center;">
                    1.
                </td>
                <td width="35%">
                    Bio-Chemistry
                </td>
                <td>
                    Dr. C.M.Kamanavalli <br />
                    Professor 
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    2.
                </td>
                <td width="35%">
                   Botany
                </td>
                <td>
                    Dr. M. Jayaraj  <br />
                    Professor
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    3.
                </td>
                <td width="35%">
                    Chemistry
                </td>
                <td>
                    Dr. J. Seetharamappa
                    <br />
                    Professor
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    4.
                </td>
                <td>
                   Computer Science 
                </td>
                <td>
                    Dr. (Smt). Sridevi
                    <br />
                    Professor
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    5.
                </td>
                <td width="35%">
                   Geography 
                </td>
                <td>
                   Dr. A. A. Mulimani 
                    <br />
                    Professor
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    6.
                </td>
                <td>
                    Geology
                </td>
                <td>
                    Dr. A. Shrinivas
                    <br />
                     Professor
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    7.
                </td>
                <td width="35%">
                   Marine Biology
                </td>
                <td>
                    Dr. J. L. Rathod  <br>
                    Professor
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    8.
                </td>
                <td width="35%">
                    Mathematics
                </td>
                <td>
                    Dr. Prakashagouda G. Patil    
                    <br />
                    Professor
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    9.
                </td>
                <td>
                    Micro- Biology 
                </td>
                <td>
                   Dr. A. B. Vedamurthy 
                    <br />
                     Professor
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    10.
                </td>
                <td>
                    Physics
                </td>
                <td>
                   Dr.R.F.Bhajantri <br />
                    Professor
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    11.
                </td>
                <td>
                    Statistics 
                </td>
                <td>
                    Dr. (Smt). Sharada Bhat <br>
                    Professor

                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    12.
                </td>
                <td>
                   Zoology
                </td>
                <td>
                Dr. Pulikeshi M Biradar<br>
                Professor

                </td>
            </tr>
            <tr />
            <tr style="background-color:#BB6464; color:#FFFFFF;font-family:'Andada Pro';font-size:17px">
                <td style="text-align: left" colspan='3'><strong>
                    &nbsp;&nbsp;III.&nbsp;&nbsp;  Faculty of Social Sciences</strong>
                </td>
            </tr>
            <tr>
                <td width="10%" style="text-align: center;">
                    1.
                </td>
                <td width="35%">
                    A.I. History and Epigraphy 
                </td>
                <td>
                  Dr. Lokesh  
                    <br />
                    Professor
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    2.
                </td>
                <td width="35%">
                   Anthropology 
                </td>
                <td>
                    Dr. T. T. Basavanagouda<br />
                    Professor
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    3.
                </td>
                <td width="35%">
                    Criminology & Forensic Science 
                </td>
                <td>
                    Dr. G. S. Venumadhav <br>
                    Associate Professor 
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    4.
                </td>
                <td>
                    Economics
                </td>
                <td>
                   Dr. S. B. Nari 
                    <br />
                    Associate Professor
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    5.
                </td>
                <td width="35%">
                    Gandhian Studies
                </td>
                <td>
                   Dean Faculty of Social Sciences    <br />
                    K.U. Dharwad (Ex-officio)
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    6.
                </td>
                <td>
                    History & Archaeology 
                </td>
                <td>
                   Dr. S. Y. Mugali<br />
                    Professor  
                    
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    7.
                </td>
                <td width="35%">
                    Journalism and Mass Communication 
                </td>
                <td>
                    Dr. J. M. Chandunavar<br />
                    Professor  
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    8.
                </td>
                <td width="35%">
                    Library and Information Science 
                </td>
                <td>
                Dr. R. R. Naik<br />
                Professor
                    </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    9.
                </td>
                <td>
                   Philosophy
                </td>
                <td>
                    Dr. K. V. Juktimath
                    <br />
                      Professor
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    10.
                </td>
                <td>
                    Political Science 
                </td>
                <td>
                    Dr. B. M. Ratnakar <br />
                  Professor
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    11.
                </td>
                <td>
                    Psychology 
                </td>
                <td>
                    Dr(Smt). V. A. Amminabhavi<br> Professor 
                </td>
            </tr>
            <tr>    
                <td style="text-align: center;">
                    12.
                </td>
                <td>
                    Social Work
                </td>
                <td>
                    Dr. (Smt) S. R. Mane<br />
                   Professor 
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    13.
                </td>
                <td>
                    Sociology 
                </td>
                <td>
                    Dr. Shoukat Azeem  <br/>
                    Professor
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    14.
                </td>
                <td>
                    Yoga Studies
                </td>
                <td>
                    Dean Faculty of Social Sciences
                    <br />
                    K.U. Dharwad (Ex-officio)
                </td>
            </tr> 
            <tr style="background-color:#BB6464; color:#FFFFFF;font-family:'Andada Pro';font-size:17px">
                <td style="text-align: left" colspan='3'><strong>
                    &nbsp;&nbsp;IV.&nbsp;&nbsp; Faculty of Commerce</strong>
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    1.
                </td>
                <td>
                    Commerce
                </td>
                <td>
                    Dr(Smt). Chandramma Manchaiah<br />
                     Professor 
                </td>
            </tr> 
            <tr style="background-color:#BB6464; color:#FFFFFF;font-family:'Andada Pro';font-size:17px">
                <td style="text-align: left" colspan='3'><strong>
                    &nbsp;&nbsp;V.&nbsp;&nbsp; Faculty of Education</strong>
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    1.
                </td>
                <td>
                    Education
                </td>
                <td>
                   Dr. R. R. Madankar<br />
                    Professor
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    2.
                </td>
                <td>
                    Physical Education
                </td>
                <td>
                    The Dean, Faculty of Education, KUD
                    <br />
                    (Ex-officio)
                </td>
            </tr>
            <tr style="background-color:#BB6464; color:#FFFFFF;font-family:'Andada Pro';font-size:17px">
                <td style="text-align: left" colspan='3'><strong>
                   &nbsp;&nbsp; VI.&nbsp;&nbsp; Faculty of Law</strong>
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    1.
                </td>
                <td>
                    Law
                </td>
                <td>
                   Dr. I. Sharath Babu<br />
                   Professor<br/>
                    K. U. Dharwad.

                </td>
            </tr>
            <tr style="background-color:#BB6464; color:#FFFFFF;font-family:'Andada Pro';font-size:17px">
                <td style="text-align: left" colspan='3'><strong>
                    &nbsp;&nbsp;VII.&nbsp;&nbsp; Faculty of Management</strong>
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    1.
                </td>
                <td>
                    Business Management
                </td>
                <td>
                   Dr. A.M. Kadakol<br>Professor
                </td>
            </tr>
        </tbody>
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
