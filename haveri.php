<?php
error_reporting(0);
include 'db_con.php';



?>


<?php include 'header.php'; ?>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong|Akaya+Telivigala|Alice|Average|Andada Pro|Enriqueta">
<link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Fredoka+One&family=Roboto+Slab&family=Signika:wght@500&family=Zen">
<link href="css/mytable.css"/>
<style>
    h5{font-family:Alice;color:#0074B7;font-weight:bold;}
    h5.x{font-family:Alice;color:#000;font-weight:bold;font-size:15px;padding-top:10px;margin-left:40px;}
   
    h4{font-family:Alice;font-size:15px;color:#0074B7;margin-left:0.7em;text-align:center;padding:10px}
    h3{font-family:Alice;font-size:17px;color:#145DA0;margin-left:0.7em;text-align:center;padding:10px}
    table{align:center}
    p{font-family:Average;font-size:17px;color:#000;margin:10px;padding:10px}
    p.y{font-family:Average;font-size:15px;color:#000;padding:0px 30px}
</style>

<div class="inner_page">
  <div class="container">
    <div class="row border_around p-3 text-justify">
        <div class="col-md-3 d-none d-sm-block col-sm-6"  style="background-color:#eee">
	        <h5 style="text-align:center;color:#BB6464;height:50px;padding:20px;font-size:17px;border-bottom:2px solid #BB6464"><b>PG CENTRES</b></h5>
	        <br>
            <br>
            <div class="vertical-menu" style="width:100%;height:auto">
               <!--  <a href="index.php">Home</a> -->
                <a href="karwar.php">Karwar</a>
                <a href="haveri.php" class="active">Haveri</a>
                <a href="gadag.php">Gadag</a>
            </div>
        
      </div><br>
<br>

      <div class="col-sm-6 col-md-9 director_img">
        <h2 class="title_head" style="font-family:Trirong;text-align:center;color:#000;text-transform:capitalize">Karnatak University P. G. Centre, Kerimattihalli, Haveri</h2>
        <hr>
        
        <img src="images/haveri/hv1.jpg" class="img-fluid">
        <h5 class="my-4">HISTORY & DEVELOPMENT</h5>
        <p>
            Karnatak University Post Graduate Centre, Haveri was established in the year 2001 to fulfil the aspirations of rural and urban Students of Haveri district, Karnataka State. The P.G.Centre is located at Kerimattihalli, about 8 KM from Haveri and spread over an area of 42 acres. Six Post-Graduate departments namely Kannada, Social Work, Commerce, English, Sociology, Journalism and Mass communication are offered. Choice Based Credit System (CBCS) Pattern is adopted in all the P G Courses. Academic programmes and examinations are conducted on schedule and in time as per the Karnatak university guidelines. 
        </p>
        <p>
          The P.G. Centre maintains a close liaison with the public and eminent local leaders of Haveri through various meaningful programmes including Induction, Interaction and Extension activities through NSS. True to its vision and mission, the P.G. Centre is committed to reach greater heights of excellence in the years to come.
        </p>
        <h5 class="my-4">VISION</h5>

        <p>To be an educational institution for excellence, to serve the society selflessly and acquire necessary inter-personal skills required to become change-agents for total social transformation through technology enabled and value based education.</p>
	    
        <h5 class="my-4">MISSION</h5>
        <ul style="font-family:Average;font-size:17px;color:#000;margin:10px">
            <li>To meet the Higher Education needs of the region and society in the fields of Social Science, Humanities, Science and Management</li>
            
            <li>To promote Higher Education as an instrument for the empowerment of community and society.</li>

            <li>To build network with university having similar interests and purpose to pool the resources for the welfare of the society.</li>
        </ul>
        
        <!--<img src="images/Haveri.png" class="img-fluid my-4" >-->
        
        <h5 class="my-4">BEST PRACTICE</h5>
            <ul style="font-family:Average;font-size:17px;color:#000;margin:10px">
                <li>Career Guidance and Campus Selection Drive.</li>
                <li>Effective classroom Teaching and Orientation.</li>
                <li>Communication Club and Students Associations per each Department.</li>
                <li>ICT Enhanced Learning Experience.</li>
                <li>Student Centric Learning, Sports and Cultural Activities.</li>
                <li>Workshops, Seminar, Special and Guest lecturers, Food Festivals, Annual Sports Meet, Department and inter-Department Cultural and Sports events.</li>
                <li>Co-Curricular and Extracurricular activities (NSS, Field Work, Social Work Camp, Study Tour, Summer Placement and Block Placement)</li>
                <li>Outreach activities - Woman Welfare, Child Development, Environmental Awareness, Drug Abuse, Prevention, and POCSO Act Awareness.</li>
                <li>Declared as Tobacco/Smoking Free Campus.</li>
            </ul>
        
        <h5 class="my-4">FACILITIES</h5>
            <ul style="font-family:Average;font-size:17px;color:#000;margin:10px">
                <li>Well equipped and ICT Enhanced Classrooms.</li>
                <li>Spacious Library with en number of books.</li>
                <li>Sports and Cricket Ground.</li>
                <li>42 acres of Campus with Greenery Atmosphere. </li>
                <li>Separate Hostels for Boys & Girls.</li>
                <li>1000 Litre Capacity RO-UV Drinking Water Unit.</li>
            </ul>
            
        <h5 class="my-4">FUTURE PLANS</h5>
            <ul style="font-family:Average;font-size:17px;color:#000;margin:10px">
                <li>To start to more Programmes in Science and Social Science.</li>
                <li>To introduce PG diploma in Women’s Studies, Human Resources Management, Banking and Finance.</li>
                <li>To explore the funds for the construction of Guest House, Canteen, and Shopping complex.</li>
                <li>To Establish a Placement Cell and Alumni Association for the students of PG Centre.</li>
                <li>To strengthen the adequate infrastructure facilities for the existing PG Departments and PG Centre.</li>
                <li>To seek the grants for conducting Workshops. Capacity Development Programmes, Faculty Development Programmes and Conferences/Seminars to our faculty members and office staff.</li>
            </ul>
        
        <h5 class="mt-5">ACADEMIC</h5>
        <h5 class="x">PROGRAMME OFFERED</h5>
        <div class="table-responsive">
            <table id="customers" style="width:60%;" align="center">
                <tr style="font-size:12px">
                    <th style="text-align:center;">Sl. No.</th>
                    <th>NAME OF THE DEPARTMENTS</th>	
                    <th>YEAR OF ESTABLISHMENT</th>
                    <th>INTAKE CAPACITY</th>
                </tr>
                <tr>
                    <td style="text-align:center;width:10%">1</td>
                    <td>Kannada</td>
                    <td style="text-align:center;width:10%">2005</td>
                    <td style="text-align:center;width:10%">30</td>
                </tr>
                <tr>
                    <td style="text-align:center;width:10%">2</td>
                    <td>Social Work (M.S.W.)</td>
                    <td style="text-align:center;width:10%">2005</td>
                    <td style="text-align:center;width:10%">35</td>
                </tr>
                <tr>
                    <td style="text-align:center;width:10%">3</td>
                    <td>Commerce</td>
                    <td style="text-align:center;width:10%">2011</td>
                    <td style="text-align:center;width:10%">70</td>
                </tr>
                <tr>
                    <td style="text-align:center;width:10%">4</td>
                    <td>English</td>
                    <td style="text-align:center;width:10%">2011</td>
                    <td style="text-align:center;width:10%">55</td>
                </tr>
                <tr>
                    <td style="text-align:center;width:10%">5</td>
                    <td>Sociology</td>
                    <td style="text-align:center;width:10%">2011</td>
                    <td style="text-align:center;width:10%">55</td>
                </tr>
                <tr>
                    <td style="text-align:center;width:10%">6</td>
                    <td>Journalism and Mass communication </td>
                    <td style="text-align:center;width:10%">2011</td>
                    <td style="text-align:center;width:10%">40</td>
                </tr>
            </table>
        </div>
        <h5 class="x mt-3">ADMISSION PROCESS</h5>
        <p class="y mb-3">As per Karnatak University, Dharwad Admission Norms. For further details visit <a href="https://www.kud.ac.in"> www.kud.ac.in</a></p>
        
        <h5 class="x">COURSE STRUCTURE</h5>
        <p class="y">Choice Based Credit System (CBCS)</p>
        <p class="y mb-3">Two Years (Four Semesters)</p>

        <h5 class="x">FEES STRUCTURE</h5>
        <p class="y mb-3">As per Karnatak University, Dharwad Admission Notification. 
            For further details visit <a href="https://www.kud.ac.in"> www.kud.ac.in</a> </p>

        <h5 class="x">SYLLABUS</h5>
        <p class="y mb-3">For further details visit <a href="https://www.kud.ac.in">www.kud.ac.in </a></p>
        
        <h5 class="mt-5">INFRASTRUCTURE</h5>
        <div class="table-responsive">
            <table id="customers" style="width:60%;" align="center">
                <tr style="font-size:12px">
                    <th style="text-align:center;">Sl. No.</th>
                    <th>DETAILS</th>	
                    <th>Nos.</th>
                </tr>
                <tr>
                    <td style="text-align:center;width:10%">1.</td>
                    <td>Class Rooms</td>
                    <td style="text-align:center;width:30%">12</td>
                </tr>
                <tr>
                    <td style="text-align:center;width:10%">2.</td>
                    <td>Smart Classrooms</td>
                    <td style="text-align:center;width:30%">06</td>
                </tr>
                <tr>
                    <td  style="text-align:center;width:10%">3.</td>
                    <td>Computer Laboratories</td>
                    <td  style="text-align:center;width:30%">02 (M.Com and J& MC)</td>
                </tr>
                <tr>
                    <td  style="text-align:center;width:10%">4.</td>
                    <td>Total Computers</td>
                    <td  style="text-align:center;width:30%">37</td>
                </tr>
                <tr>
                    <td style="text-align:center;width:10%">5.</td>
                    <td>Faculty /Administrator Cabins</td>
                    <td style="text-align:center;width:30%">03</td>
                </tr>
                <tr>
                    <td style="text-align:center;width:10%">6.</td>
                    <td>TA/GF Cabins</td>
                    <td style="text-align:center;width:30%">05</td>
                </tr>
            </table>
        </div>
        
        <h5 class="mt-5">LIBRARY</h5>
        <div class="table-responsive">
            <table id="customers" style="width:60%;" align="center">
                <tr style="font-size:12px">
                    <th style="text-align:center;">Sl. No.</th>
                    <th>DETAILS</th>	
                    <th>Nos.</th>
                </tr>
                <tr>
                    <td style="text-align:center;width:10%">1.</td>
                    <td>Kannada</td>
                    <td style="text-align:center;width:30%">5273</td>
                </tr>
                <tr>
                    <td style="text-align:center;width:10%">2.</td>
                    <td>Social Work (M.S.W.)</td>
                    <td style="text-align:center;width:30%">1047</td>
                </tr>
                <tr>
                    <td  style="text-align:center;width:10%">3.</td>
                    <td>Commerce</td>
                    <td  style="text-align:center;width:30%">1455</td>
                </tr>
                <tr>
                    <td  style="text-align:center;width:10%">4.</td>
                    <td>English</td>
                    <td  style="text-align:center;width:30%">1749</td>
                </tr>
                <tr>
                    <td style="text-align:center;width:10%">5.</td>
                    <td>Sociology</td>
                    <td style="text-align:center;width:30%">858</td>
                </tr>
                <tr>
                    <td style="text-align:center;width:10%">6.</td>
                    <td>Journalism and Mass communication</td>
                    <td style="text-align:center;width:30%">1007</td>
                </tr>
                <tr>
                    <td style="text-align:center;width:10%">7.</td>
                    <td>Reference Books (General Subject)</td>
                    <td style="text-align:center;width:30%">532</td>
                </tr>
                <tr style="font-weight:bold">
                    <td colspan="2">Total Number of Books</td>
                    <td style="text-align:center;width:30%">11921</td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                </tr>
                <tr style="font-weight:bold">
                    <td colspan="2">Number of Journals</td>
                    <td style="text-align:center;width:30%">07</td>
                </tr>
            </table>
        </div>
        <img src="images/haveri/hv2.jpg" class="img-fluid my-4">
        
        <h5 class="mt-5">FACULTY & STAFF</h5>
        <div class="row">
            <div class="col-lg-10 col-md-10 mb-4 mb-lg-0  mx-auto">
                <div class="card mb-2" style="border:1px solid A06AB4">
                    <div class="row">
                        <div class="col-md-3">
                            <img class="card-img-left" src="images/haveri/hv3.jpg" alt="DR. PRASHANTHA H. Y." style="border:0;height:150px">        
                        </div>
                        <div class="col-md-9">
                            <div class="card-body py-3">
                                <h4 style="text-align:left;color:#5558D8;font-weight:bold;font-family:Titillium Web;padding:0">DR. PRASHANTHA H. Y.</h4>
                                 <!--<p style="font-size:10px;padding:0;margin:0;font-weight:bold">M.S.W., M.A (W.S)., B.Ed., NET and SLET (Social Work)., JRF and NET (Women’s Studies)., Ph.D.,</p>-->
                                 <p class="text-left" style="font-size:13px;font-weight:bold;padding:0;margin:0;font-family:Titillium Web">ASSITANT PROFESSOR</p>
                                 <p class="text-left" style="font-size:12px;font-weight:bold;padding:0;margin:0;font-family:Titillium Web">DEPARTMENT OF STUDIES IN SOCIAL WORK</p>
                                 <p class="text-left" style="font-size:12px;font-weight:bold;padding:0;margin:0;font-family:Titillium Web">Karnatak University PG Centre, Haveri.</p>
                                 <p class="text-left" style="font-size:11px;font-weight:bold;padding:0;margin:0;font-family:Titillium Web">Contact No: +91 9743736076 / +91 8073250299</p>
                                <p class="text-left" style="font-size:11px;font-weight:bold;padding:0;margin:0;font-family:Signika">E-mail:<a href="mailto:pramwsphd@gmail.com" style="font-size:11px;"> pramwsphd@gmail.com</a> / <a href="mailto:prashantha.hy@kud.ac.in" style="font-size:11px;">prashantha.hy@kud.ac.in</a></p>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mt-5">
                <h5 class="x text-center">TEACHING FACULTY</h5>
                <table id="customers" style="width:90%;" align="center">
                    <tr>
                        <th>Sl. No.</th>
                        <th>Designation</th>
                        <th>No.</th>
                    </tr>
                    <tr>
                        <td style="text-align:center;width:15%">1.</td>
                        <td>Professor</td>
                        <td style="text-align:center;width:10%">Nil</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;width:10%">2.</td>
                        <td>Associate Professor</td>
                        <td style="text-align:center;width:15%">Nil</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;width:15%">3.</td>
                        <td>Assistant Professor <br>(All Departments)</td>
                        <td style="text-align:center;width:15%">02</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;width:15%">4.</td>
                        <td>Teaching Assistants</td>
                        <td style="text-align:center;width:15%">12</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;width:15%">5.</td>
                        <td>Guest Faculty</td>
                        <td style="text-align:center;width:15%">04</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;width:15%">6.</td>
                        <td>Guest Assistant Librarian</td>
                        <td style="text-align:center;width:15%">01</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6 mt-5">
                <h5 class="x text-center">NON TEACHING FACULTY</h5>
                <table id="customers" style="width:90%;" align="center">
                    <tr>
                        <th>SL. No.</th>
                        <th>DESIGNATION</th>
                        <th>No.</th>
                    </tr>
                    <tr>
                        <td style="text-align:center;width:15%">1.</td>
                        <td>Office Superintendent</td>
                        <td style="text-align:center;width:10%">01</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;width:10%">2.</td>
                        <td>Senior Assistant</td>
                        <td style="text-align:center;width:15%">01</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;width:15%">3.</td>
                        <td>Peon</td>
                        <td style="text-align:center;width:15%">01</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;width:15%">4.</td>
                        <td>Contract Basis ‘C’ Group</td>
                        <td style="text-align:center;width:15%">02</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;width:15%">5.</td>
                        <td>Contract Basis ‘D’ Group</td>
                        <td style="text-align:center;width:15%">07</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;width:15%">6.</td>
                        <td>Sweeper and Scavenger</td>
                        <td style="text-align:center;width:15%">01</td>
                    </tr>
                </table>
            </div>
        </div>
        
        
        <h5 class="mt-5">EXTENSION ACTIVITIES</h5></h5>
        <table id="customers" style="width:70%;" align="center">
            <tr>
                <th>SL. NO.</th>
                <th>ACTIVITIES</th>
                <th>COLLABORATION</th>
            </tr>
            <tr>
                <td style="text-align:center;width:10%">1.</td>
                <td style="width:45%">Blood Donation Camp</td>
                <td style="width:45%">District Hospital, Blood Bank, Haveri</td>
            </tr>
            <tr>
                <td style="text-align:center;width:10%">2.</td>
                <td style="width:45%">NSS Annual Camps</td>
                <td style="width:45%">N.S.S Cell, KU Dharwad</td>
            </tr>
            <tr>
                <td style="text-align:center;width:10%">3.</td>
                <td style="width:45%">Social work Rural Camps</td>
                <td style="width:45%">Zilla Panchayat, Haveri</td>
            </tr>
            <tr>
                <td style="text-align:center;width:10%">4.</td>
                <td style="width:45%">Covid-19 Awareness Programmes</td>
                <td style="width:45%">Health Department, Govt of Karnataka</td>
            </tr>
            <tr>
                <td style="text-align:center;width:10%">5.</td>
                <td style="width:45%">Drug Abuse Prevention Programmes</td>
                <td style="width:45%">De-Addiction Centre, Haveri</td>
            </tr>
            <tr>
                <td style="text-align:center;width:10%">6.</td>
                <td style="width:45%">Traffic Rules Awareness Programme</td>
                <td style="width:45%">Police Department</td>
            </tr>
            <tr>
                <td style="text-align:center;width:10%">7.</td>
                <td style="width:45%">Swachha Bharath Abiyana</td>
                <td style="width:45%">Zilla Panchayat </td>
            </tr>
            <tr>
                <td style="text-align:center;width:10%">8.</td>
                <td style="width:45%">Consumer Protection Act Awareness</td>
                <td style="width:45%">District Consumer Protection Forum, Haveri</td>
            </tr>
            <tr>
                <td style="text-align:center;width:10%">9.</td>
                <td style="width:45%">POCSO Act Awareness</td>
                <td style="width:45%">District Child Protection Unit, Haveri</td>
            </tr>
            <tr>
                <td style="text-align:center;width:10%">10.</td>
                <td style="width:45%">Child Labour and Child Marriage Prevention Programme</td>
                <td style="width:45%">Child Line, Haveri</td>
            </tr>
        </table>
                
        <h5 class="mt-5">JRF / NET / SLET QUALIFIED STUDENTS LIST</h5>
        <table id="customers" class="mb-5" style="width:70%;" align="center">
            <tr>
                <th>Sl. No.</th>
                <th>DEPARTMENT</th>
                <th>NET</th>
                <th>SLET</th>
            </tr>
            <tr>
                <td style="text-align:center;width:10%">1.</td>
                <td>Kannada</td>
                <td style="text-align:center;width:15%">-</td>
                <td style="text-align:center;width:15%">01</td>
            </tr>
            <tr>
                <td style="text-align:center;width:10%">2.</td>
                <td>Social Work (M.S.W.)</td>
                <td style="text-align:center;width:15%">-</td>
                <td style="text-align:center;width:15%">03</td>
            </tr>
            <tr>
                <td style="text-align:center;width:10%">3.</td>
                <td>Commerce</td>
                <td style="text-align:center;width:15%">02</td>
                <td style="text-align:center;width:15%">06</td>
            </tr>
            <tr>
                <td style="text-align:center;width:10%">4.</td>
                <td>English</td>
                <td style="text-align:center;width:15%">01</td>
                <td style="text-align:center;width:15%">06</td>
            </tr>
            <tr>
                <td style="text-align:center;width:10%">5.</td>
                <td>Sociology</td>
                <td style="text-align:center;width:15%">01</td>
                <td style="text-align:center;width:15%">02</td>
            </tr>
            <tr>
                <td style="text-align:center;width:10%">6.</td>
                <td>Journalism and Mass Communication </td>
                <td style="text-align:center;width:15%">-</td>
                <td style="text-align:center;width:15%">-</td>
            </tr>
        </table>
    
        <h2 class="title_head mt-5" style="font-family:Trirong;text-align:center;color:#000;text-transform:capitalize;font-size:17px">
                PROFILE OF THE SC/ST POST GRADUATE HOSTEL FOR MEN <br><span style="font-size:15px">KARNATAK UNIVERSITY P.G CENTRE<br> HAVERI – 581110.</span>
        </h2>
        <h5 class="x mb-3">Established: 18th Nov, 2012</h5>
        <h5 class="x mb-2">SC/ST PG BOY’S HOSTEL</h5>
        
         <table class="table table-bordered table striped" style="width:70%;background-color:#eee;font-family:Signika" align="center">
            <tr>
                <td>
                    Capacity
                </td>
                <td>
                    120 Students
                </td>
            </tr>
            <tr>
                <td>
                    Rooms
                </td>
                <td>
                    30 (Each room can accommodate 04 students)
                </td>
            </tr>
            <tr>
                <td>
                    Area
                </td>
                <td>
                    5 Acres
                </td>
            </tr>
            <tr>
                <td>
                    Estimated
                </td>
                <td>
                    2 Crore
                </td>
            </tr>
        </table>
        <img src="images/haveri/hv4.jpg" class="img-fluid my-4">
        
        <p> Karnatak University P.G Centre, SC/ST PG Hostel for Boys was started in the year 2012. Sixty students from various departments were admitted during the academic year 2012. Well-equipped rooms, drinking water facility, Power facility and Mess facility are provided. The 1st Floor having the capacity of sixty students was constructed in the year 2014. The capacity of the Men’s Hostel is 120. The hostel is meant for SC/ST students. Students of other category can also be accommodated on Special request. 16 Students are accommodated during the year 2021-22. Transportation and Mess facilities are to be improved at least by the next academic year.
        </p>
        <h5 class="x text-center">WARDEN</h5>
        <p  class="y text-center">(WORKING FROM 2014 TO STILL DATE)</p>
        
        <table id="customers" style="width:70%;" align="center">
            <tr>
                <th style="text-align:center;">
                    Sl. No.
                </th>
                <th>
                    Name
                </th>
                <th>
                    Designation
                </th>
            </tr>
            <tr>
                <td style="text-align:center; ">
                    1
                </td>
                <td>
                    Mr. Prashant H. Y.
                </td>
                <td>
                    Assistant Professor
                </td>
            </tr>
        </table>
        <h5 class="x mt-5">OTHER BACKWARD COMMUNITY POST MATRIC PG GIRL’S HOSTEL </h5>    
        <img src="images/haveri/hv5.jpg" class="img-fluid my-4">
        
        
        <h2 class="title_head mt-5" style="font-family:Trirong;text-align:center;color:#000;text-transform:capitalize;font-size:17px">PROFILE OF NSS UNIT<br><span style="font-size:15px">Karnatak University PG Centre, Haveri.</span></h2>

        <p>
            NSS Unit was established in the year 2011-12 with 100 volunteers in the P.G. Centre. In the year 2012, the NSS Unit was organized Leadership Camp. The students from various degree colleges participated in the camp. From 2014 to 2017 Blood Donation camps were organized every year with the coordination of Rashtrotthana Blood Bank Hubli. The unit planted and maintained many plants every year in the campus garden. Special camps were also conducted by the NSS unit every year. From 2011 to 2014 special camps were conducted only in the campus but in the year 2015-16, 2016-17, 2017-18, 2018-19 special camps were conducted in the nearby villages such as Hirelingadalli. Kallapur, Hosalli, and Naganur villages respectively. 
        </p>
        
         <div class="row">
            <div class="col-lg-10 col-md-10 mb-4 mb-lg-0  mx-auto">
                <div class="card mb-2" style="border:1px solid A06AB4">
                    <div class="row">
                        <div class="col-md-3">
                            <img class="card-img-left" src="images/haveri/hv6.jpg" alt="ANITA N HALAMATA" style="border:0;height:150px">        
                        </div>
                        <div class="col-md-9">
                            <div class="card-body py-3">
                                <h4 style="text-align:left;color:#5558D8;font-weight:bold;font-family:Titillium Web;padding:0">Smt. ANITA N. HALAMATA </h4>
                                 <!--<p style="font-size:10px;padding:0;margin:0;font-weight:bold">M.S.W., M.A (W.S)., B.Ed., NET and SLET (Social Work)., JRF and NET (Women’s Studies)., Ph.D.,</p>-->
                                 <p class="text-left" style="font-size:13px;font-weight:bold;padding:0;margin:0;font-family:Titillium Web">ASSISTANT PROFESSOR</p>
                                 <p class="text-left" style="font-size:12px;font-weight:bold;padding:0;margin:0;font-family:Titillium Web">DEPARTMENT OF STUDIES IN COMMERCE</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h5 class="mt-5">CONTACT US</h5>
        <p class="bodytext" style="font-family:Signika;font-size:16px;color:#000;margin:10px;">
            The Administrator</strong><br>
            Karnatak University Post-Graduate Centre,<br>
            Kerimattihalli, Haveri-581110.<br>
            Ph No: 08375-236744<br>
            Mail Id:<a href="mailto:pgchaveri@kud.ac.in"> pgchaveri@kud.ac.in</a><br>
            Web Site:<a href="https://www.kud.ac.in">www.kud.ac.in </a><br>
            Face book Page: @KUPGCHAVERI 
        </p>
    
      </div>
    </div>
  </div>
</div>
<div class="clearfix"></div>






	
	
<?php include'footer.php'; ?>
