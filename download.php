<?php 
$total = $_POST["total"];


Header( "Content-type: application/octet-stream "); 
Header( "Accept-Ranges: bytes "); 
header( "Content-Disposition: attachment; filename=test.hex "); 
header( "Expires: 0 "); 
header( "Cache-Control: must-revalidate, post-check=0, pre-check=0 "); 
header( "Pragma: public "); 

$arr = str_split($total);
for ($i=0; $i < count($arr); $i++) { 
    echo chr(ord($arr[$i])-30);
}
// $total = implode("", $arr);
// echo($total);
?>