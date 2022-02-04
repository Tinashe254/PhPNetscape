<?php
function Tish(){
    echo"How are you my future Programmer";
}
Tish();
echo"<br>";
// arguments in PhP
function myclass($fname,$sname){
    echo "$fname.$sname<br>";
}
myclass("Tinashe", "Njeri");
myclass("Gabby", "Gathoni");
myclass("Dennis", "Muturi");
echo"<br>";

    function numbers(int $num, int $num2){
    return $num/$num2;

}