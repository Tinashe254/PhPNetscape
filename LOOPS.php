<?php
//WHILE....LOOPS
$Num=10;        //Initial

while ($Num>=0){
    echo "The Amount is $Num Ksh <br>";
    $Num-=3;
}
echo "<br>";

//Do While
$Num2=3;

do{
    echo"The Number is: $Num2<Br>";
    $Num2++;
}while($Num2<=5);
echo "<br>";

//Assignment
$No1=100;
while($No1>=20){
    echo"I'm Learning PHP<br>";
    $No1-=5;
}
echo "<br>";

$No2=4;
do{
    echo"DO_While_For loops<br>";
    $No2--;
}while($No2>1);
echo" <br>";

//FOR LOOP
$No3;
for ($No3=1;$No3<=3;$No3++){

    echo"  $No3";

}
echo"<br><br>";
$netscapeclass=array("C","P","D",35,565.77,true, false);

var_dump($netscapeclass);
echo "<br>";
foreach ($netscapeclass as $darasa){
    echo"$darasa<br>";
 }





