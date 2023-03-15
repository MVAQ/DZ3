<?php

/**
 * task3.3
 * 
 *пока не готово
 * 
 */

/**
 * @param string $filePath
 * 
 * @return void
 */


 $nums;
 

 function fileRead( string $filePath): void{

 $fizz;
 $buzz;
 $end;

    $strimOfDataFrom = fopen($filePath, 'r');

    while(!feof($strimOfDataFrom)){
        
        $str=fgets($strimOfDataFrom);
        
        $nums=explode(',', $str);
       
        $fizz = $nums[0];
        $buzz = $nums[1];
        $end = $nums[2];   
        
        echo'___________________'.PHP_EOL;
        echo $fizz.PHP_EOL;
        echo $buzz.PHP_EOL;
        echo $end.PHP_EOL;

    }

      for ($i = 1; $i <= $end; $i++) {
 
        if ($i % $fizz === 0) {
            echo "F";
        } else if ($i % $buzz === 0) {
            echo "B";
        } else {
            echo $i;
        }
    
        echo " ";
    }

    echo PHP_EOL;

    fclose($strimOfDataFrom);

 }
 

 $arrayString=fileRead('fizzBuzzNum.txt');