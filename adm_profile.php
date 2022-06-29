<?php
    $sl=$_REQUEST['slno']; 
    $qry="select * from adm_page where slno=".$sl;
    $res=mysqli_query($conn,$qry);
    $prf="";$fn="";
    while($row=mysqli_fetch_array($res))
    {
        $fn=$row['name'].".pdf";
        $pdf_contents=$row['profile'];
    }
   /* header("Content-type: application/pdf");
    header("Content-Disposition: inline; filename=".$fn);
    header("Content-Transfer-Encoding: binary");
    header("Accept-Ranges: bytes");
    //@readfile("data:application/pdf;base64,$prf");*/
    
    header('Content-type: application/pdf');
    header("Cache-Control: no-cache");
    header("Pragma: no-cache");
    header("Content-Disposition: inline;filename=myfile.pdf'");
    header("Content-length: ".strlen($pdf_contents));
    echo $pdf_contents;
?>
    <!--<object data="data:application/pdf;base64,<?php //echo base64_encode($prf);?>" type="application/pdf" height="100%" width="100%"></object>-->