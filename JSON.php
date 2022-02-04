<?php
//Json state for Javascript object Notation


$netscape=array('Erick'=>45,'Maureen'=>19,'Tinah'=>75,'Mary'=>80);

echo json_encode($netscape);
echo"<br>";

$jsonobj='{"Erick":45,"Maureen":19,"Tinah":75,"Mary":80}';

var_dump(json_decode($jsonobj));