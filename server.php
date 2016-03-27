<?php 
$a=$_POST["co_a"];
$b=$_POST["co_b"];
$c=-$_POST["co_c"];
$x1="Invalid";
$x2="Invalid";
if($a>0){
$sqrt=sqrt($b*$b -(4*$a*$c));
$x1=round((-$b+ $sqrt)/(2*$a),2);
$x2=round((-$b- $sqrt)/(2*$a),2);
}
sleep(1);
 echo json_encode(array("ip"=>$_SERVER['SERVER_ADDR'],"x1"=>$x1,"x2"=>$x2));
?>