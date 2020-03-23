<?php
//Факториал
//z! 1*2*3*4*5* ... *$z  z = 0 z1 = 1 z! = z * ((z-1)!)
function factorial($z)
{
    if ($z <= 0) return 1;
    else return $z * factorial($z - 1);
}
echo factorial(64);
?>


