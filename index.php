<?php

$myFile = fopen('sum.txt', "r");

if ($myFile) {
   while (!feof($myFile)) {
       $lines[] = fgets($myFile);
   }
   fclose($myFile);
}

$numBeforeFix1 = strrev($lines[0]);
$num2 = strrev($lines[1]);

$num1 = substr($numBeforeFix1, 2);

$arr1 = str_split($num1, 1);
$arr2 = str_split($num2, 1);


function sum(&$array1, &$array2){
    $sumArr = [];
    for($i = 0; $i < count($array1); $i++){
        //echo $array1[$i] . ' - array1 ' . '<br><br>';

        //echo $array2[$i] . ' - array2 ' . '<br><br>';

        $sum = $array1[$i] + $array2[$i];

        echo $sum . ' - sum ' . '<br><br>';

        $sumArr[] = $sum;

    }
    echo '<pre>';

    var_dump($sumArr);
    return $sumArr;
}

//sum($arr1, $arr2);

$arrBeforeFix = sum($arr1, $arr2);

function fixArr(&$arr){
    $fixArr = [];
    for($j = 0; $j < count($arr); $j++){
        if($arr[$j] > 9){


            $n = (string)$arr[$j];
            $nFix = substr($n, 1);
            $nFixInt = (int)$nFix;
            echo $nFixInt;



            //$n = $arr[$j] - 10;
            $fixArr[] = $nFixInt;

            //$temp = 1;
            $nextJ = $arr[$j + 1] + 1;


             $nJ = (string)$nextJ;
            $nJFix = substr($nJ, 1);
            $nJFixInt = (int)$nJFix;

            if($nJFixInt == 0){
                $nJFixInt = 1;
            }

            echo $nJFixInt;
            //echo $n;
            $fixArr[] = $nJFixInt;

            //$nextJForDel = $arr[$j + 2];

            array_splice($arr, 1, 1);
        }else{
            $fixArr[] = $arr[$j];
        }

        //echo $arr[$j];
    }
    var_dump($fixArr);
    return $fixArr;
    //echo '<pre>';
    //var_dump($arr);
}

$arrForRev = fixArr($arrBeforeFix);

function result(&$arr){
    return array_reverse($arr);
}

$res = result($arrForRev);

function displayRes(&$res){
    $myFile = fopen('sum.txt', "r+");
    $rez = implode('', $res);

    $rezForW = "\n" . $rez;

    //$rez = "\nsdfdsf";
    fseek($myFile, 0, SEEK_END);
    fwrite($myFile, $rezForW);
    fclose($myFile);
}

displayRes($res);