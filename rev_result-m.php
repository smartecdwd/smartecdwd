<?php
    session_start();
    error_reporting(0);
    require('db_con_rev_res.php');
?>

<?php include 'header.php'; ?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong|Akaya+Telivigala|Alice|Average|Andada Pro|Enriqueta">
<link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Fredoka+One&family=Roboto+Slab&family=Signika:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/css/dvstyle.css">
<style>
    h5{font-family:Alice;color:#0074B7;text-align:center;font-size:20px;font-weight:bold}
	 p{font-family:Average;font-size:17px;color:#000;margin:10px;;text-align:justify}
	 form{ display: block !important; visibility:visible !important}
	 
	 input[type='submit']:hover
	 {
	     background-color:#ee8a28;
	     cursor:pointer;
	 }
</style>

<body>
<div class="inner_page">
  <div class="container">
    <div class="row border_around p-1 text-justify">
        <div class="col-sm-12">
            <h2 class="title_head" style="font-family:Domine;text-align:center;padding-top:10px">Karnatak University, Dharwad</h2>
            <hr>
             <h5>REVALUATION RESULTS</h5>
            <div class="tab-content clearfix">
                 <div class="container tab-pane active">
                   <form method="post" action="rev_result.php">
                    <!--<form method="post" action="#">-->
                        <div class="row">
                            <div class="form-group col-sm-4">
                                
                            </div>
                            <div class="form-group col-sm-4">
                                <label name="for" class='form-group'>
                                    Select Degree :
                                </label>
                                <select class="form-control" name="deg" id="deg" style="font-size:13px" required>
                                    <option value="">(Select)</option>
                                    <option value="UG">UG</option>
                                    <!--<option value="PG">PG</option>-->
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-4">
                                
                            </div>
                            <div class="form-group col-sm-4">
                                <label name="for" class='form-group'>
                                    Select Course :
                                </label>
                                <select class="form-control" name="cou" id="cou" style="font-size:13px" required>
                                    <option value="">(Select)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-4">
                                <span style="float:right;padding-top:5px"></span>
                            </div>
                            <div class="form-group col-sm-4">
                                <label name="for" class='form-group'>
                                    Enter Register No. :
                                </label>
                                <input type="text" name="reg" class="form-control" style="font-size:13px" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8 ms-auto">
                                <span style="float:right">
                                    <input type="submit" class="form-control btn-danger" name="submit" style="width:200px;color:#fff">
                                </span>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-sm-8 ms-auto">
                                <?php
                                    if(isset($_REQUEST['msg']))
                                    {?>
                                        <span style="text-align:center;color:red;float:right;padding:10px">Result Not Found</span>
                                    <?}?>
                            </div>
                        </div>
                        <br><br>
                       
                    </form>
                                  
							  
                        </div>
                    </div>
                </div>
                
	
	
	
	<div class="clearfix"></div>
</div>      
                                                                                                                                                                   
</div>
</div>

  

<!-- <h4 style="margin-top:12px !important;"><a href="arts.php" style="font-family: 'Jockey One', sans-serif; font-size:14px"><i class="fa fa-caret-left"></i>&nbsp;&nbsp;BACK TO PAGE</a> </h4> -->


         
<div class="clearfix"></div>
<?php include 'footer.php'; ?>
   <script>
        $(document).ready(function(){
            $('#deg').on('change', function(){
                var wd1 = $(this).val();
                if(deg){
                    $.ajax({
                        url: 'load_course1.php',
                        type: 'post',
                        data: {deg:wd1},
                        dataType: 'json',
                        success:function(response){
                            var len = response.length;

                                $("#cou").empty();
                               // $("#cou").append("<option value=''>(Select)</option>";
                                for( var i = 0; i<len; i++){
                                   // alert(response[i]['id']);
                                    var id = response[i]['id'];
                                    var name = response[i]['name'];
        
                                    $("#cou").append("<option value='"+id+"'>"+name+"</option>");

                        }
                            
                            //$('#wd').html('<option value="">Select Ward First</option>'); 
                        }
                    }); 
                }
        });
    });
</script>
</body>
