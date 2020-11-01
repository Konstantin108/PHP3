<h1 style="color: red">Четвёртое задание</h1>
<?php

 $arr = [12, 5, 6, 1, 11, 10, 8, 9, 4, 3, 2, 7];

function mergeSort($myArr)
{
    echo '<pre>';
    $newArr = array_chunk($myArr, 2);

    print_r($newArr);

    foreach($newArr as  $value){
        if(is_array($value)){

              echo  array_keys ($value , '0');

        }
    }
}

mergeSort($arr);