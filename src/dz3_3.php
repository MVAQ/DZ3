<?php

/**
 * task3.1
 * 
 * Пользуясь имеющимися наработками написать функцию, которая из исходных данных 
 * одной строки получает результаты fizzbuzz. Другая функция должна прочесть из файла
 * множество строк вида "3 5 18", т.е. исходных данных для fizzbuzz, 
 * и записать в другой файл полученные при помощи первой функции результаты по каждой строке.
 * 
 */

/**
 * @param string $filePath
 * 
 * @return array
 */


 $nums;

 function fileRead( string $filePath): array{

    $strimOfDataFrom = fopen($filePath, 'r');

    while(!feof($strimOfDataFrom)){
        
        $str=fgets($strimOfDataFrom);
        
        $nums=explode(',', $str);
        echo'___________________'.PHP_EOL;
        var_dump($nums[1]);


    }
      return $nums;
    
    fclose($strimOfDataFrom);

 }
 

 $arrayString=fileRead('fizzBuzzNum.txt');

















/*
 function fileRead( string $filePath): array{

    $strimOfDataFrom = fopen($filePath, 'r');

    while(!feof($strimOfDataFrom)){
        
        $str=fgets($strimOfDataFrom);
        
        $nums=explode(',', $str);
        
        return $nums;
    }
    
   
    return $nums;
    fclose($strimOfDataFrom);

   
 }

 function fileWrite( string $filePath, $arrayString){

 $dataStreamTo = fopen( $filePath, 'w+');

 echo '____________';


    foreach ($arrayString as $key => $str) {
        $data=$arrayString[$key];
        echo $key;
          if($key%2==0){
            fputs($dataStreamTo, $data.PHP_EOL);
          }
    }
    fclose($dataStreamTo);
}
*/

 //var_dump($arrayString);
 //fileWrite('writingTextFile.txt', $arrayString);
