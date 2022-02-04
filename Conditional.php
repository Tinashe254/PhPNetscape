<?php
// if statement
$num=23;
$num1=9;
if ($num>$num1){
    echo"The answer is correct.";
}
echo"<br>";

//if else statement
if($num>=21 || $num1<=5){
    echo "Correct Answer";
}else{
    echo "Incorrect Answer";
}
echo"<br>";

//if.....elseif...else
$mark=70;
if ($mark>=0 && $mark<=39){
    echo"You got a Fail";
}elseif ($mark>=40 && $mark<=59){
    echo"You got a Pass";
}elseif ($mark>=60 && $mark<=79) {
    echo "You got a Credit";
}elseif ($mark>=80 && $mark<=100) {
    echo "You got a distiction";
}else{
    echo "Out of Range";
}
