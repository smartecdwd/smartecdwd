<?php
    session_start();
    error_reporting(0);
    include 'db_con.php';

    $str=$_REQUEST['sh'];
    

?>

<?php include 'header.php'; ?>
    <link href="css/mytable.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong|Akaya+Telivigala|Alice|Average|Andada Pro|Enriqueta">
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@500&family=Fredoka+One&family=Roboto+Slab&family=Signika:wght@500&family=Zen+Kurenaido&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/css/dvstyle.css">
    
    <style>
        h5{font-family:Alice;color:#0074B7;text-align:center;font-size:20px;;font-weight:bold;text-transform:capitalize}
	    p{font-family:Average;font-size:17px;color:#000;margin:10px;;text-align:justify}
	    
	    .sea_div{
	        padding:20px;border-bottom:1px dotted #dc3545;
	    }
	    .sea_div a{
	        color:#145DA0;font-size:17px;
	        font-weight:600;
	        font-family:average;
	    }
	    .sea_div p{
	        font-size:14px;
	        font-weight:normal;
	    }
    </style>

    <div class="inner_page">
        <div class="container">
            <div class="row border_around p-3 text-justify">
                <div class="col-lg-12">
                    <section class="section1">
                        <div class="container">
                            <?php
                                $qry="select * from dep_mas where dname like '%$str%'";
                                $res=mysqli_query($conn,$qry);
                              //  echo $qry;
                                while($row=mysqli_fetch_assoc($res)){
                                ?>
                                    <div class="sea_div">
                                        <a href="history-development.php?nid=<?echo $row["did"];?>">
                                <?      echo $row["dname"]. "<br>"; ?>
                                    </a></div>
                            <?    }
                                
                                $qry="select * from notification where nname like '%$str%' order by ndate desc ";
                                $res=mysqli_query($conn,$qry);
                                
                                while($row=mysqli_fetch_assoc($res)){
                            ?>
                                    <div  class="sea_div">
                                        <a href="notifications-circular.php?nid=<?echo $row["nid"];?>">
                            <?        echo $row["nname"]. "<br>";?>
                                        </a>
                                    </div>
                            <? }
                            
                                $qry="select * from adm_page where design like '%$str%' ";
                                $res=mysqli_query($conn,$qry);
                                
                                while($row=mysqli_fetch_assoc($res)){
                            ?>
                                    <div class="sea_div">
                                        <a href="<?echo $row["web_page"];?>">
                                <?      echo $row["name"]. "<p>" . $row["descp"]. "</p>"; ?>
                                    </a></div>
                            <?  }
                            ?>
                                
                            
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
   <div class="clearfix"></div>
    <?php include'footer.php'; ?>