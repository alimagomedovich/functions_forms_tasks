<?php

include '3.1.html';
$lenght_world=$_POST['lenght'];

$file=file_get_contents('3.2.txt');
$arr=(explode(' ',$file));

for ($i = 0; $i < count($arr); $i++) {

    if (mb_strlen($arr[$i])==$lenght_world){
        unset($arr[$i]);
    }
}
file_put_contents('3.3.txt',implode(" ", $arr));
