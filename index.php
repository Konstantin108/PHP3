<?php

function getData($file){     //<-- функция для прочтения файла
    $myFile = fopen($file, "r");
    if ($myFile) {
       while (!feof($myFile)) {
           $lines[] = fgets($myFile);
       }
       fclose($myFile);
    }
    return $lines;
}

$data = getData('sum.txt');     //<-- файл, из которого получаем числа

function getRes(&$data){

    $num1 = trim($data[0]);
    $num2 = trim($data[1]);

    echo 'первое число: ' . $num1 . '<br>';
    echo 'второе число: ' . $num2;

    $maxLen = max(strlen($num1), strlen($num2));
    $num1 = str_pad($num1, $maxLen, '0', 0);
    $num2 = str_pad($num2, $maxLen, '0', 0);

    $result = '';
    $inMind = 0;

    for ($i = $maxLen - 1; $i >= 0; $i--) {
        $x1 = (int)$num1[$i];
        $x2 = (int)$num2[$i];

        $sum = $x1 + $x2;
        $sumFinal = $sum + $inMind;

        if ($sumFinal > 9) {
            $inMind = 1;
            $sumFinal %= 10;
        }else{
            $inMind = 0;
        }

        $result = $sumFinal . $result;
    }
    if ($inMind>0){
        $result = $inMind . $result;

    }
    return $result;
}

$res = getRes($data);

function writeRes(&$res){     //<-- функция для записи результата в файл

        $myFile = fopen('sum.txt', "r+");
        $result = "\n" . $res;

        fseek($myFile, 0, SEEK_END);
        fwrite($myFile, $result);
        fclose($myFile);

        echo '<br>' . 'результат вычисления: ' . $res . ' - результат записан в файл sum.txt' . '<br>';


}

writeRes($res);

