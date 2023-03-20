<?php
//error_reporting(0);
//include 'db_con.php';



?>


   <?php include 'header.php'; ?>
<link href="css/css/vstyle.css" rel="stylesheet" type="text/css" />
<link href="css/mytable.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Fredoka+One&family=Roboto+Slab&family=Signika:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Domine&family=Kanit:wght@300&family=PT+Serif&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong|Akaya+Telivigala|Alice|Average|Andada Pro|Enriqueta">
<style>
    h5{
        text-align:center;color:#145DA0;height:50px;padding:20px;font-size:20px;font-family:Alice;font-weight:500;}
</style>
<script>
    function cord_name(val){
        var str;
        str="<table style='width:80%;color:#000;font-size:14px' align='center'  id='customers'><tr><td>";
        if(val=='js')
            document.getElementById('cord_data').innerHTML="<h5>Jain Study Centre</h5>" + str + "Dr. T. M. Bhaskar Professor </td><tr><td>Dr. R. C. Hiremath Institute of Kannada Studies, Karnatak University, Dharwad</td></tr></table>";
        else if(val=='mv')
            document.getElementById('cord_data').innerHTML="<h5>Mahayogi Veman Peetha</h5>" + str +  "Dr. H. B. Neelgund Dean, Higher Education Academy Dharwad.</td></tr></table>";
        else if(val=='ss')
            document.getElementById('cord_data').innerHTML="<h5>Shree Somvansh Sahasrarjun Kshatriya Research Centre</h5><br>" + str +  "Dr. (Smt.) S. S. Imrapur, Retired Professor</td></tr><tr><td>Dr. R. C. Hiremath, Institute of Kannada Studies, Karnatak University, Dharwad.</td></tr></td></tr></table>";
        else if(val=="pv")
            document.getElementById('cord_data').innerHTML="<h5>Padma Vibhushana Dr. (Smt) Gangubai Hanagal Peetha</h5><br>" + str +  "Dr. M. H. Agadi, Professor, <br>Department of P.G. Studies in Music, Karnatak University, Dharwad. </td></tr></td></tr></table>";
        else if(val=="ka")
            document.getElementById('cord_data').innerHTML="<h5>Kanaka Adhyayana Peetha</h5>" + str +  "Dr. Hanamagouda C., Assistant Professor, <br>Department of P.G. Studies in Sociology, Karnatak University, Dharwad.  </td></tr></td></tr></table>";
        else if(val=="sb")
    		document.getElementById('cord_data').innerHTML="<h5>Shree Basaveshwar Peetha</h5>" + str +  "Dr. C. M. Kundgol, Retired Professor</td></tr><tr><td>Dr. R. C. Hiremath, Institute of Kannada Studies, Karnatak University, Dharwad.  </td></tr></table>";
    	else if(val=="br")
    		document.getElementById('cord_data').innerHTML="<h5>Dr. B. R. Ambedkar Studies</h5>" + str +  "Dr. Subhaschandra C. Natikar, Assistant Professor, <br>Department of P.G. Studies in Sociology, Karnatak University, Dharwad.  </td></tr></table>";
    	else if(val=="sv")
    		document.getElementById('cord_data').innerHTML="<h5>Swami Vivekanand Studies</h5>" + str +  "Dr. K. V. Juktimath, Professor, <br>Department of P.G. Studies in Philosophy, Karnatak University, Dharwad. </td></tr></table>";
    	else if(val=="ht")
    		document.getElementById('cord_data').innerHTML="<h5>Hajarat Tippu Sultan Study Centre</h5>" + str +  "Dr. Shaukath Azim, Professor, <br>Department of P.G. Studies in Sociology, Karnatak University, Dharwad.  </td></tr></table>";
    	else if(val=="jh")
    		document.getElementById('cord_data').innerHTML="<h5>Dr. Zakir Husen Study Centre</h5>" + str +  "Dr. Shaukath Azim, Professor, <br>Department of P.G. Studies in Sociology, Karnatak University, Dharwad.  </td></tr></table>";
    	else if(val=="cb")
    		document.getElementById('cord_data').innerHTML="<h5>Canara Bank Chair</h5>" + str +  "Dr. A. S. Shiralshetti, Professor, <br>Department of P.G. Studies in Commerce, Karnatak University, Dharwad.  </td></tr></table>";
    	else if(val=="sm")
    		document.getElementById('cord_data').innerHTML="<h5>Sahu Maharaj Study Centre</h5>" + str +  "Dr. P. K. Rathod, Assistant Professor,</td></tr><tr><td>Dr. R.C. Hiremath Institute of Kannada Studies, Karnatak University, Dharwad.  </td></tr></table>";
    	else if(val=="bj")
    		document.getElementById('cord_data').innerHTML="<h5>Babu Jagjivan Ram Study Centre</h5>" + str +  "Dr. Shivasharana C. T., Associate Professor, <br>Department of P.G. Studies in BioTechnology & Micro Biology, Karnatak University, Dharwad.  </td></tr></table>";
    	else if(val=="ps")
    		document.getElementById('cord_data').innerHTML="<h5>Pampa Study Centre</h5>" + str +  "Dr. Shanthinath Dibbad, Retired Professor</td></tr><tr><td>Dr. R. C. Hiremath, Institute of Kannada Studies, Karnatak University, Dharwad.  </td></tr></table>";
    	else if(val=="mm")
    		document.getElementById('cord_data').innerHTML="<h5>Dr. M. M. Kalburgi Research Centre</h5>" + str +  "Dr. T. M. Bhaskar, Professor</td></tr><tr><td>Dr. R. C. Hiremath, Institute of Kannada Studies, Karnatak University, Dharwad.  </td></tr></table>";
    	else if(val=="ks")
    		document.getElementById('cord_data').innerHTML="<h5>Konkani Study Centre</h5>" + str +  "Dr. U. S. Raikar, Retired Professor, <br>Department of P.G. Studies in Physics, Karnatak University, Dharwad.  </td></tr></table>";
    	else if(val=="mvs")
    		document.getElementById('cord_data').innerHTML="<h5>Maharshi Valmiki Study Centre</h5>" + str +  "Dr. Ashok M. Hulibandi, Professor, <br>Department of P.G. Studies in English, Karnatak University, Dharwad.  </td></tr></table>";
    }
    //window.onload=cord_name('js');
</script>
<body onload="cord_name('js'); return false;">
<div class="inner_page">
  <div class="container">
    <div class="row border_around p-3 text-justify">
      <div class="col-md-4 d-none d-sm-block col-sm-6" style="background-color:#e1ebea">
	 <!-- <h5 style="text-align:center;color:#145DA0;height:50px;padding:20px;font-size:17px;border-bottom:2px solid #145DA0;font-family:Alice"><b>ACADEMIC</b></h5>-->
	    <h5 style="text-align:center;color:#BB6464;height:50px;padding:20px;font-size:17px;border-bottom:2px solid #BB6464;font-family:Alice;text-transform:uppercase;text-align:center"><b>Study Chairs (Peethas)</b></h5>
	    <br>

            <div class="vertical-menu" style="width:100%;font-family:exo">
              
				<a href="study-chairs.php" id="js" value="js" onclick="cord_name('js'); return false;">Jain Study Centre</a>
				<a href="study-chairs.php" id="mv" value="mv" onclick="cord_name('mv');return false;">Mahayogi Veman Peetha</a>
				<a href="study-chairs.php" id="ss" value="ss" onclick="cord_name('ss');return false;">Shree Somvansh Sahasrarjun Kshatriya Research Centre</a>
				<a href="study-chairs.php" id="pv" value="pv" onclick="cord_name('pv');return false;">Padma Vibhushana Dr. (Smt) Gangubai Hanagal Peetha</a>
			    <a href="study-chairs.php" id="ka" value="ka" onclick="cord_name('ka');return false;">Kanaka Adhyayana Peetha</a>
			    <a href="study-chairs.php" id="sb" value="sb" onclick="cord_name('sb');return false;">Shree Basaveshwar Peetha</a>
			    <a href="study-chairs.php" id="br" value="br" onclick="cord_name('br');return false;">Dr. B. R. Ambedkar Studies</a>
			    <a href="study-chairs.php" id="sv" value="sv" onclick="cord_name('sv');return false;">Swami Vivekanand Studies</a>
			    <a href="study-chairs.php" id="ht" value="ht" onclick="cord_name('ht');return false;">Hajarat Tippu Sultan Study Centre</a>
			    <a href="study-chairs.php" id="jh" value="jh" onclick="cord_name('jh');return false;">Dr. Zakir Husen Study Centre</a>
			    <a href="study-chairs.php" id="cb" value="cb" onclick="cord_name('cb');return false;">Canara Bank Chair</a>
			    <a href="study-chairs.php" id="sm" value="sm" onclick="cord_name('sm');return false;">Sahu Maharaj Study Centre</a>
			    <a href="study-chairs.php" id="bj" value="bj" onclick="cord_name('bj');return false;">Babu Jagjivan Ram Study Centre</a>
			    <a href="study-chairs.php" id="ps" value="ps" onclick="cord_name('ps');return false;">Pampa Study Centre</a>
			    <a href="study-chairs.php" id="mm" value="mm" onclick="cord_name('mm');return false;">Dr. M. M. Kalburgi Research Centre</a>
			    <a href="study-chairs.php" id="ks" value="ks" onclick="cord_name('ks');return false;">Konkani Study Centre</a>
			    <a href="study-chairs.php" id="mvs" value="mvs" onclick="cord_name('mvs');return false;">Maharshi Valmiki Study Centre</a>
            </div>
        
      </div><br>
<br>

      <div class="col-sm-6 col-md-8">
          <h3 style="font-family:Trirong;color:#000; font-weight:600;padding:10px;text-align:center">Study Chairs (Peethas)</h3>
          <br>
        <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
            <!--<li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
            </li>-->
            <li class="nav-item">
                <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Coordinator</a>
                    
            </li>
            <!--<li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Event</a>
            </li>-->
        </ul>
        
        <section class="sectione2">
            <div class="container">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="cord_data" class="container tab-pane active"><br>
                       <!-- <div class="table-responsive">
                            <table id="customers" style="text-align:left">
                                <tr>
                                    <th style="text-align:center">Sl. No.</th>
                                    <th style="text-align:center">Peetha/Chairs </th>
                                    <th style="text-align:center">Director</th>
                                    <th style="text-align:center">Location of Peethas/Chairs</th>
                                </tr>
                                <tr>
                                    <td style="text-align:center; ">
                                        1
                                    </td>
                                    <td>
                                        Jain Studies
                                    </td>
                                    <td>
                                        Dr. T.M. Bhaskar </td>
                                    <td>
                                        Dr. R.C. Hiremath Studies in Kannada Department
</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center; ">
                                        2
                                    </td>
                                    <td>
                                        Mahayogi Veman Peetha
                                    </td>
                                    <td>
                                        Dr. H.B. Nilegund </td>
                                    <td>
                                    Dean, Higher Education Academy Dharwad</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center; ">
                                        3
                                    </td>
                                    <td>
                                        Shree Somvansh Sahasrarjun Kshatriya Research Centre
                                    </td>
                                    <td>
                                        Dr. (Smt) Shanta Imrapur, Rt.d Professor
                                    </td>
                                    <td>
                                        Dr. R.C. Hiremath Studies in Kannada Department
</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center; ">
                                        4
                                    </td>
                                    <td>
                                        Padma Vibhushana Dr. (Smt) Gangubai Hanagal Peetha.
                                    </td>
                                    <td>
                                        Dr. M.H. Agadi
                                    </td>
                                    <td>
                                        Music Department
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center; ">
                                        5
                                    </td>
                                    <td>
                                        <a href=" http://kudkanakapeetha.org/" target="_blank">
                                            Kanaka Adhyayana Peetha
                                        </a>
                                    </td>
                                    <td>
                                        Dr. Hanamgouda Channangouda </td>
                                    <td>
                                        Studies in Sociology</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center; ">
                                        6
                                    </td>
                                    <td>
                                        Shree Basaveshwar Peetha
                                    </td>
                                    <td>
                                        Dr. C.M. Kundgol, Rt.d Professor </td>
                                    <td>
                                        Dr. R.C. Hiremath Studies in Kannada Department
</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center; ">
                                        7
                                    </td>
                                    <td>
                                        Dr. B. R. Ambedkar studies
                                    </td>
                                    <td>
                                        Dr S.C Natikar
                                    </td>
                                    <td> Studies in Sociology</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center; ">
                                        8
                                    </td>
                                    <td>
                                        Swami Vivekanand studies
                                    </td>
                                    <td>
                                        Dr.M.A. Jalihal </td>
                                    <td>
                                        Studies in Philosophy
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center; ">
                                        9
                                    </td>
                                    <td>
                                        Hajarat Tippu Sultan Studies Centre
                                    </td>
                                    <td>
                                        Dr. Shoukat Ajim
                                    </td>
                                    <td>
                                        Studies in Sociology
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center; ">
                                        10
                                    </td>
                                    <td>
                                        Dr. Jakir Husen Studies Centre
                                    </td>
                                    <td>
                                        Dr. Shoukat Ajim
                                    </td>
                                    <td>Studies in Sociology</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center; ">
                                        11
                                    </td>
                                    <td>
                                        Canara Bank Chair
                                    </td>
                                    <td>
                                        Dr. A.S. Shiralshetti </td>
                                    <td>
                                        Studies in Commerce
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center; ">
                                        12
                                    </td>
                                    <td>
                                        <a href="Docs/Dr D.C. Pavate Chair for Art and Arcchaeology.pdf" target="_blank">
                                            Sahu Maharaj Studies Centre</a>
                                    </td>
                                    <td>
                                        Dr. P.K. Rathod </td>
                                    <td> <p>Dr. R.C. Hiremath Studies in Kannada Department </p>
                                    </td>
                                </tr>
                                <tr>
                                  <td style="text-align:center; ">13</td>
                                  <td>Babu Jagjivan Ram Studies Centre </td>
                                  <td>Dr. C.T. Shivsharan </td>
                                  <td>Studies in Biotechnology and Microbiology Department </td>
                                </tr>
                                <tr>
                                  <td style="text-align:center; ">14</td>
                                  <td>Pampa Studies Centrre </td>
                                  <td>Dr. Shantinath Dibbad, Rt.d Professor </td>
                                  <td>Dr. R.C. Hiremath Studies in Kannada Department </td>
                                </tr>
                                <tr>
                                  <td style="text-align:center; ">15</td>
                                  <td>Dr. M.M.Kalburgi Research Centre </td>
                                  <td>Dr. T.M. Bhaskar</td>
                                  <td>Dr. R.C. Hiremath Studies in Kannada Department</td>
                                </tr>
                                <tr>
                                  <td style="text-align:center; ">16</td>
                                  <td>Konkani Studies Centre</td>
                                  <td>Dr. U.S.Raikar, Rt.d Professor</td>
                                  <td>Physics Department</td>
                                </tr>
                                <tr>
                                  <td style="text-align:center; ">17</td>
                                  <td>Shree Valmiki Studies Centre </td>
                                  <td>Dr. Ashok Hulubandi </td>
                                  <td>English Department </td>
                                </tr>
                            
                        </table>
		            </div>-->
      <div class="clearfix"></div>
	</div>
		</section>
	</div>
	</div>
	                                                                                                                                                                          
	</div>
	</div>
	</div>
</body>
<?php include 'footer.php'; ?>
<script>
    $(".open_popup").click(function() {
    $($(this).data('rel')).show().siblings(".contentBox").hide();
    });
</script>