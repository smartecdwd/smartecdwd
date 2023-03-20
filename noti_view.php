 <?php
    
    if(time() - $_SESSION['user_start'] > 600)
    {
        session_destory();
        echo "<script>window.location.href='https://kud.ac.in/admin_panel';</script>";
    }
    
    if(isset($_SESSION['uid'])==false)
    {
        session_destory();
        echo "<script>window.location.href='https://kud.ac.in/admin_panel';</script>";
    }
 
    include "db_con.php";
  
    if (count($_POST["ids"]) > 0 ) {
        $all = implode(",", $_POST["ids"]);
    }
        echo $all;
    
  //  $nid="noti/".$_REQUEST['nid'];
//    echo $nid;
    //$qry = "SELECT file1 FROM notification WHERE file1=". $nid;
    //$res=mysqli_query($conn,$qry);
    
    
    //$cont="";
    //while($row=mysqli_fetch_array($res))
    //{
      //  $cont=$row['file1'];
    //}
    //if($cont!="")
    //{
      /*  header('Content-type: application/pdf');
        header("Cache-Control: no-cache");
        header("Pragma: no-cache");
        header("Content-Disposition: inline;filename='".$nid."'");
        header("Content-length: ".strlen($nid));
        echo $cont;
        exit();*/
   // }
?>
