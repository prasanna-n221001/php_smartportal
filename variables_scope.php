<?php
$greeting="Hello,Welcome to smartcityportal";
$no_of_registers=1500;
$flo=3.5;
$Boolean=True;
$services=array("water","electricity");
echo "$greeting<br>";
echo "$no_of_registers<br>";
echo "flo<br>";
echo "$Boolean<br>";
echo "services<br>";
$regnum=1000;
function greeting(){
$hii="hello welcome<br>";
echo "$hii";
}
greeting();
function registers(){
    global $regnum;
    $regnum=1500;
    echo "no of registers equal to $regnum<br>";
}
registers();

function students(){
    static $no_of_students=10000;
    $no_of_students++;
    echo "no of students is $no_of_students<br>";
}
students();
students();
?>